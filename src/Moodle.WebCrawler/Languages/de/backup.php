<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'backup', language 'de', branch 'MOODLE_20_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'Wählen Sie, ob eine automatische Sicherung durchgeführt werden soll. Falls Sie die Option \'Manuell\' auswählen, sind automatische Sicherungen nur noch über das CLI-Script \'automated backups\' möglich. Dieses CLI-Script kann manuell in der Befehlszeile oder über einen Cronjob gestartet werden.';
$string['autoactivedisabled'] = 'Deaktiviert';
$string['autoactiveenabled'] = 'Aktiviert';
$string['autoactivemanual'] = 'Manuell';
$string['automatedbackupschedule'] = 'Planung';
$string['automatedbackupschedulehelp'] = 'Wählen Sie, an welchen Wochentagen die automatischen Sicherungen durchgeführt werden sollen.';
$string['automatedbackupsinactive'] = 'Automatische Sicherungen wurden vom Administrator nicht eingerichtet.';
$string['automatedbackupstatus'] = 'Geplanter Sicherungsstatus';
$string['automatedsettings'] = 'Geplante Sicherungen';
$string['automatedsetup'] = 'Automatische Sicherungen';
$string['automatedstorage'] = 'Speicherplatz für automatisierte Sicherungen';
$string['automatedstoragehelp'] = 'Wählen SIe den Ort, an dem Sie die  automatisch erstellten Sicherungsdateien speichern möchten.';
$string['backupactivity'] = 'Aktivität sichern: {$a}';
$string['backupcourse'] = 'Kurs sichern: {$a}';
$string['backupcoursedetails'] = 'Kursdetails';
$string['backupcoursesection'] = 'Abschnitt: {$a}';
$string['backupcoursesections'] = 'Kursabschnitte';
$string['backupdate'] = 'Termin belegt';
$string['backupdetails'] = 'Sicherungsdetails';
$string['backupformat'] = 'Format';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupmode'] = 'Modus';
$string['backupmode10'] = 'Allgemeines';
$string['backupmode30'] = 'Hub';
$string['backupsection'] = 'Kursabschnitt sichern: {$a}';
$string['backupsettings'] = 'Sicherungseinstellungen';
$string['backupsitedetails'] = 'Details der Website';
$string['backupstage16action'] = 'Weiter';
$string['backupstage1action'] = 'Weiter';
$string['backupstage2action'] = 'Weiter';
$string['backupstage4action'] = 'Sicherung ausführen';
$string['backupstage8action'] = 'Weiter';
$string['backuptype'] = 'Typ';
$string['backuptypeactivity'] = 'Aktivität';
$string['backuptypecourse'] = 'Kurs';
$string['backupversion'] = 'Sicherungsversion';
$string['cannotfindassignablerole'] = 'Die Rolle \'{$a}\' in der Sicherungsdatei kann nicht auf eine Rolle übertragen werden, die Sie zuweisen dürfen.';
$string['choosefilefromactivitybackup'] = 'Sicherungsbereich der Aktivität';
$string['choosefilefromactivitybackup_help'] = 'Standardmäßig werden die Sicherungsdateien von Aktivitäten hier gespeichert';
$string['choosefilefromautomatedbackup'] = 'Automatisierte Sicherungen';
$string['choosefilefromautomatedbackup_help'] = 'Enthält automatisch erzeugte Sicherungsdateien';
$string['choosefilefromcoursebackup'] = 'Sicherungsbereich des Kurses';
$string['choosefilefromcoursebackup_help'] = 'Standardmäßig werden die Sicherungsdateien von Kursen hier gespeichert';
$string['choosefilefromuserbackup'] = 'Sicherungsbereich des Nutzers';
$string['choosefilefromuserbackup_help'] = 'Sicherungsdateien mit der Option \'anonymisierte Nutzereinträge\' werden hier gespeichert';
$string['configgeneralactivities'] = 'Standard für die Einbeziehung von Aktivitäten in eine Sicherung';
$string['configgeneralanonymize'] = 'Standard für die Anonymisierung aller nutzerbezogenen Informationen in eine Sicherung';
$string['configgeneralblocks'] = 'Standard für die Einbeziehung von Blöcken in eine Sicherung';
$string['configgeneralcomments'] = 'Standard für die Einbeziehung von Kommentaren in eine Sicherung';
$string['configgeneralfilters'] = 'Standard für die Einbeziehung von Filtern in eine Sicherung';
$string['configgeneralhistories'] = 'Standard für die Einbeziehung von Nutzerverläufen in eine Sicherung';
$string['configgenerallogs'] = 'Standard für die Einbeziehung von Logdaten in eine Sicherung';
$string['configgeneralroleassignments'] = 'Standard für die Einbeziehung von Rollenzuweisungen in eine Sicherung';
$string['configgeneralusers'] = 'Standard für die Einbeziehung von Nutzerkonten in eine Sicherung';
$string['configgeneraluserscompletion'] = 'Standard für die Einbeziehung von Fortschrittsinformationen in eine Sicherung';
$string['confirmcancel'] = 'Sicherung abbrechen';
$string['confirmcancelno'] = 'Fortsetzen';
$string['confirmcancelquestion'] = 'Soll der Vorgang wirklich abgebrochen werden? Alle eingegebenen Informationen werden gelöscht.';
$string['confirmcancelyes'] = 'Abbrechen';
$string['coursecategory'] = 'Kursbereich, in dem der Kurs wiederhergestellt wird';
$string['courseid'] = 'Original-ID';
$string['coursesettings'] = 'Kurseinstellungen';
$string['coursetitle'] = 'Titel';
$string['currentstage1'] = 'Einstellungen';
$string['currentstage16'] = 'Fertigstellen';
$string['currentstage2'] = 'Einstellungen';
$string['currentstage4'] = 'Kontrollieren und bestätigen';
$string['currentstage8'] = 'Sicherung ausführen';
$string['dependenciesenforced'] = 'Ihre Einstellungen wurden wegen unerfüllbarer Abhängigkeiten geändert';
$string['enterasearch'] = 'Suche eingeben';
$string['errorfilenamemustbezip'] = 'Die Datei muss eine komprimierte Datei sein und die Dateiendung .mbz haben.';
$string['errorfilenamerequired'] = 'Sie müssen einen gültigen Dateinamen für diese Sicherung angeben';
$string['errorinvalidformat'] = 'Falsches Sicherungsformat';
$string['errorinvalidformatdesc'] = 'Die hochgeladene Datei ist keine gültige Moodle-Sicherungsdatei und kann nicht wiederhergestellt werden';
$string['errorminbackup20version'] = 'Diese Sicherungsdatei wurde mit einer Entwicklungsversion des Moodle-Backups ({$a->backup}) erstellt. Für die Wiederherstellung ist mindestens {$a->min} notwendig.';
$string['errormoodle1format'] = 'Sicherungen von Moodle 1.9 wiederherstellen';
$string['errormoodle1formatdesc'] = 'Die Sicherungsdatei wurde mit Moodle 1.x erstellt und lässt sich aktuell nicht in Moodle 2.0 wiederherstellen. Diese Funktionalität wird in einer zukünftigen Aktualisierung nachgereicht.';
$string['errormoodle1format_help'] = 'Moodle 2.0 unterstützt aktuell keine Wiederherstellung von Kursen aus Moodle 1.x.

