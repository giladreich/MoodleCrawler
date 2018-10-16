using System;
using System.Collections.Generic;
using System.Linq;
using System.Text.RegularExpressions;

using Moodle.WebCrawler.Enums;
using Moodle.WebCrawler.Models;
using Moodle.WebCrawler.Properties;

using HtmlAgilityPack;

namespace Moodle.WebCrawler.Utils
{
    public class HtmlParser
    {
        private const string XPATH_COURSES               = "//section[@class=\"node_category\"]/ul/li/dl/dd/ul";
        private const string XPATH_COURSE_RESOURCE_TABLE = "//div[@role=\"main\"]/table/tbody";
        private const string XPATH_USER_LANGUAGE_FORM 
            = "//form['/user/language.php'=substring(@action,string-length(@action)-string-length('/user/language.php')+1)]";

        private const string XPATH_USER_LANGUAGE_FIELDS = XPATH_USER_LANGUAGE_FORM + "/div";
        private const string XPATH_USER_LANGUAGE_OPTIONS = XPATH_USER_LANGUAGE_FORM + "/div/div/select";

        private const string GOOGLE_URL                  = "www.google.com";
        private const int MAX_TABLE_COLUMNS_COUNT         = 3;

        public HtmlParser() { }

        public List<Course> GetCoursesList(string content)
        {
            List<Course> result = new List<Course>();
            HtmlNodeCollection nodes = GetNodes(content, XPATH_COURSES);
            HtmlNode coursesNode = null;
            foreach (HtmlNode node in nodes)
            {
                HtmlNode tmpNode = node.FirstChild;
                if (tmpNode == null) continue;

                string url = tmpNode.FirstChild.GetAttributeValue("href", GOOGLE_URL);
                if (!url.Contains("course=")) continue;

                coursesNode = node;
                break;
            }

            if (coursesNode == null) return result;

            foreach (HtmlNode courseNode in coursesNode.ChildNodes)
            {
                string courseName = courseNode.InnerText.Trim();
                string url = courseNode.FirstChild.GetAttributeValue("href", GOOGLE_URL).Trim();
                if (url.Equals(GOOGLE_URL)) continue;

                string root = Settings.Default["UrlMoodleRoot"].ToString();
                string courseId = Regex.Match(url, "course=(\\d+)").Groups[1].Value;
                Uri uri = new Uri($"{root}/course/view.php?id={courseId}");
                result.Add(new Course(courseName, uri));
            }

            return result;
        }


        public List<Resource> GetResourceTableData(string content)
        {
            HtmlNode tableNode = GetNode(content, XPATH_COURSE_RESOURCE_TABLE);
            tableNode = GetAllNodesByTag(tableNode, "tr");

            List<Resource> result = new List<Resource>();
            foreach (HtmlNode childNode in tableNode.ChildNodes)
            {
                HtmlNode rowNode = GetAllNodesByTag(childNode, "td");
                if (rowNode.ChildNodes.Count != MAX_TABLE_COLUMNS_COUNT) continue;

                HtmlNode topicNode       = rowNode.ChildNodes[0];
                HtmlNode nameNode        = rowNode.ChildNodes[1];
                HtmlNode descriptionNode = rowNode.ChildNodes[2];

                Resource resource = new Resource();
                resource.Subject = topicNode.InnerText.Trim();
                resource.FileName = nameNode.InnerText.Trim();
                resource.Uri = new Uri(nameNode.FirstChild.GetAttributeValue("href", GOOGLE_URL));
                resource.Description = descriptionNode.InnerText.Trim();
                
                string resourceType = nameNode.FirstChild
                    .FirstChild.GetAttributeValue("alt", "unknown").Trim();

                resource.ResourceType = Resource.GetResourceType(resourceType);

                result.Add(resource);
            }

            return result;
        }



        public List<Language> GetAvailableLanguages(string content)
        {
            HtmlNode optionsNode = GetNode(content, XPATH_USER_LANGUAGE_OPTIONS);
            optionsNode = GetAllNodesByTag(optionsNode, "option");

            List<Language> result = new List<Language>();
            foreach (HtmlNode optionNode in optionsNode.ChildNodes)
            {
                Language language = new Language();
                language.Notation = optionNode.Attributes["value"].Value;
                language.LanguageType = Language.GetType(language.Notation);

                if (optionNode.Attributes["selected"] != null)
                    language.SelectedLanguage = true;

                result.Add(language);
            }

            return result;
        }

        public List<KeyValuePair<string, string>> GetLanguageSubmissionFormHiddenFields(string content)
        {
            HtmlNode fieldsNode = GetNode(content, XPATH_USER_LANGUAGE_FIELDS);
            fieldsNode = GetAllNodesByTag(fieldsNode, "input");

            List<KeyValuePair<string, string>> result = new List<KeyValuePair<string, string>>();

            foreach (HtmlNode fieldNode in fieldsNode.ChildNodes)
            {
                string key = fieldNode.Attributes["name"].Value;
                string value = fieldNode.Attributes["value"].Value;

                KeyValuePair<string, string> pair = new KeyValuePair<string, string>(key, value);

                result.Add(pair);
            }

            return result;
        }

        private HtmlNode GetNode(string content, string xpath)
        {
            HtmlDocument document = new HtmlDocument();
            document.LoadHtml(content);

            HtmlNode node = document.DocumentNode.SelectSingleNode(xpath);

            return node;
        }

        private HtmlNodeCollection GetNodes(string content, string xpath)
        {
            HtmlDocument document = new HtmlDocument();
            document.LoadHtml(content);

            HtmlNodeCollection nodes = document.DocumentNode.SelectNodes(xpath);

            return nodes;
        }

        /// <summary>
        /// HtmlAgilityPack sometimes randomly picks up spaces as #text empty node, therefore this method
        /// made to filter a node by specific tags. Does not do deep filtering.
        /// </summary>
        /// <param name="srcNode">The node to filter and to be modified.</param>
        /// <param name="tags">The tags to be keept for the specific node.</param>
        /// <returns></returns>
        private HtmlNode GetAllNodesByTag(HtmlNode srcNode, params string[] tags)
        {
            List<HtmlNode> nodesToRemove = srcNode.ChildNodes.Where(c => !tags.Contains(c.Name)).ToList();
            nodesToRemove.ForEach(node => srcNode.RemoveChild(node));

            return srcNode;
        }
    }
}