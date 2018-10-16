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
 * Strings for component 'report_customsql', language 'de', branch 'MOODLE_20_STABLE'
 *
 * @package   report_customsql
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addreport'] = 'Neue Abfrage hinzufügen';
$string['anyonewhocanveiwthisreport'] = 'Alle, die diesen Bericht sehen dürfen (report/customsql:view)';
$string['archivedversions'] = 'Archivierte Versionen dieser Abfrage';
$string['automaticallymonthly'] = 'Anstehend, am ersten Tag jeden Monats';
$string['automaticallyweekly'] = 'Anstehend, am ersten Tag jeder Woche';
$string['availablereports'] = 'Ad-hoc Datenbankabfragen';
$string['availableto'] = 'Verfügbar für {$a}.';
$string['backtoreportlist'] = 'Zurück zur Liste der Abfragen';
$string['changetheparameters'] = 'Die Parameter ändern';
$string['customsql:definequeries'] = 'Eigene Abfragen definieren';
$string['customsql:view'] = 'Ad-hoc Abfragen-Berichte ansehen';
$string['deleteareyousure'] = 'Möchten Sie diese Abfrage wirklich löschen?';
$string['deletethisreport'] = 'Diese Abfrage löschen';
$string['description'] = 'Beschreibung';
$string['displayname'] = 'Abfragename';
$string['displaynamerequired'] = 'Sie müssen einen Abfragenamen eingeben';
$string['displaynamex'] = 'Abfragename: {$a}';
$string['downloadthisreportascsv'] = 'Diese Resultate als CSV herunterladen';
$string['editingareport'] = 'Eine Ad-hoc Datenbankabfrage bearbeiten';
$string['editthisreport'] = 'Diese Abfrage bearbeiten';
$string['enterparameters'] = 'Geben Sie Parameter für die Ad-hoc-Datenbankabfrage ein.';
$string['errordeletingreport'] = 'Fehler beim Löschen einer Abfrage.';
$string['errorinsertingreport'] = 'Fehler beim Einfügen einer Abfrage.';
$string['errorupdatingreport'] = 'Fehler beim Aktualisieren einer Abfrage.';
$string['invalidreportid'] = 'Ungültige Abfrage-ID {$a}.';
$string['lastexecuted'] = 'Diese Abfrage wurde zuletzt am {$a->lastrun} ausgeführt. Sie benötigte {$a->lastexecutiontime} s.';
$string['morethanonerowreturned'] = 'Mehr als eine Zeile wurde zurückgegeben. Diese Abfrage sollte eine Zeile zurückgeben.';
$string['nodatareturned'] = 'Diese Abfrage hat keine Daten zurückgegeben.';
$string['noreportsavailable'] = 'Keine Abfragen verfügbar';
$string['norowsreturned'] = 'Keine Zeile wurde zurückgegeben. Diese Abfrage sollte eine Zeile zurückgeben.';
$string['nosemicolon'] = 'Es ist kein ; Zeichen in der SQL-Abfrage erlaubt.';
$string['note'] = 'Notizen';
$string['notrunyet'] = 'Diese Abfrage wurde noch nie ausgeführt.';
$string['onerow'] = 'Die Abfrage gibt eine Zeile zurück, und sammelt die Ergebnisse jeweils in einer Zeile';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Ad-hoc Datenbankabfragen';
$string['queryfailed'] = 'Fehler beim Ausführen der Abfrage: {$a}';
$string['queryparameters'] = 'Abfrageparameter';
$string['queryparams'] = 'Geben Sie die Standardwerte für die Abfrageparameter ein.';
$string['queryparamschanged'] = 'Die Platzhalter in der Abfrage haben sich geändert';
$string['queryrundate'] = 'Abfrage Ausführdatum';
$string['querysql'] = 'Abfrage-SQL';
$string['querysqlrequried'] = 'Sie müssen etwas SQL eingeben';
$string['recordlimitreached'] = 'Diese Abfrage erreichte die Grenze von {$a} Zeilen. Einige Zeilen können am Ende weggelassen worden sein.';
$string['reportfor'] = 'Abfrage am {$a} ausgeführt';
$string['runable'] = 'Ausführen';
$string['runablex'] = 'Ausführen: {$a}';
$string['schedulednote'] = 'Diese Abfragen werden automatisch am ersten Tag jeder Woche oder jedes Monats ausgeführt, um über die vorherige Woche oder den vorherigen Monat zu berichten. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['scheduledqueries'] = 'Anstehende Abfragen';
$string['typeofresult'] = 'Art des Resultats';
$string['unknowndownloadfile'] = 'Unbekannte Download-Datei.';
$string['userswhocanconfig'] = 'Nur Administratoren (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Benutzer, die Berichte sehen dürfen (moodle/site:viewreports)';
$string['whocanaccess'] = 'Wer auf diese Abfrage zugreifen darf';
