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
 * Strings for component 'assignment', language 'de', branch 'MOODLE_20_STABLE'
 *
 * @package   assignment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubmission'] = 'Abgabe hinzufügen';
$string['allowdeleting'] = 'Löschen erlauben';
$string['allowdeleting_help'] = 'Wenn diese Option aktiviert ist, können die Nutzer/innen ihre hochgeladenen Dateien jederzeit wieder löschen, bevor sie zur Bewertung gegeben werden.';
$string['allowmaxfiles'] = 'Maximale Anzahl hochzuladener Dateien';
$string['allowmaxfiles_help'] = 'Die maximale Anzahl der hochzuladenen Dateien wird nicht angezeigt. Bitte schreiben Sie deswegen die Zahl der Dateien, die Sie erwarten oder die maximal möglich ist, in die Aufgabenbeschreibung.';
$string['allownotes'] = 'Anmerkungen erlauben';
$string['allownotes_help'] = 'Wenn diese Option aktiviert ist, können Anmerkungen zur Aufgabenabgabe in ein Textfeld geschrieben werden, ähnlich wie bei einer Online-Aufgabe.';
$string['allowresubmit'] = 'Erneute Abgabe erlauben';
$string['allowresubmit_help'] = 'Wenn diese Option aktiviert ist, können Aufgaben erneut abgegeben werden, auch wenn sie bereits bewertet wurden (natürlich um dafür eine erneute Bewertung zu erhalten).';
$string['alreadygraded'] = 'Ihre Aufgabenabgabe wurde bereits bewertet. Eine erneute Abgabe ist deswegen nicht möglich.';
$string['assignmentdetails'] = 'Aufgabendetails';
$string['assignment:exportownsubmission'] = 'Eigene Abgabe exportieren';
$string['assignment:exportsubmission'] = 'Abgabe exportieren';
$string['assignment:grade'] = 'Aufgabe bewerten';
$string['assignmentmail'] = '{$a->teacher} hat ein Feedback zu Ihrer Abgabe zur Aufgabe \'{$a->assignment}\' verfasst.

Sie sehen dieses Feedback im Anhang zu Ihrer Abgabe:
{$a->url}';
$string['assignmentmailhtml'] = '{$a->teacher} hat ein Feedback zu Ihrer Abgabe zur Aufgabe \'<i>{$a->assignment}</i>\' verfasst.<br /><br />
Sie sehen dieses Feedback im Anhang zu <a href="{$a->url}">Ihrer Abgabe</a>.';
$string['assignmentname'] = 'Name der Aufgabe';
$string['assignmentsubmission'] = 'Aufgabenabgabe';
$string['assignment:submit'] = 'Aufgabe abgeben';
$string['assignmenttype'] = 'Aufgabentyp';
$string['assignment:view'] = 'Aufgabe ansehen';
$string['availabledate'] = 'Verfügbar von';
$string['cannotdeletefiles'] = 'Es ist ein Fehler aufgetreten. Die Dateien konnten nicht gelöscht werden.';
$string['cannotviewassignment'] = 'Sie können diese Aufgabe nicht anzeigen';
$string['comment'] = 'Kommentar';
$string['commentinline'] = 'Eingearbeiteter Kommentar';
$string['commentinline_help'] = 'Wenn diese Option aktiviert ist, wird der abgegebene Text zum Feedback in das Kommentarfeld kopiert. So ist es einfach, Anmerkungen oder Korrekturen (eventuell farblich gekennzeichnet) in den Originaltext einzuarbeiten.';
$string['configitemstocount'] = 'Wert, der bei Online-Texteingaben ausgezählt werden soll (Worte oder Zeichen)';
$string['configmaxbytes'] = 'Standardmäßig maximale Dateigröße für alle Aufgabenabgaben dieser Website (Obergrenze für alle Kurse und andere lokale Einstellungen)';
$string['configshowrecentsubmissions'] = 'Alle können Mitteilungen zur Abgabe von Aufgaben im Aktivitätenbericht sehen';
$string['confirmdeletefile'] = 'Sind Sie wirklich sicher, dass Sie diese Datei löschen möchten?<br /><strong>{$a}</strong>';
$string['coursemisconf'] = 'Der Kurs ist fehlkonfiguriert';
$string['currentgrade'] = 'Aktuelle Bewertung';
$string['deleteallsubmissions'] = 'Alle Aufgabenabgaben löschen';
$string['deletefilefailed'] = 'Löschen der Datei fehlgeschlagen.';
$string['description'] = 'Beschreibung';
$string['downloadall'] = 'Alle Lösungen der Aufgaben als Zip-datei herunterladen.';
$string['draft'] = 'Entwurf';
$string['due'] = 'Aufgabenfälligkeit';
$string['duedate'] = 'Abgabetermin';
$string['duedateno'] = 'Kein Abgabedatum';
$string['early'] = '{$a} früh';
$string['editmysubmission'] = 'Meine Lösung bearbeiten';
$string['editthesefiles'] = 'Diese Dateien bearbeiten';
$string['editthisfile'] = 'Diese Datei aktualisieren';
$string['emailstudents'] = 'E-Mail-Benachrichtung an Teilnehmer/innen';
$string['emailteachermail'] = '{$a->username} hat die Aufgabe \'{$a->assignment}\' bearbeitet und am {$a->timeupdated} hochgeladen.

