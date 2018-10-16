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
 * Strings for component 'plagiarism_plagscan', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   plagiarism_plagscan
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allfileschecked'] = 'Check status of all documents on PlagScan’s server';
$string['allowgroups'] = 'Allow Categories';
$string['allowgroups_help'] = 'Type the category name that allows you to use PlagScan ( Ex: category1, category2, ... ). Leave the field blank to allow all categories';
$string['always'] = 'always';
$string['api_language'] = 'Report language';
$string['api_language_help'] = 'All PlagScan reports will be downloaded in this language.';
$string['assignments'] = 'Assignments';
$string['autodel'] = 'Auto save document';
$string['autodescription'] = 'Upload documents automatically when the deadline has approached';
$string['autodescriptionsubmitted'] = 'The files were automatically uploaded to Plagscan on {$a} - switch to the \'manual\' mode to resubmit individual documents';
$string['autostart'] = 'Autostart Plagiarism checks';
$string['badcredentials'] = 'PlagScan did not recognize the account details - please check if the server URL, username ({$a->user}), API key, and version number ({$a->version}) is correct';
$string['checkallstatus'] = 'Update status of all submitted files';
$string['checkstatus'] = 'Check status';
$string['compareinternet'] = 'Data policy';
$string['connectionfailed'] = 'Failed to connect to PlagScan server';
$string['cron_help'] = 'If you reset cron job duplicate files could be send to PlagScan';
$string['cron_normal'] = 'The cron job configuration is accepted';
$string['cron_reset'] = 'The cron job has been reset';
$string['cron_reset_link'] = 'RESET CRON';
$string['cron_running1'] = 'Cron job is running since';
$string['cron_running2'] = 'To reset click';
$string['data_policy'] = 'Data policy';
$string['datapolicyhelp'] = 'Share my documents for analysis with (compare to)';
$string['datapolicyhelp_help'] = 'Share my documents for analysis with (compare to)';
$string['docxemail'] = 'Generate and email .docx report';
$string['docxgenerate'] = 'Generate only .docx report';
$string['docxnone'] = 'Do not generate .docx report';
$string['donotgenerate'] = 'Do not generate';
$string['downloadreport'] = 'Download .docx report';
$string['email_policy'] = 'Email policy';
$string['email_policy_always'] = 'Email all reports';
$string['email_policy_ifred'] = 'Email only if a red level is indicated';
$string['email_policy_never'] = 'Don’t email reports';
$string['email_policy_notification_account'] = 'Notification for new credentials';
$string['email_policy_notification_account_help'] = 'By <b>activating the checkbox</b>, all new generated <b>account credentials</b> will be immediately sent to you.';
$string['english'] = 'English';
$string['filechecked'] = 'Document status checked on Plagscan server';
$string['filesassociated'] = 'Document will be uploaded to account \'{$a}\\';
$string['filesubmitted'] = 'Document \'{$a}\' is submitted to Plagscan';
$string['filetypeunsupported'] = 'The document type \'{$a}\' is not a file type supported by the PlagScan server';
$string['french'] = 'French';
$string['generaldatabase'] = 'Compare with general database';
$string['generateemail'] = 'Generate and email';
$string['generateonly'] = 'Generate only';
$string['german'] = 'German';
$string['handledocx'] = 'Docx option';
$string['if_plagiarism_level'] = 'Only red PlagLevel';
$string['individualaccounts'] = 'Individual teacher accounts';
$string['invalidupload'] = 'The Plagscan server did not accept the file {$a->filename}. The response was: {$a->content}';
$string['maxfilesize'] = 'Maximum file size';
$string['max_file_size'] = 'Maximum file size';
$string['maxfilesize_help'] = 'The file size is too big and can not be uploaded. Recommended value is 1000000.';
$string['months'] = 'After six months';
$string['myinstitution'] = 'Compare to institution database';
$string['never'] = 'Never';
$string['neverdelete'] = 'Never Delete';
$string['newexplain'] = 'For more information on this plugin see:';
$string['nodeadlinewarning'] = 'Warning: An automatic submission to Plagscan was selected without indicating a deadline for this assignment';
$string['nomultipleaccounts'] = 'The use of individual teacher accounts for PlagScan is not possible on this server';
$string['nondisclosure_notice_desc'] = 'All non-disclosure documents will be submitted in "{$a}".<br /><br />';
$string['noone'] = 'Compare to web sources only';
$string['noonedocs'] = 'Compare to web and my documents';
$string['notprocessed'] = 'Plagscan has not analyzed this file yet';
$string['notsubmitted'] = 'Not submitted to Plagscan';
$string['onlyassignmentwarning'] = 'Warning: An automatic submission to Plagscan only functions while using assignment activities';
$string['optin'] = 'Plagiarism opt-in';
$string['optin_explanation'] = 'You chose to opt-in to plagiarism detection. From now on, any assignments you submit will be uploaded to the PlagScan server to be compared with other documents';
$string['optout'] = 'Plagiarism opt-out';
$string['optout_explanation'] = 'You chose to opt-out of plagiarism detection. Your submitted assignments will <b>not</b> be compared with other documents submitted to the PlagScan server';
$string['plagscan'] = 'Plagscan';
$string['plagscan_API_key'] = 'Clave API';
$string['plagscan_API_key_help'] = 'You can see your API key on <a href="https://www.plagscan.com/apisetup" target="_blank">https://www.plagscan.com/apisetup</a>';
$string['plagscan_API_method'] = 'method';
$string['plagscan_API_username'] = 'API Username';
$string['plagscan_API_version'] = 'API Version';
$string['plagscan_API_version_help'] = 'Your latest API version is <b>2.1</b>';
$string['plagscan_call_back_script'] = 'Call back script URL';
$string['plagscan:control'] = 'Submit/Resubmit PlagScan Submissions';
$string['plagscan:enable'] = 'Enable/Disable PlagScan inside an acivity';
$string['plagscanerror'] = 'PlagScan server Error: {$a}';
$string['plagscanexplain'] = 'PlagScan is a plagiarism checker. <br />The software compares documents within your own institution and external web sources. <br/>To take advantage of this plugin, you will need to create an <a href="https://www.plagscan.com" target="_blank">organization account</a>. <br /><br />You can find a guideline at <a href="https://www.plagscan.com/system-integration-moodle" target="_blank">www.plagscan.com/system-integration-moodle</a>. <br />Ask us for a free trial <a href="mailto:pro@plagscan.com">pro@plagscan.com</a> and read about our latest news on <a href="https://twitter.com/plagscan" target="_blank">Twitter</a>. <br /><br />General information can be found at <a href="https://www.plagscan.com" target="_blank">www.PlagScan.com</a><hr />';
$string['plagscanmethod'] = 'Submit';
$string['plagscan_multipleaccounts'] = 'Associate uploaded files with';
$string['plagscan_nondisclosure_notice_email'] = 'Non-disclosure documents';
$string['plagscan_nondisclosure_notice_email_desc'] = 'name@example.com';
$string['plagscan_nondisclosure_notice_email_help'] = 'All documents with blocking notice will be delivered to a separated PlagScan account. All documents located in account will <b>not be shared</b> with other organization users. The entered <b>email can not be part of another PlagScan account</b>.';
$string['plagscanserver'] = 'PlagScan server';
$string['plagscanserver_help'] = 'The standard configuration is "<b>ssl://api.plagscan.com/</b>" or "<b>https://api.plagscan.com/</b>" if Moodle uses a proxy-server.';
$string['plagscan_studentpermission'] = 'Students can refuse permission to upload to Plagscan';
$string['plagscanversion'] = '2.3';
$string['plagscan:viewfullreport'] = 'View/Download PlagScan Reports';
$string['pluginname'] = 'PlagScan';
$string['psreport'] = 'PS Report';
$string['red'] = 'The red PlagLevel starts at';
$string['report'] = 'Report';
$string['resubmit'] = 'Resubmit to Plagscan';
$string['runalways'] = 'Start immediately';
$string['runautomatic'] = 'Start immediately after the first due date';
$string['runduedate'] = 'Start immediately after all due dates';
$string['runmanual'] = 'Start manually';
$string['save'] = 'Save';
$string['savedapiconfigerror'] = 'An error occurred updating your PlagScan settings';
$string['savedconfigsuccess'] = 'Plagscan settings saved successfully';
$string['serverconnectionproblem'] = 'Problem connecting to PlagScan server';
$string['serverrejected'] = 'The PlagScan server rejected this file - the file is broken or protected.';
$string['settings_cancelled'] = 'Antiplagiarism settings have been canceled';
$string['settingsfor'] = 'Update account settings \'{$a}\\';
$string['settingsreset'] = 'Formular l&ouml;schen';
$string['settings_saved'] = 'Antiplagiarism Settings Saved Successfully';
$string['show_to_students'] = 'Share results with students';
$string['show_to_students_actclosed'] = 'after due date';
$string['show_to_students_always'] = 'always';
$string['show_to_students_help'] = 'All participants can see the PlagScan analysis results.';
$string['show_to_students_links'] = 'PlagLevel and Reports';
$string['show_to_students_never'] = 'Never';
$string['show_to_students_opt2'] = 'Share these results';
$string['show_to_students_opt2_help'] = 'This allows the student to see only the PlagLevel or the full reports';
$string['show_to_students_plvl'] = 'PlagLevel';
$string['singleaccount'] = 'The main PlagScan account';
$string['spanish'] = 'Spanish';
$string['ssty'] = 'Sensitivity';
$string['sstyhigh'] = 'High';
$string['sstylow'] = 'Low';
$string['sstymedium'] = 'Medium';
$string['studentdisclosure'] = 'Student Disclosure';
$string['studentdisclosuredefault'] = 'All files uploaded will be submitted to a plagiarism detection service';
$string['studentdisclosure_help'] = 'This text will be displayed to all students on the file upload page.';
$string['studentdisclosureoptedout'] = 'You have opted-out from plagiarism detection';
$string['studentdisclosureoptin'] = 'Click here to opt-in to plagiarism detection';
$string['studentdisclosureoptout'] = 'Click here to opt-out from plagiarism detection';
$string['submit'] = 'Submit to Plagscan';
$string['submituseroptedout'] = 'File \'{$a}\' not submitted - the user has opted-out of plagiarism detection';
$string['testconnection'] = 'Test Connection';
$string['testconnection_fail'] = 'Connection failed!';
$string['testconnection_success'] = 'Connection was successful!';
$string['unsupportedfiletype'] = 'This file type is not supported by PlagScan';
$string['updateyoursettings'] = 'To your PlagScan settings';
$string['useplagscan'] = 'Enable Plagscan';
$string['useplagscan_help'] = '';
$string['useroptedout'] = 'Opted-out of plagiarism detection';
$string['viewmatches'] = 'View matches';
$string['viewreport'] = 'View report';
$string['wasoptedout'] = 'User had opted-out of plagiarism detection';
$string['webonly'] = 'Search the web';
$string['week'] = 'After one week';
$string['weeks'] = 'After three months';
$string['windowsize'] = 'Window size';
$string['windowsize_help'] = 'Window size represents how granular the tech search will be. Recommended value is 60.';
$string['yellow'] = 'The yellow PlagLevel starts at';
