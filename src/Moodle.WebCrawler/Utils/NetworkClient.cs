using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Runtime.CompilerServices;
using System.Threading.Tasks;
using Moodle.WebCrawler.Enums;
using Moodle.WebCrawler.Models;
using Moodle.WebCrawler.Properties;

namespace Moodle.WebCrawler.Utils
{
    public class NetworkClient
    {
        private readonly string URL_MOODLE_ROOT;
        private readonly string URL_LOGIN_PAGE;
        private readonly string URL_USER_PROFILE_PAGE;
        private readonly string URL_USER_LANGUAGE_PAGE;
        private readonly string URL_COOKIE_PATH;


        private const string PARM_NOTUSED = "anchor";
        private const string PARM_USER = "username";
        private const string PARM_PASS = "password";


        private readonly CookieContainer cookieJar;
        private readonly HttpClientHandler clientHandler;
        private readonly HttpClient client;


        public NetworkClient()
        {
            string rootUrl = Settings.Default["UrlMoodleRoot"].ToString();
            if (!Uri.IsWellFormedUriString(rootUrl, UriKind.Absolute))
                throw new UriFormatException("Make sure the UrlMoodleRoot in configuration file is set properly to the " +
                                             "root site of your moodle server including protocol(http/https).");

            URL_MOODLE_ROOT = rootUrl.EndsWith("/") ? rootUrl.TrimEnd('/') : rootUrl;
            URL_LOGIN_PAGE = URL_MOODLE_ROOT + "/login/index.php";
            URL_USER_PROFILE_PAGE = URL_MOODLE_ROOT + "/user/profile.php";
            URL_USER_LANGUAGE_PAGE = URL_MOODLE_ROOT + "/user/language.php";
            URL_COOKIE_PATH = URL_MOODLE_ROOT;

            cookieJar = new CookieContainer();
            clientHandler = new HttpClientHandler
            {
                UseCookies = true,
                CookieContainer = cookieJar,
                ClientCertificateOptions = ClientCertificateOption.Automatic,
                AllowAutoRedirect = true,
                MaxAutomaticRedirections = 5
            };

            client = new HttpClient(clientHandler);
        }


        public bool Authenticate(User user)
        {
            HttpResponseMessage rootResp = SendRequestAsync(() => client.GetAsync(URL_MOODLE_ROOT));
            List<Cookie> oldCookies = GetCookies(URL_COOKIE_PATH);

            HttpContent payload = BuildLoginPayloadData(user);
            HttpResponseMessage loginResp = SendRequestAsync(() => client.PostAsync(URL_LOGIN_PAGE, payload));
            List<Cookie> newCookies = GetCookies(URL_COOKIE_PATH);

            Console.WriteLine($"Received new cookie?: {!oldCookies.SequenceEqual(newCookies)}");

            string oldCookie = oldCookies.Find(c => c.Name.Equals("MoodleSession"))?.Value;
            string newCookie = newCookies.Find(c => c.Name.Equals("MoodleSession"))?.Value;

            return oldCookie != null && newCookie != null && !oldCookie.Equals(newCookie);
        }


        private HttpContent BuildLoginPayloadData(User user)
        {
            List<KeyValuePair<string, string>> userCredentials = new List<KeyValuePair<string, string>>
            {
                new KeyValuePair<string, string>(PARM_NOTUSED, ""),
                new KeyValuePair<string, string>(PARM_USER, user.Username),
                new KeyValuePair<string, string>(PARM_PASS, user.Password)
            };

            return new FormUrlEncodedContent(userCredentials);
        }


        private List<Cookie> GetCookies(string uri)
        {
            Uri cookiesPath = new Uri(uri);
            List<Cookie> cookiesList = cookieJar.GetCookies(cookiesPath).Cast<Cookie>().ToList();

            Console.WriteLine("Cookies:");
            cookiesList.ForEach(cookie => Console.WriteLine($@"{cookie.Name}: {cookie.Value}"));

            return cookiesList;
        }

        public string GetUserLanguageContent() => GET(new Uri(URL_USER_LANGUAGE_PAGE));

        public string GetUserCoursesContent() => GET(new Uri(URL_USER_PROFILE_PAGE + "?showallcourses=1"));

        public string GetCourseContent(Uri uri) => GET(uri);

        public string GetCourseResourcesContent(Uri uri) => GET(uri);

        public bool ChangeUserLanguage(LanguageType languageType, List<KeyValuePair<string, string>> fields)
        {
            // payload = id=3976&course=1&sesskey=4Ex88jAQUw&_qf__user_edit_language_form=1&lang=de&submitbutton=Save+changes
            fields.Add(new KeyValuePair<string, string>("lang", Language.GetNotation(languageType)));
            fields.Add(new KeyValuePair<string, string>("submitbutton", "Save+changes"));

            HttpContent payload =  new FormUrlEncodedContent(fields);
            HttpResponseMessage langResp = SendRequestAsync(() => client.PostAsync(URL_USER_LANGUAGE_PAGE, payload));

            return langResp.IsSuccessStatusCode;
        }

