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
 * Strings for component 'bigbluebuttonbn', language 'de', branch 'MOODLE_20_STABLE'
 *
 * @package   bigbluebuttonbn
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bbbduetimeoverstartingtime'] = 'Die Endzeit muss später als die Anfangszeit sein.';
$string['bbbdurationwarning'] = 'Dieses Meeting dauert maximal %duration% Minuten.';
$string['bbbrecordwarning'] = 'Dieses Meeting kann aufgenommen werden.';
$string['bigbluebuttonbn'] = 'BigBlueButton';
$string['bigbluebuttonbn:addinstance'] = 'Neues Meeting anlegen';
$string['bigbluebuttonbn:join'] = 'An einem Meeting teilnehmen';
$string['bigbluebuttonbn:moderate'] = 'Meeting moderieren';
$string['event_activity_created'] = 'BigBlueButton angelegt';
$string['event_activity_deleted'] = 'BigBlueButton gelöscht';
$string['event_activity_modified'] = 'BigBlueButton bearbeitet';
$string['event_activity_viewed'] = 'BigBlueButton angezeigt';
$string['event_activity_viewed_all'] = 'BigBlueButton-Einstellungen angezeigt';
$string['event_meeting_created'] = 'BigBlueButton-Meeting angelegt';
$string['event_meeting_ended'] = 'BigBlueButton-Meeting beendet';
$string['event_meeting_joined'] = 'BigBlueButton-Meeting beigetreten';
$string['event_meeting_left'] = 'BigBlueButton-Meeting verlassen';
$string['general_error_unable_connect'] = 'Das Verbinden ist nicht möglich. Prüfen Sie die URL des BigBlueButton-Servers und außerdem, ob der Server läuft.';
$string['index_confirm_end'] = 'Möchten Sie den virtuellen Klassenraum wirklich beenden?';
$string['index_disabled'] = 'deaktiviert';
$string['index_enabled'] = 'aktiviert';
$string['index_ending'] = 'Der virtuelle Klassenraum wird beendet ... warten Sie bitte.';
$string['index_error_checksum'] = 'Fehler: Prüfen Sie, ob Sie den richtigen Wert \'Shared Secret\' eingegeben haben.';
$string['index_error_forciblyended'] = 'Ein Beitreten zu diesem Meeting ist nicht mehr  möglich, weil es manuell beendet wurde.';
$string['index_error_unable_display'] = 'Die Meetings können nicht angezeigt werden. Prüfen Sie die URL des BigBlueButton-Servers und außerdem, ob der Server läuft.';
$string['index_heading'] = 'BigBlueButton-Räume';
$string['index_heading_actions'] = 'Aktionen';
$string['index_heading_group'] = 'Gruppe';
$string['index_heading_moderator'] = 'Moderator/innen';
$string['index_heading_name'] = 'Raum';
$string['index_heading_recording'] = 'Aufnahme';
$string['index_heading_users'] = 'Nutzer/innen';
$string['index_heading_viewer'] = 'Zuschauer/innen';
$string['mod_form_block_general'] = 'Grundeinstellungen';
$string['mod_form_block_participants'] = 'Teilnehmer/innen';
$string['mod_form_block_record'] = 'Aufnahme-Einstellungen';
$string['mod_form_field_duration'] = 'Dauer';
$string['mod_form_field_duration_help'] = 'Wenn die Dauer für ein Meeting festgelegt ist, wird die Aufnahme automatisch beendet, sobald die Zeit abgelaufen ist.';
$string['mod_form_field_name'] = 'Name des virtuellen Klassenraumes';
$string['mod_form_field_participant_add'] = 'Teilnehmer/in hinzufügen';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Moderator/in';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Zuschauer/in';
$string['mod_form_field_participant_list'] = 'Teilnehmerliste';
$string['mod_form_field_participant_list_action_add'] = 'Hinzufügen';
$string['mod_form_field_participant_list_action_remove'] = 'Entfernen';
$string['mod_form_field_participant_list_text_as'] = 'als';
$string['mod_form_field_participant_list_type_all'] = 'Alle eingeschriebenen Teilnehmer/innen';
$string['mod_form_field_participant_list_type_role'] = 'Rolle';
$string['mod_form_field_participant_list_type_user'] = 'Nutzer/in';
$string['mod_form_field_userlimit'] = 'Nutzerlimit';
$string['mod_form_field_welcome'] = 'Begrüßungsnachricht';
$string['mod_form_field_welcome_default'] = '<br>Willkommen bei der <b>%%CONFNAME%%</b>-Konferenz !<br><br>Um zu verstehen wie BigBlueButton arbeitet haben wir <a href="event:http://www.bigbluebutton.org/content/videos"><u>Tutorial-Videos</u></a> erstellt.<br><br>Um die Telefonkonferenzoption zu nutzen, klicken Sie auf das Headset Icon (oben links). <b>Nutzen Sie bitteein Headset, um Störungen durch Geräusche zu vermeiden.</b>';
$string['mod_form_field_welcome_help'] = 'Ersetzen Sie die Standardnachricht von BigBlueButton durch einen eigenen Text. Die Nachricht kann folgende Platzhalter enthalten (%%CONFNAME%%, %%DIALNUM%%, %%CONFNUM%%) . Sie können auch HTML-Formatierungen verwenden <b>...</b> or <i></i>';
$string['modulename'] = 'BigBlueButton';
$string['modulename_help'] = 'BigBlueButton ermöglicht Ihnen, in Moodle Verbindungen zu LiveClassRoomMeetings anzulegen.

