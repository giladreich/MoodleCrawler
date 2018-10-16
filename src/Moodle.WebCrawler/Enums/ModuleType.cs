namespace Moodle.WebCrawler.Enums
{
    /// <summary>
    /// api.php
    /// $appsupportedmodules = array('assign', 'book', 'chat', 'choice', 'data', 'feedback', 'folder', 'forum', 'glossary', 'imscp',
    /// 'label', 'lesson', 'lti', 'page', 'quiz', 'resource', 'scorm', 'survey', 'url', 'wiki', 'workshop');
    ///
    /// Module names can be found under languages -> 'modulename' that will be used in the alt=''.
    /// </summary>
    public enum ModuleType
    {
        Assign,
        Assignment,
        Book,
        Chat,
        Choice,
        Data,
        Feedback,
        Folder,
        Forum,
        Glossary,
        Imscp,
        Label,
        Lesson,
        Lti,
        Page,
        Quiz,
        Resource,
        Scorm,
        Survey,
        Url,
        Wiki,
        Workshop
    }
}