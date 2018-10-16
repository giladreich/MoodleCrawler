using System;
using System.Collections.Generic;

namespace Moodle.WebCrawler.Models
{
    public class Course : IEquatable<Course>
    {
        public string Title { get; set; }
        public Uri Uri { get; set; }

        public Course() { }

        public Course(string title, string uri)
        {
            Title = title;
            Uri = new Uri(uri);
        }
        public Course(string title, Uri uri)
        {
            Title = title;
            Uri = uri;
        }

        public override string ToString()
        {
            return $"{Title}";
        }

        public override bool Equals(object obj)
        {
            return Equals(obj as Course);
        }

        public bool Equals(Course other)
        {
            return other != null &&
                   Title == other.Title &&
                   EqualityComparer<Uri>.Default.Equals(Uri, other.Uri);
        }

        public override int GetHashCode()
        {
            int hashCode = -1275446098;
            hashCode = hashCode * -1521134295 + EqualityComparer<string>.Default.GetHashCode(Title);
            hashCode = hashCode * -1521134295 + EqualityComparer<Uri>.Default.GetHashCode(Uri);
            return hashCode;
        }

        public static bool operator ==(Course course1, Course course2)
        {
            return EqualityComparer<Course>.Default.Equals(course1, course2);
        }

        public static bool operator !=(Course course1, Course course2)
        {
            return !(course1 == course2);
        }
    }
}