Mit BigBlueButton können Sie einen Titel und eine Beschreibung angeben, außerdem einen Kalendereintrag (mit Zeitraum für den Zugriff), Gruppen und Details zur Aufzeichnungen der Online-Sitzung festlegen.

Um später eine Aufzeichnung zur Verfügung zu stellen, ergänzen Sie eine RecordingsBN-Aktivität in diesem Kurs.';
$string['modulenameplural'] = 'BigBlueButton';
$string['pluginadministration'] = 'BigBlueButton Administration';
$string['pluginname'] = 'BigBlueButton';
$string['serverhost'] = 'Servername';
$string['view_error_create'] = 'Der BigBlueButton-Server meldet einen Fehler. Das Meeting konnte nicht angelegt werden.';
$string['view_error_max_concurrent'] = 'Die Anzahl der gleichzeitigen Meetings ist erreicht.';
$string['view_error_no_group'] = 'Keine Gruppen verfügbar. Legen Sie Gruppen an, bevor Sie versuchen, dem Meeting beizutreten.';
$string['view_error_no_group_student'] = 'Sie sind in keiner Gruppe eingetragen. Wenden Sie sich an Ihre/n Trainer/in oder an den Administrator.';
$string['view_error_no_group_teacher'] = 'Keine Gruppen verfügbar. Legen Sie Gruppen an oder wenden Sie sich an den Administrator.';
$string['view_error_unable_join'] = 'Sie können nicht auf das Meeting zugreifen. Prüfen Sie die URL des BigBlueButton-Servers und außerdem, ob der Server läuft.';
$string['view_error_unable_join_student'] = 'Die Verbindung zum BigBlueButton-Server ist nicht möglich. Wenden Sie sich an Ihre/n Trainer/in oder den Administrator.';
$string['view_error_unable_join_teacher'] = 'Die Verbindung zum BigBlueButton-Server ist nicht möglich. Wenden Sie sich an den Administrator.';
$string['view_error_userlimit_reached'] = 'Die maximale Teilnehmerzahl für dieses Meeting ist erreicht.';
$string['view_groups_selection'] = 'Wählen Sie die Gruppe, der Sie beitreten möchten, und bestätigen Sie die Aktion.';
$string['view_groups_selection_join'] = 'Beitreten';
$string['view_login_moderator'] = 'Als Moderator/in anmelden...';
$string['view_login_viewer'] = 'Als Zuschauer/in anmelden...';
$string['view_noguests'] = 'BigBlueButton ist nicht für Gäste geöffnet.';
$string['view_nojoin'] = 'Mit Ihrer Rolle dürfen Sie an dem Meeting nicht teilnehmen.';
$string['view_recording_list_actionbar'] = 'Werkzeugleiste';
$string['view_recording_list_actionbar_delete'] = 'Löschen';
$string['view_recording_list_actionbar_hide'] = 'Verbergen';
$string['view_recording_list_actionbar_show'] = 'Anzeigen';
$string['view_recording_list_activity'] = 'Aktivität';
$string['view_recording_list_course'] = 'Kurs';
$string['view_recording_list_date'] = 'Datum';
$string['view_recording_list_description'] = 'Beschreibung';
$string['view_recording_list_duration'] = 'Dauer';
$string['view_recording_list_recording'] = 'Aufnahme';