        public void Download(Uri uri, string dirPath, string fileName, ResourceType resourceType)
        {
            if (!uri.Segments.Last().EndsWith("?forcedownload="))
                uri = new Uri(uri + "?forcedownload=true&redirect=true");
            HttpResponseMessage resp = SendRequestAsync(() => client.GetAsync(uri));
            resp.Headers.TryGetValues("X-Frame-Options", out IEnumerable<string> frameOption);

            // isSameOrigin means, whether to redirect or another page or download the actual file
            // i.e: pdf files, zip etc...
            bool isSameOrigin = frameOption != null && frameOption.First().Equals("sameorigin");

            // The server sent us a uri for the downloading actual file.
            bool isServerRedirect = resp.RequestMessage.RequestUri.IsAbsoluteUri;
            if (isServerRedirect && isSameOrigin && resourceType == ResourceType.Folder)
            {
                DownloadDirectoryToArchive(uri, dirPath, resp);
            }
            else if (isServerRedirect && resourceType == ResourceType.Url)
            {
                DownloadRefLinkToText(uri, dirPath, fileName, resp);
            }
            else if (isServerRedirect && !isSameOrigin)
            {
                DownloadResource(uri, dirPath, resp);
            }
            else
            {
                DownloadToHtmlPage(uri, dirPath, fileName, resp);
            }
        }

        private void DownloadDirectoryToArchive(Uri resourceUri, string dirPath, HttpResponseMessage resp)
        {
            Uri fileUri = new Uri(resp.RequestMessage.RequestUri.ToString().Replace("view.php", "download_folder.php"));
            HttpResponseMessage fileResp = SendRequestAsync(() => client.GetAsync(fileUri));

            if (fileResp.IsSuccessStatusCode)
            {
                string archiveName = fileResp.Content.Headers.ContentDisposition.FileName;
                archiveName = archiveName.Substring(3, archiveName.Length - 4); // remove 3 first chars and 3 last.

                string filePath = Path.Combine(dirPath, archiveName);
                Console.WriteLine($@"Folder -> Uri: {resourceUri} | Path: {filePath}  | Redirect Uri: {fileUri}");

                byte[] fileBuffer = fileResp.Content.ReadAsByteArrayAsync().Result;
                File.WriteAllBytes(filePath, fileBuffer);
            }
            else
            {
                Console.WriteLine($@"Folder -> Uri: {resourceUri} | #### Empty Directory #####");
            }
        }

        private void DownloadRefLinkToText(Uri resourceUri, string dirPath, string fileName, HttpResponseMessage resp)
        {
            if (fileName.Length > 50)
                fileName = fileName.Substring(0, 50) + "...shorted";
            string filePath = Path.Combine(dirPath, fileName + "_ExternalLink.txt");
            Console.WriteLine($@"Link -> Uri: {resourceUri} | Path: {filePath}");

            string pageContents = resp.RequestMessage.RequestUri.ToString();
            File.WriteAllText(filePath, pageContents);
        }

        private void DownloadResource(Uri resourceUri, string dirPath, HttpResponseMessage resp)
        {
            Uri fileUri = resp.RequestMessage.RequestUri;
            HttpResponseMessage fileResp = SendRequestAsync(() => client.GetAsync(fileUri));
            string filePath = Path.Combine(dirPath, Uri.UnescapeDataString(fileUri.Segments.Last()));
            Console.WriteLine($@"File -> Uri: {resourceUri} | Path: {filePath}  | Redirect Uri: {fileUri}");

            byte[] fileBuffer = fileResp.Content.ReadAsByteArrayAsync().Result;
            File.WriteAllBytes(filePath, fileBuffer);
        }

        private void DownloadToHtmlPage(Uri resourceUri, string dirPath, string fileName, HttpResponseMessage resp)
        {
            string filePath = Path.Combine(dirPath, fileName + ".html");
            Console.WriteLine($@"Page -> Uri: {resourceUri} | Path: {filePath}");

            string pageContents = resp.Content.ReadAsStringAsync().Result;
            File.WriteAllText(filePath, pageContents);
        }

        public string GET(Uri uri)
        {
            if (!uri.IsWellFormedOriginalString())
                throw new UriFormatException("[NetworkClient::GET] - Invalid uri format.");

            HttpResponseMessage resp = SendRequestAsync(() => client.GetAsync(uri));

            return resp.Content.ReadAsStringAsync().Result;
        }

        /// <param name="requestCallback">Request delegate.</param>
        /// <param name="callerMethod">Default parameter for the caller method.</param>
        /// <returns><see cref="HttpResponseMessage"/>.</returns>
        public HttpResponseMessage SendRequest(
            Func<HttpResponseMessage> requestCallback,
            [CallerMemberName] string callerMethod = "")
        {
            HttpResponseMessage response;

            try
            {
                response = requestCallback.Invoke();
            }
            catch (HttpRequestException ex)
            {
                throw new HttpRequestException(
                    $"[{callerMethod}] - HttpRequestException thrown while sending a request -> "
                    + ex.Message, ex);
            }
            catch (Exception ex)
            {
                throw new Exception(
                    $"[{callerMethod}] - Exception thrown while sending a request -> "
                    + ex.Message, ex);
            }

            return response;
        }

        /// <param name="requestCallback">Awaitable Request delegate.</param>
        /// <param name="callerMethod">Default parameter for the caller method.</param>
        /// <returns>A <see cref="Task"/> of <see cref="HttpResponseMessage"/>.</returns>
        public HttpResponseMessage SendRequestAsync(
            Func<Task<HttpResponseMessage>> requestCallback,
            [CallerMemberName] string callerMethod = "")
        {
            HttpResponseMessage response;

            try
            {
                response = requestCallback.Invoke().Result;
            }
            catch (HttpRequestException ex)
            {
                throw new HttpRequestException(
                    $"[{callerMethod}] - HttpRequestException thrown while sending a async-request -> "
                    + ex.Message, ex);
            }
            catch (Exception ex)
            {
                throw new Exception(
                    $"[{callerMethod}] - Exception thrown while sending a async-request -> "
                    + ex.Message, ex);
            }

            return response;
        }
    }
}