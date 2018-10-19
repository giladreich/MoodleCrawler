using System;
using System.Collections.Generic;
using System.IO;
using System.Windows.Forms;
using Moodle.WebCrawler.Enums;
using Moodle.WebCrawler.Models;
using Moodle.WebCrawler.Utils;

namespace Moodle.WebCrawler.Views
{
    public partial class MainWindow : Form
    {
        private string rootDir;
        private Language userPreferredLanguage;

        private readonly NetworkClient web;
        private readonly HtmlParser parser;

        public MainWindow(User user)
        {
            InitializeComponent();
            lblName.Text = $"Welcome {user.Username}!";

            web = Program.NetworkClient;
            parser = new HtmlParser();
        }

        private void MainWindow_Load(object sender, EventArgs e)
        {
            ChangeUserLanguageToNativeEnglish();

            string content = web.GetUserCoursesContent();
            List<Course> courses = parser.GetCoursesList(content);
            foreach (Course course in courses)
                lbxCourses.Items.Add(course);
            lbxCourses.SelectedIndex = 0;

            Activate();
        }

        private void lbxCourses_DoubleClick(object sender, EventArgs e) => btnParse.PerformClick();

        private void btnParse_Click(object sender, EventArgs e)
        {
            Course course = lbxCourses.SelectedItem as Course;
            if (course == null) return;

            StartDownload(course);


            MessageBox.Show($"Success! ヽ(^。^)ノ \nDownloaded all course resources.", "INFO",
                MessageBoxButtons.OK, MessageBoxIcon.Information);

            Activate();
        }

        private void btnParseAll_Click(object sender, EventArgs e)
        {
            foreach (object obj in lbxCourses.Items)
            {
                Course course = obj as Course;
                if (course == null) continue;

                StartDownload(course);
            }

            MessageBox.Show($"Success! ヽ(^。^)ノ \nDownloaded all courses resources.", "INFO",
                MessageBoxButtons.OK, MessageBoxIcon.Information);

            Activate();
        }

        private void StartDownload(Course course)
        {
            Console.WriteLine($@"Selected Course: {course.Title} - {course.Uri}");

            if (String.IsNullOrEmpty(rootDir))
            {
                FolderBrowserDialog fbd = new FolderBrowserDialog();
                if (fbd.ShowDialog() != DialogResult.OK) return;

                rootDir = Path.Combine(fbd.SelectedPath, $"Parsed_Content_{DateTime.Now:yy-MM-dd_hh-mm}");
            }

            string dstDir = Path.Combine(rootDir, ValidateDirOrFileName(course.Title));
            Directory.CreateDirectory(dstDir);

            string fileName = $"{course.Title}.html";
            string courseContent = web.GetCourseContent(course.Uri);
            File.WriteAllText(Path.Combine(dstDir, fileName), courseContent);

            Uri courseResourcesUri = new Uri(course.Uri.ToString().Replace("view.php", "resources.php"));
            string courseResourcesContent = web.GetCourseResourcesContent(courseResourcesUri);
            List<Resource> courseResources = parser.GetResourceTableData(courseResourcesContent);

            string curDir = dstDir;
            foreach (Resource courseResource in courseResources)
            {
                curDir = ValidateDirectoryExistence(dstDir, curDir, courseResource);
                string validFileName = ValidateDirOrFileName(courseResource.FileName);

                try
                {
                    web.Download(courseResource.Uri, curDir, validFileName, courseResource.ResourceType);
                }
                catch (Exception)
                {
                    DialogResult answer = MessageBox.Show($"Failed to download Resource file:\n{courseResource.Uri}\n" +
                                                          $"Would you like to continue to the next one?", "ERROR",
                                                          MessageBoxButtons.YesNo, MessageBoxIcon.Error, 
                                                          MessageBoxDefaultButton.Button2);

                    if (answer != DialogResult.Yes) break;
                }
            }
        }

        private bool ChangeUserLanguageToNativeEnglish()
        {
            string langContent = web.GetUserLanguageContent();
            List<Language> languages = parser.GetAvailableLanguages(langContent);
            foreach (Language language in languages)
            {
                if (!language.SelectedLanguage) continue;

                if (language.LanguageType != LanguageType.English)
                {
                    userPreferredLanguage = language;
                    List<KeyValuePair<string, string>> fields = parser.GetLanguageSubmissionFormHiddenFields(langContent);

                    Console.WriteLine("Temporary changing user language to English to avoid parsing conflicts.");
                    return web.ChangeUserLanguage(LanguageType.English, fields);
                }
            }

            return false;
        }

        private bool ResetUserLanguageToDefault()
        {
            if (userPreferredLanguage == null) return true;

            Console.WriteLine($"Changed back to user preferred language: {userPreferredLanguage.Notation}");

            string langContent = web.GetUserLanguageContent();
            List<KeyValuePair<string, string>> fields = parser.GetLanguageSubmissionFormHiddenFields(langContent);
            
            return web.ChangeUserLanguage(userPreferredLanguage.LanguageType, fields);
        }

        private string ValidateDirectoryExistence(string dstDir, string curDir, Resource resource)
        {
            if (!String.IsNullOrEmpty(resource.Subject))
            {
                curDir = dstDir; // resets it back to the root path.
                string dirName = ValidateDirOrFileName(resource.Subject);
                curDir = Path.Combine(curDir, dirName);
                if (!Directory.Exists(curDir))
                    Directory.CreateDirectory(curDir);
            }

            return curDir;
        }

        /// <summary>
        /// Characters that are not allowed for directory/file name on windows:
        /// < > : " / \ | ? *
        /// </summary>
        /// <param name="dirName"></param>
        /// <returns></returns>
        private string ValidateDirOrFileName(string dirName)
        {
            dirName = dirName.Replace('<', ' ');
            dirName = dirName.Replace('>', ' ');
            dirName = dirName.Replace(':', ' ');
            dirName = dirName.Replace('"', ' ');
            dirName = dirName.Replace('/', ' ');
            dirName = dirName.Replace('\\', ' ');
            dirName = dirName.Replace('|', ' ');
            dirName = dirName.Replace('?', ' ');
            dirName = dirName.Replace('*', ' ');
            return dirName;
        }

        private void MainWindow_FormClosing(object sender, FormClosingEventArgs e)
        {
            if (userPreferredLanguage != null)
            {
                e.Cancel = true;
                ResetUserLanguageToDefault();
                userPreferredLanguage = null;

                Close();
            }
        }
    }
}
