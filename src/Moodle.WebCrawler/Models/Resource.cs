using System;
using System.Collections.Generic;
using Moodle.WebCrawler.Enums;

namespace Moodle.WebCrawler.Models
{
    public class Resource : IEquatable<Resource>
    {
        public string Subject { get; set; }
        public string FileName { get; set; }
        public Uri Uri { get; set; }
        public string Description { get; set; }
        public ResourceType ResourceType { get; set; }

        public Resource()
        {
            
        }
        public Resource(string subject, string fileName, Uri uri, string description, ResourceType resourceType)
        {
            Subject = subject;
            FileName = fileName;
            Uri = uri;
            Description = description;
            ResourceType = resourceType;
        }

        public static ResourceType GetResourceType(string resourceType)
        {
            switch (resourceType.ToLower())
            {
                case "file":
                case "datei":
                    return ResourceType.File;

                case "folder":
                case "verzeichnis":
                    return ResourceType.Folder;

                // TODO: Implement in network client to download all chapters. Temporary returning as Url.
                case "book":
                case "buch":
                    return ResourceType.Url;

                case "url":
                case "link/url":
                case "assignment":
                case "achievement":
                case "certificate":
                case "chat":
                case "choice":
                case "database":
                case "feedback":
                case "forum":
                case "glossary":
                case "checklist":
                case "hot question":
                case "journal":
                case "label":
                case "lesson":
                case "page":
                case "questionnaire":
                case "quiz":
                case "reader":
                case "survey":
                case "wiki":
                case "workshop":
                case "live streaming":
                    return ResourceType.Url;

                default:
                    return ResourceType.UNKNOWN;
            }
        }

        public override bool Equals(object obj)
        {
            return Equals(obj as Resource);
        }

        public bool Equals(Resource other)
        {
            return other != null &&
                   Subject == other.Subject &&
                   FileName == other.FileName &&
                   EqualityComparer<Uri>.Default.Equals(Uri, other.Uri) &&
                   Description == other.Description &&
                   ResourceType == other.ResourceType;
        }

        public override int GetHashCode()
        {
            int hashCode = -1887833118;
            hashCode = hashCode * -1521134295 + EqualityComparer<string>.Default.GetHashCode(Subject);
            hashCode = hashCode * -1521134295 + EqualityComparer<string>.Default.GetHashCode(FileName);
            hashCode = hashCode * -1521134295 + EqualityComparer<Uri>.Default.GetHashCode(Uri);
            hashCode = hashCode * -1521134295 + EqualityComparer<string>.Default.GetHashCode(Description);
            hashCode = hashCode * -1521134295 + ResourceType.GetHashCode();
            return hashCode;
        }

        public static bool operator ==(Resource resource1, Resource resource2)
        {
            return EqualityComparer<Resource>.Default.Equals(resource1, resource2);
        }

        public static bool operator !=(Resource resource1, Resource resource2)
        {
            return !(resource1 == resource2);
        }
    }
}