Als vorübergehende Behelfslösung bietet sich an, dass Sie Ihre Sicherungsdatei in eine Website mit Moodle 1.9 wiederherstellen (z.B. in ein lokales Moodle mit XAMPP). Nach einer Aktualisierung der die vollständigen Website auf Moodle 2.0 ist es möglich, den Kurs neu zu sichern und in andere Websites mit Moodle 2.0 zu übertragen.';
$string['errorrestorefrontpage'] = 'Die Wiederherstellung über die Startseite ist nicht erlaubt';
$string['executionsuccess'] = 'Ihre Sicherung wurde erfolgreich abgeschlossen.';
$string['filename'] = 'Dateiname';
$string['generalactivities'] = 'Aktivitäten einbeziehen';
$string['generalanonymize'] = 'Informationen anonymisieren';
$string['generalbackdefaults'] = 'Allgemeines';
$string['generalblocks'] = 'Blöcke einbeziehen';
$string['generalcomments'] = 'Kommentare einbeziehen';
$string['generalfilters'] = 'Filter einbeziehen';
$string['generalgradehistories'] = 'Verlauf einbeziehen';
$string['generalhistories'] = 'Verlauf einbeziehen';
$string['generallogs'] = 'Logdaten einbeziehen';
$string['generalroleassignments'] = 'Rollenzuweisungen einbeziehen';
$string['generalusers'] = 'Nutzer einbeziehen';
$string['generaluserscompletion'] = 'Fortschrittsinformationen einbeziehen';
$string['importbackupstage16action'] = 'Fortsetzen';
$string['importbackupstage1action'] = 'Weiter';
$string['importbackupstage2action'] = 'Weiter';
$string['importbackupstage4action'] = 'Import durchführen';
$string['importbackupstage8action'] = 'Fortsetzen';
$string['importcurrentstage0'] = 'Kursauswahl';
$string['importcurrentstage1'] = 'Grundeinstellung';
$string['importcurrentstage16'] = 'Fertig';
$string['importcurrentstage2'] = 'Schema-Einstellungen';
$string['importcurrentstage4'] = 'Bestätigung und Prüfung';
$string['importcurrentstage8'] = 'Import durchführen';
$string['importfile'] = 'Sicherungsdatei importieren';
$string['importsuccess'] = 'Import vollständig. Klicken Sie auf Weiter, um in den Kurs zu gelangen.';
$string['includeactivities'] = 'Einbeziehen:';
$string['includeditems'] = 'Einbezogene Elemente:';
$string['includesection'] = 'Abschnitt {$a}';
$string['includeuserinfo'] = 'Nutzerdaten';
$string['locked'] = 'Gesperrt';
$string['lockedbyconfig'] = 'Diese Einstellung wurde durch eine standardmäßige Sicherungseinstellung gesperrt';
$string['lockedbyhierarchy'] = 'Gesperrt durch Abhängigkeiten';
$string['lockedbypermission'] = 'Sie haben nicht das Recht, diese Einstellung zu ändern.';
$string['managefiles'] = 'Sicherungsdateien verwalten';
$string['moodleversion'] = 'Moodle-Version';
$string['moreresults'] = 'Zu viele Suchergebnisse - bitte präzisieren Sie die Suchanfrage';
$string['nomatchingcourses'] = 'Kein Kurs zum Anzeigen';
$string['norestoreoptions'] = 'Keine Kategorien oder existierende Kurse, in denen Sie wiederherstellen könnten ';
$string['originalwwwroot'] = 'URL der Sicherung';
$string['previousstage'] = 'Zurück';
$string['qcategory2coursefallback'] = 'Die Fragenkategorie "{$a->name}" in der Sicherungsdatei ist ursprünglich eine System- bzw. Kurskategorie. Bei der Wiederherstellung wird sie im Kurskontext erstellt.';
$string['qcategorycannotberestored'] = 'Die Fragenkategorie "{$a->name}" kann bei der Wiederherstellung nicht erstellt werden';
$string['question2coursefallback'] = 'Die Fragenkategorie "{$a->name}" in der Sicherungsdatei ist ursprünglich eine System- bzw. Kurskategorie. Bei der Wiederherstellung wird sie im Kurskontext erstellt.';
$string['questionegorycannotberestored'] = 'Die Fragen "{$a->name}" können bei der Wiederherstellung nicht erstellt werden';
$string['restoreactivity'] = 'Aktivität wiederherstellen';
$string['restorecourse'] = 'Kurs wiederherstellen';
$string['restorecoursesettings'] = 'Kurseinstellungen';
$string['restoreexecutionsuccess'] = 'Der Kurs wurde erfolgreich wiederhergestellt. Klicken Sie auf Weiter, um in den Kurs zu gelangen.';
$string['restorenewcoursefullname'] = 'Neuer Kursname';
$string['restorenewcourseshortname'] = 'Kurzer Kursname des neuen Kurses';
$string['restorenewcoursestartdate'] = 'Neuer Starttermin';
$string['restorerolemappings'] = 'Wiederherstellen Rollenzuordnungen';
$string['restorerootsettings'] = 'Einstellungen wiederherstellen';
$string['restoresection'] = 'Abschnitt wiederherstellen';
$string['restorestage1'] = 'Bestätigen';
$string['restorestage16'] = 'Überprüfen';
$string['restorestage16action'] = 'Wiederherstellung ausführen';
$string['restorestage1action'] = 'Weiter';
$string['restorestage2'] = 'Ziel';
$string['restorestage2action'] = 'Weiter';
$string['restorestage32'] = 'Ausführen';
$string['restorestage32action'] = 'Weiter';
$string['restorestage4'] = 'Einstellungen';
$string['restorestage4action'] = 'Weiter';
$string['restorestage64'] = 'Fertig';
$string['restorestage64action'] = 'Weiter';
$string['restorestage8'] = 'Schema';
$string['restorestage8action'] = 'Weiter';
$string['restoretarget'] = 'Wiederherstellungsziel';
$string['restoretocourse'] = 'Zum Kurs wiederherstellen:';
$string['restoretocurrentcourse'] = 'In diesen Kurs wiederherstellen';
$string['restoretocurrentcourseadding'] = 'Den gesicherten Kurs mit diesem Kurs verschmelzen';
$string['restoretocurrentcoursedeleting'] = 'Alle Inhalte dieses Kurses löschen und dann wiederherstellen';
$string['restoretoexistingcourse'] = 'In einem vorhandenen Kurs wiederherstellen';
$string['restoretoexistingcourseadding'] = 'Den gesicherten Kurs mit einem bestehenden Kurs verschmelzen';
$string['restoretoexistingcoursedeleting'] = 'Alle Inhalte eines vorhandenen Kurses löschen und dann wiederherstellen';
$string['restoretonewcourse'] = 'Als neuen Kurs wiederherstellen';
$string['restoringcourse'] = 'Kurs wird wiederhergestellt';
$string['restoringcourseshortname'] = 'Kurs wird wiederhergestellt';
$string['rootsettingactivities'] = 'Aktivitäten einbeziehen';
$string['rootsettinganonymize'] = 'Nutzerinformationen anonymisieren';
$string['rootsettingblocks'] = 'Blöcke einbeziehen';
$string['rootsettingcomments'] = 'Kommentare einbeziehen';
$string['rootsettingfilters'] = 'Filter einbeziehen';
$string['rootsettinggradehistories'] = 'Bewertungsverlauf einbeziehen';
$string['rootsettinglogs'] = 'Kurslogdaten  einbeziehen';
$string['rootsettingroleassignments'] = 'Rollenzuweisungen einbeziehen';
$string['rootsettings'] = 'Sicherungseinstellungen';
$string['rootsettingusers'] = 'Eingeschriebene Nutzer/innen einbeziehen';
$string['rootsettinguserscompletion'] = 'Nutzerabschlussdetails einbeziehen';
$string['sectionactivities'] = 'Aktivitäten';
$string['sectioninc'] = 'In die Sicherung einbezogen (ohne Nutzerinformationen)';
$string['sectionincanduser'] = 'In die Sicherung einbezogen (mit Nutzerinformationen)';
$string['selectacategory'] = 'Kategorie auswählen';
$string['selectacourse'] = 'Kurs auswählen';
$string['setting_course_fullname'] = 'Kursname';
$string['setting_course_shortname'] = 'Kurzer Kursname';
$string['setting_course_startdate'] = 'Kursbeginn';
$string['setting_overwriteconf'] = 'Kurseinstellungen überschreiben';
$string['storagecourseandexternal'] = 'Dateibereich für Kurssicherungen und angegebenes Verzeichnis';
$string['storagecourseonly'] = 'Dateibereich für Kurssicherungen';
$string['storageexternalonly'] = 'Angegebenes Verzeichnis für automatisierte Sicherungen';
$string['totalcategorysearchresults'] = 'Kategorien gesamt: {$a}';
$string['totalcoursesearchresults'] = 'Kurse gesamt: {$a}';
