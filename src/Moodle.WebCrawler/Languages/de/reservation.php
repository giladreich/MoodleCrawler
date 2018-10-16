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
 * Strings for component 'reservation', language 'de', branch 'MOODLE_20_STABLE'
 *
 * @package   reservation
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = 'Buchung hinzufügen';
$string['after10min'] = '10 Minuten nach Beginn';
$string['after12h'] = '12 Stunden nach Beginn';
$string['after1d'] = '1 Tag nach Beginn';
$string['after1h'] = '1 Stunde nach Beginn';
$string['after1w'] = '1 Woche nach Beginn';
$string['after2d'] = '2 Tage nach Beginn';
$string['after2h'] = '2 Stunden nach Beginn';
$string['after2w'] = '2 Wochen nach Beginn';
$string['after30min'] = '30 Minuten nach Beginn';
$string['after3w'] = '3 Wochen nach Beginn';
$string['after4h'] = '4 Stunden nach Beginn';
$string['after4w'] = '4 Wochen nach Beginn';
$string['after5min'] = '5 Minuten nach Beginn';
$string['after6h'] = '6 Stunden nach Beginn';
$string['alreadybooked'] = 'Sie haben bereits gebucht<>';
$string['atstart'] = 'Ab Ereignisstart';
$string['autohide'] = 'Buchungsliste automatisch ausblenden';
$string['availablerequests'] = 'Freie Plätze';
$string['by'] = 'mit';
$string['bydate'] = 'Veranstaltungsdatum';
$string['byname'] = 'Name';
$string['bysection'] = 'Thema/Woche';
$string['cancelledon'] = 'Abgesagt';
$string['checkclashes'] = 'Ort- und Zeitüberschneidungen prüfen';
$string['clashesreport'] = 'Überschneidungsbericht';
$string['cleanview'] = 'Nur aktuelle Reservierungen anzeigen';
$string['close'] = 'Schließen';
$string['closed'] = 'Geschlossen';
$string['config'] = 'Globale Einstellungen für das Modul Reservierung';
$string['configautohide'] = 'Definieren Sie ab wann Reservierungen auf der Buchungsliste (mod/reservation/index.php) ausgeblendet werden sollen. Dies könnte nützlich sein, um bei öffentlichen Listen eine "bereinigte" Aufstellung anzuzeigen.';
$string['configcheckclashes'] = 'Mit dieser Einstellung können Sie den Schalter "Ort- und Zeit Überschneidungen prüfen" auf der Bearbeitungsseite sichtbar machen.';
$string['configdownload'] = 'Definieren Sie das Standard-Downloadformat für alle Listen.';
$string['configfields'] = 'Definieren Sie welche weiteren Felder in der Reservierungstabelle auf der Bearbeitungsseite angezeigt werden sollen.';
$string['configmanualusers'] = '';
$string['configmaxoverbook'] = 'Definieren Sie den maximalen Prozentsatz für Überbuchung.';
$string['configmaxrequests'] = 'Definieren Sie die Obergrenze für Reservierungen im dazugehörigen Drop-Down-Menü auf der Bearbeitungsseite.';
$string['configminduration'] = 'Definieren Sie die Mindestdauer einer Reservierung, für die keine Endzeit festgelegt wurde. Diese Einstellung wird verwendet, um Ort- und Zeitverfügbarkeit zu prüfen.';
$string['configoverbookstep'] = 'Definieren Sie die prozentuale Schrittweite für Überbuchung.';
$string['configpubliclists'] = 'Definieren Sie ob Buchungslisten veröffentlicht werden sollen. Das ermöglicht Einsichtnahme ohne Anmeldung!';
$string['configsortby'] = 'Definieren Sie wonach die Buchungslisten sortiert werden sollen.';
$string['configsublimits'] = 'Definieren Sie die Anzahl der Limitierungsregeln (Zeilen) auf der Bearbeitungsseite.';
$string['description'] = 'Beschreibung';
$string['duration10h'] = '10 Stunden';
$string['duration10min'] = '10 Minuten';
$string['duration11h'] = '11 Stunden';
$string['duration12h'] = '12 Stunden';
$string['duration15min'] = '15 Minuten';
$string['duration20min'] = '20 Minuten';
$string['duration2h'] = '2 Stunden';
$string['duration30min'] = '30 Minuten';
$string['duration3h'] = '3 Stunden';
$string['duration45min'] = '45 Minuten';
$string['duration4h'] = '4 Stunden';
$string['duration5h'] = '5 Stunden';
$string['duration5min'] = '5 Minuten';
$string['duration60min'] = '60 Minuten';
$string['duration6h'] = '6 Stunden';
$string['duration7h'] = '7 Stunden';
$string['duration8h'] = '8 Stunden';
$string['duration90min'] = '90 Minuten';
$string['duration9h'] = '9 Stunden';
$string['enablenote'] = 'Benutzeranmerkung zulassen';
$string['equal'] = 'gleich';
$string['err_sublimitsgreater'] = 'Die Summe der Limitierungen übersteigt die Obergrenze für Reservierungen.';
$string['err_timeendlower'] = 'Der Endtermin liegt vor dem Starttermin';
$string['err_timeopengreater'] = 'Der Starttermin liegt nach dem Endtermin';
$string['eventsettings'] = 'Allgemeine Einstellungen';
$string['explainconfig'] = 'Administratoren können hier globale Einstellungen für das Reservierungsmodul definieren.';
$string['fields'] = 'anzeigbare Felder';
$string['fullview'] = 'Zeige gelöschte Reservierungen';
$string['gradedmail'] = '{$a->teacher} hat ein Feedback zu Ihrer Reservierung geschrieben \'{$a->reservation}\' Sie können es hier einsehen: {$a->url}';
$string['gradedmailhtml'] = '{$a->teacher} hat ein Feedback zu Ihrer Reservierung geschrieben \'<i>{$a->reservation}</i>\'<br /><br /> Sehen Sie <a href="{$a->url}">hier</a>.';
$string['location'] = 'Ort';
$string['locations'] = 'Orte verwalten';
$string['locationslist'] = 'Orte auflisten';
$string['mail'] = 'Reservierung \'{$a->reservation}\' wurde geschlossen.