Die Abgabe ist auf der Website verfügbar
{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} hat die Aufgabe <i>\'{$a->assignment}\'</i> bearbeitet und am {$a->timeupdated} hochgeladen. <br /><br />
Die Abgabe ist <br /><a href="{$a->url}">auf der Website verfügbar</a>.';
$string['emailteachers'] = 'E-Mail-Benachrichtung an Trainer/innen';
$string['emailteachers_help'] = 'Wenn diese Option aktiviert ist, werden Trainer/innen per E-Mail benachrichtigt, wenn Teilnehmer/innen eine Aufgaben abgeben oder aktualisieren.

Benachrichtigt werden nur diejenigen Trainer/innen, die zur Bewertung der Aufgaben berechtigt sind. Wenn z.B. der Kurs getrennte Gruppen nutzt, dann werden nur jene Trainer/innen mit der betreffenden Gruppenzugehörigkeit benachrichtigt.';
$string['emptysubmission'] = 'Sie haben noch nichts eingereicht';
$string['enableemailnotification'] = 'E-Mail-Benachrichtigung';
$string['enableemailnotification_help'] = 'Wenn diese Option aktiviert ist, werden die Teilnehmer/innen über eine erfolgte Aufgabenbewertung per E-Mail benachrichtigt.';
$string['errornosubmissions'] = 'Keine Einreichungen zum Herunterladen verfügbar';
$string['existingfiledeleted'] = 'Die vorhandene Datei wurde gelöscht: {$a}';
$string['failedupdatefeedback'] = 'Keine Aktualisierung der Rückmeldung für Benutzer {$a}';
$string['feedback'] = 'Feedback';
$string['feedbackfromteacher'] = 'Feedback von {$a}';
$string['feedbackupdated'] = 'Feedback aktualisiert für {$a} Teilnehmer/innen';
$string['finalize'] = 'Aktualisierung von hochgeladenen Lösungen unterbinden';
$string['finalizeerror'] = 'Ein Fehler ist aufgetreten. Die Abgabe konnte nicht beendet werden.';
$string['graded'] = 'Bewertet';
$string['guestnosubmit'] = 'Gäste dürfen keine Aufgaben abgeben. Sie müssen sich zuerst registrieren und einloggen, um Ihre Antwort abgeben zu können.';
$string['guestnoupload'] = 'Gäste dürfen keine Dateien hochladen.';
$string['helpoffline'] = '<p>Dieser Aufgabentyp ist sinnvoll, wenn die Erledigung der Aufgabe außerhalb von Moodle erfolgt, z.B. irgendwo anders im Web oder in persönlichen Unterrichtssituationen.</p> <p>Die Teilnehmer/innen sehen die Aufgabenbeschreibung, können jedoch nichts hochladen oder abgeben. Die Bewertung erfolgt wie gewohnt innerhalb der Aufgabe und die Teilnehmer/innen erhalten dazu eine Nachricht.</p>';
$string['helponline'] = '<p>Dieser Aufgabentyp fordert die Teilnehmer/innen auf, ihre Lösung im Eingabefenster einzutragen. Die Trainer/innen können die Lösung online bewerten und dabei direkt Kommentare in den Text einarbeiten oder Korrekturen vornehmen.</p> <p>In älteren Moodle-Versionen entsprach diese Funktion vom früheren Modul \'Journal\'.</p>';
$string['helpupload'] = '<p>Dieser Aufgabentyp ermöglicht es den Teilnehmer/innen, eine oder mehrere Dateien als Lösung hochzuladen (z.B. Text-, Bild-, Zip- oder andere Dateien). Bitte geben Sie in der Aufgabenbeschreibung an, welche Art von Lösungsdateien Sie erwarten.</p>
<p>Außerdem ist es für Trainer/innen möglich, mehrere Aufgabendateien hochzuladen. Aufgabendateien können bereits hochgeladen werden, bevor die Teilnehmer/innen die Aufgabe bearbeiten. Auf diese Weise können Sie allen individuelle Dateien zur Bearbeitung zur Verfügung stellen.</p>
<p>Die Teilnehmer/innen können außerdem Anmerkungen zu ihrer Aufgabenabgabe verfassen, die die hochgeladenen Dateien und den Bearbeitungsstatus beschreiben oder andere Informationen geben.</p>
<p>Die Abgabe dieses Aufgabentyps muss von den Teilnehmer/innen manuell beendet werden. Sie können sich jederzeit den Bearbeitungsstand ansehen. Aufgabenbearbeitungen, die noch nicht fertig sind, werden als "Entwurf" gekennzeichnet. Sie können jede Lösung, die Sie noch nicht bewertet haben, wieder in des Entwurfstatus versetzen.';
$string['helpuploadsingle'] = '<p>Dieser Aufgabentyp ermöglicht es den Teilnehmer/innen, eine Datei als Lösung hochzuladen (z.B. Text-, Bild-, Zip- oder andere Datei). Bitte geben Sie in der Aufgabenbeschreibung an, welche Art von Lösungsdatei Sie erwarten.</p>';
$string['hideintro'] = 'Beschreibung vor der Veröffentlichung verbergen';
$string['hideintro_help'] = 'Wenn diese Option aktiviert ist, wird die Aufgabenbeschreibung bis zum Bearbeitungsstart verborgen. Lediglich der Name der Aufgabe wird angezeigt.</p>';
$string['invalidassignment'] = 'Ungültige Aufgabe';
$string['invalidfileandsubmissionid'] = 'Fehlende Datei oder Abgabe-ID';
$string['invalidid'] = 'Ungültige Aufgaben-ID';
$string['invalidsubmissionid'] = 'Ungültige Abgabe-ID';
$string['invalidtype'] = 'Ungültiger Aufgabentyp';
$string['invaliduserid'] = 'Ungültige Nutzer-ID';
$string['itemstocount'] = 'Worte/Zeichen zählen';
$string['lastgrade'] = 'Letzte Bewertung';
$string['late'] = '{$a} zu spät';
$string['maximumgrade'] = 'Höchste Bewertung';
$string['maximumsize'] = 'Maximale Dateigröße';
$string['maxpublishstate'] = 'Maximale Sichtbarkeit für Blogeinträge vor dem Abgabetermin';
$string['messageprovider:assignment_updates'] = 'Benachrichtigung über Zuordnung';
$string['modulename'] = 'Aufgabe';
$string['modulename_help'] = 'Aufgaben ermöglichen es den Trainer/innen, Arbeitsaufträge zur Online- oder Offlinebearbeitung zu erteilen und anschließend zu bewerten.';
$string['modulenameplural'] = 'Aufgaben';
$string['newsubmissions'] = 'Aufgaben eingereicht';
$string['noassignments'] = 'Es gibt derzeit keine Aufgaben';
$string['noattempts'] = 'Bisher wurden keine Arbeiten eingereicht';
$string['noblogs'] = 'Sie haben keine Blogeinträge zum Abgeben!';
$string['nofiles'] = 'Keine Dateien abgegeben';
$string['nofilesyet'] = 'Bisher wurden keine Dateien abgegeben';
$string['nomoresubmissions'] = 'Es sind keine weiteren Einträge mehr möglich.';
$string['norequiregrading'] = 'Es gibt aktuell keine Aufgaben, die bewertet werden sollen';
$string['nosubmisson'] = 'Keine Aufgaben eingereicht';
$string['nosubmitusers'] = 'Es wurden keine Nutzer/innen gefunden, die die Berechtigung zur Aufgabenabgabe hätten.';
$string['notavailableyet'] = 'Diese Aufgabe ist noch nicht verfügbar.<br />Die Aufgabenstellung wird erst ab dem angegebenen Termin angezeigt.';
$string['notes'] = 'Kommentare';
$string['notesempty'] = 'Kein Eintrag';
$string['notesupdateerror'] = 'Fehler beim Aktualisieren der Kommentare';
$string['notgradedyet'] = 'Noch nicht bewertet';
$string['notsubmittedyet'] = 'Noch nichts eingereicht';
$string['onceassignmentsent'] = 'Wenn Sie eine Aufgabe für die Bewertung abgesandt haben, können Sie keine Dateien mehr hinzufügen oder löschen. Möchten Sie fortfahren?';
$string['operation'] = 'Vorgang';
$string['optionalsettings'] = 'Optionale Einstellungen';
$string['overwritewarning'] = 'Achtung: Erneutes Hochladen LÖSCHT Ihre bisherige Abgabe!';
$string['pagesize'] = 'Abgegebene Aufgaben pro Seite';
$string['pluginadministration'] = 'Aufgaben-Administration';
$string['pluginname'] = 'Aufgabe';
$string['popupinnewwindow'] = 'In Popupfenster öffnen';
$string['preventlate'] = 'Spätere Abgabe verhindern';
$string['quickgrade'] = 'Schnelle Bewertung erlauben';
$string['quickgrade_help'] = 'Wenn diese Option aktiviert ist, können alle Aufgabenabgaben direkt auf einer Übersichtsseite bewertet werden. Bewertungen und Kommentare können hinzugefügt und mit einem Klick auf den Knopf "Alle Bewertungen speichern" zusammen gespeichert werden.';
$string['requiregrading'] = 'Bewertung erforderlich';
$string['responsefiles'] = 'Antwortdateien';
$string['reviewed'] = 'Nachgeprüft';
$string['saveallfeedback'] = 'Alle Bewertungen speichern';
$string['selectblog'] = 'Wählen Sie bitte, welchen Blogeintrag Sie einreichen möchten';
$string['sendformarking'] = 'Zur Bewertung freigeben';
$string['showrecentsubmissions'] = 'Neue Aufgabenabgaben anzeigen';
$string['submission'] = 'Aufgabenabgabe';
$string['submissiondraft'] = 'Lösungsentwurf';
$string['submissionfeedback'] = 'Feedback zu abgegebenen Aufgaben';
$string['submissions'] = 'Abgegebene Aufgaben';
$string['submissionsaved'] = 'Ihre Veränderungen wurden gespeichert';
$string['submissionsnotgraded'] = '{$a} nicht bewertete Aufgaben';
$string['submitassignment'] = 'Tragen Sie Ihre Aufgabenlösung in dieses Textfeld ein';
$string['submitedformarking'] = 'Die Aufgabenlösung wurde zur Bewertung abgegeben und kann nicht mehr überarbeitet werden';
$string['submitformarking'] = 'Aufgabe zur Bewertung abgeben';
$string['submitted'] = 'Abgegeben';
$string['submittedfiles'] = 'Abgegebene Dateien';
$string['trackdrafts'] = '\'Zur Bewertung freigeben\' aktivieren';
$string['trackdrafts_help'] = 'Der Knopf "Zur Bewertung freigeben" erlaubt es den Teilnehmer/innen deutlich zu machen, dass die Aufgabe fertig bearbeitet wurde und die Lösung jetzt bewertet werden kann. Trainer/innen können die Aufgabe wieder in den Entwurfsstatus zurücksetzen, falls eine weitere Überarbeitung erforderlich erscheint.';
$string['typeblog'] = 'Blogeintrag';
$string['typeoffline'] = 'Offline - Aktivität';
$string['typeonline'] = 'Online - Texteingabe';
$string['typeupload'] = 'Online - Dateien hochladen';
$string['typeuploadsingle'] = 'Online - eine Datei hochladen';
$string['unfinalize'] = 'Status in \'Entwurf\' ändern';
$string['unfinalizeerror'] = 'Es ist ein Fehler aufgetreten. Die Lösung konnte nicht auf \'Entwurf\' zurückgesetzt werden.';
$string['unfinalize_help'] = 'Ein Zurücksetzen in den Status \'Entwurf\' ermöglicht es, die Lösungen erneut zu bearbeiten.';
$string['uploadafile'] = 'Datei hochladen';
$string['uploadbadname'] = 'Dieser Dateiname enthält unzulässige Zeichen und kann nicht hochgeladen werden';
$string['uploadedfiles'] = 'Hochgeladene Dateien';
$string['uploaderror'] = 'Beim Hochladen der Datei trat ein Fehler auf.';
$string['uploadfailnoupdate'] = 'Die Datei wurde korrekt hochgeladen, aber Ihr Eintrag konnte nicht aktualisiert werden!';
$string['uploadfiles'] = 'Dateien hochladen';
$string['uploadfiletoobig'] = 'Die Datei ist zu groß (max. {$a} Bytes)';
$string['uploadnofilefound'] = 'Keine Datei gefunden. Sind Sie sicher, dass Sie eine Datei zum Hochladen ausgewählt haben?';
$string['uploadnotregistered'] = '\'{$a}\' wurde korrekt hochgeladen, aber der Eintrag wurde nicht registriert!';
$string['uploadsuccess'] = '\'{$a}\' wurde erfolgreich hochgeladen';
$string['usermisconf'] = 'Fehlerhafte Nutzereinstellungen';
$string['usernosubmit'] = 'Sie dürfen keine Aufgabe abgeben';
$string['viewfeedback'] = 'Bewertung und Feedback anzeigen';
$string['viewmysubmission'] = 'Meine Abgabe ansehen';
$string['viewsubmissions'] = '{$a} abgegebene Aufgabe(n) ansehen';
$string['yoursubmission'] = 'Ihre abgegebenen Aufgaben';
