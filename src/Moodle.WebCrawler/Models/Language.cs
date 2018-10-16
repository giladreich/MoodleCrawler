using Moodle.WebCrawler.Enums;

namespace Moodle.WebCrawler.Models
{
    public class Language
    {
        public string Notation { get; set; }
        public LanguageType LanguageType { get; set; }
        public bool SelectedLanguage { get; set; }


        public Language()
        {
            Notation = "en";
            LanguageType = LanguageType.English;
            SelectedLanguage = false;
        }

        public Language(string notation, LanguageType languageType, bool selectedLanguage)
        {
            Notation = notation;
            LanguageType = languageType;
            SelectedLanguage = selectedLanguage;
        }

        public static string GetNotation(LanguageType type)
        {
            switch (type)
            {
                case LanguageType.English:
                    return "en";
                    
                case LanguageType.German:
                    return "de";

                case LanguageType.Spanish:
                    return "es-es";

                case LanguageType.SpanishEspana:
                    return "es";
                
                default: case LanguageType.UNKNOWN:
                    return "en";
            }
        }

        public static LanguageType GetType(string notation)
        {
            switch (notation.ToLower())
            {
                case "en":
                    return LanguageType.English;

                case "de":
                    return LanguageType.German;

                case "es_es":
                    return LanguageType.SpanishEspana;

                case "es":
                    return LanguageType.Spanish;

                default:
                    return LanguageType.English;
            }
        }
    }
}