Sie können Ihre Reservierungsliste herunterladen von:

    {$a->url}';
$string['mailhtml'] = 'Reservierung <em>{$a->reservation}</em> wurde geschlossen.<br/><br/>
Sie können Ihre Reservierungsliste <a href="{$a->url}">hier</a> herunterladen.';
$string['manualusers'] = '';
$string['maxoverbook'] = 'Obergrenze für Überbuchung in Prozent';
$string['maxrequest'] = 'Obergrenze für Reservierungen';
$string['minduration'] = 'Mindestdauer';
$string['modulename'] = 'Reservierung';
$string['modulenameplural'] = 'Reservierungen';
$string['newlocation'] = 'Neuer Ort';
$string['noclashes'] = 'Keine Ort- und Zeitüberschneidungen gefunden';
$string['nolimit'] = 'Keine Obergrenze für Reservierung';
$string['nomorerequest'] = 'Keine Plätze mehr vorhanden';
$string['nooverbook'] = 'Keine Überbuchung';
$string['note'] = 'Anmerkung zur Buchung';
$string['noteachers'] = 'Keine Trainer verfügbar';
$string['notequal'] = 'ungleich';
$string['notopened'] = 'Nicht geöffnet';
$string['novalues'] = 'Keine verfügbaren Werte für dieses Feld';
$string['number'] = 'Reservierungsnummer';
$string['otherlocation'] = 'Anderen Ort bestimmen';
$string['overbook'] = 'Überbuchung';
$string['overbookonly'] = 'Nur noch überbuchte Plätze frei';
$string['overbookstep'] = 'Überbuchen (Schrittweite)';
$string['pluginadministration'] = 'Reservierung Administration';
$string['pluginname'] = 'Reservierung';
$string['publiclists'] = 'Buchungslisten veröffentlichen';
$string['requestoverview'] = 'Buchungsübersicht';
$string['requests'] = 'Buchungen';
$string['reservationcancelled'] = 'Reservierung storniert';
$string['reservationclosed'] = 'Reservierung geschlossen';
$string['reservation:downloadrequests'] = 'Buchungsliste herunterladen';
$string['reservation:grade'] = 'Bewertung hinzufügen';
$string['reservation:manualdelete'] = 'Anträge anderer Benutzer löschen';
$string['reservation:manualreserve'] = 'Anträge für anderer Benutzer einreichen';
$string['reservationnotopened'] = 'Reservierung noch nicht geöffnet';
$string['reservation:reserve'] = 'Eigene Anträge einreichen';
$string['reservations'] = 'Reservierungen';
$string['reservationsettings'] = 'Einstellungen für Reservierung';
$string['reservation:viewnote'] = 'Hinweis zur Buchungsliste einsehen';
$string['reservation:viewrequest'] = 'Die Buchungsliste einsehen';
$string['reserve'] = 'Reservieren';
$string['reservecancel'] = 'Reservierung stornieren';
$string['reserved'] = 'Reserviert';
$string['reservedon'] = 'Reserviert am';
$string['resetreservation'] = 'Alle Reservierungen löschen';
$string['save'] = 'Bewertung speichern';
$string['selectvalue'] = 'Wählen Sie einen der verfügbaren Werte';
$string['showrequest'] = 'Buchungsliste anzeigen';
$string['sortby'] = 'Buchungsliste sortiert nach';
$string['sublimit'] = 'Limit {$a}';
$string['sublimitrules'] = 'Regeln für Limitierung';
$string['sublimits'] = 'Limitierung';
$string['timeclose'] = 'Buchungsvorgang endet am';
$string['timeend'] = 'Enddatum';
$string['timeopen'] = 'Buchungsvorgang beginnt am';
$string['timestart'] = 'Startdatum';
$string['with'] = 'mit';
$string['withselected'] = 'Mit Auswahl...';
$string['yourgrade'] = 'Ihre Bewertung zu dieser Reservierung: {$a->grade}/${a->maxgrade}';
$string['yourscale'] = 'Ihre Bewertung zu dieser Reservierung: {$a}';
