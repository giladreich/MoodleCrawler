# Moodle Server Crawler / Downloader

Your school is temporary shutting down the moodle server for some reason? No worries! MoodleCrawler for the rescue ;)
This is a simple single threaded moodle crawler GUI application that will help you downloading all resources that are attached by your teachers.
It will save all resources in the directory structure as showen in the moodle server and also download some of the pages as HTML format.

Written in C# using Windows Forms.

---
## How-To-Use

The only thing you need to do is to the set the UrlMoodleRoot settings of your moodle server in your configuration file as follows:

```xml
<?xml version="1.0" encoding="utf-8"?>
<configuration>
    <configSections>
        <sectionGroup name="userSettings" type="System.Configuration.UserSettingsGroup, System, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089" >
            <section name="Moodle.WebCrawler.Properties.Settings" type="System.Configuration.ClientSettingsSection, System, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089" allowExeDefinition="MachineToLocalUser" requirePermission="false" />
        </sectionGroup>
    </configSections>
    <startup> 
        <supportedRuntime version="v4.0" sku=".NETFramework,Version=v4.7"/>
    </startup>
    <userSettings>
        <Moodle.WebCrawler.Properties.Settings>
            <setting name="UrlMoodleRoot" serializeAs="String">
                <value>https://moodle.schoolname.com</value>
            </setting>
        </Moodle.WebCrawler.Properties.Settings>
    </userSettings>
</configuration>
```

If you are building from source, right click on the project `Moodle.WebCrawler` `->` `Properties` `->` `Settings` and then change the value to your school url.

NOTE: I would recommend running in debug mode in visual studio since it's a single threaded application and I didn't take the time
to make the GUI to display requests activity etc...so you'll see all activity in the Output window of VS, or you can simply compile as console application
You can also use Wireshark or Fiddler to see the requests being sent in the background to the server.

---
## Motivation

My school is shutting down the moodle server for some time 10 days before our final exam, therefore I though it wouldn't take much time and effort 
to crawl all that data on the server for an offline version.
Also sometimes you don't have internet access when you're on the ways, so it's always good to have a backup.
