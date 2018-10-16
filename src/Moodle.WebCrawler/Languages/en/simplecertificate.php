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
 * Strings for component 'simplecertificate', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   simplecertificate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['awarded'] = 'Awarded';
$string['awardedto'] = 'Awarded To';
$string['cantdeleteissue'] = 'Error removing issued certificates';
$string['certificateimage'] = 'Certificate Image File';
$string['certificateimage_help'] = 'This is the picture that will be used in the certificate';
$string['certificatename'] = 'Certificate Name';
$string['certificatename_help'] = 'Certificate Name';
$string['certificatetext'] = 'Certificate Text';
$string['certificatetext_help'] = 'This is the text that will be used in the certificate, some special words will be replaced with variables such as course name, student\'s name, grade ...
These are:

{USERNAME} -> Full user name

{COURSENAME} -> Full course name (or a Defined alternate course name)

{GRADE} -> Formated Grade

{DATE} -> Formated Date

{OUTCOME} -> Outcomes

{HOURS} -> Defined hours in course

{TEACHERS} -> Teachers List


The text can use basic html, basic fonts, tables,  but avoid any position definition';
$string['certificatetextx'] = 'Certificate Text Horizontal Position';
$string['certificatetexty'] = 'Certificate Text Vertical Position';
$string['certificateverification'] = 'Certificate Verification';
$string['certlifetime'] = 'Keep issued certificates for: (in Months)';
$string['certlifetime_help'] = 'This specifies the length of time you want to keep issued certificates. Issed certificates that are older than this age are automatically deleted.';
$string['code'] = 'Code';
$string['completiondate'] = 'Course Completion';
$string['coursegrade'] = 'Course Grade';
$string['coursehours'] = 'Hours in course';
$string['coursehours_help'] = 'Hours in course';
$string['coursename'] = 'Alternative Course Name';
$string['coursename_help'] = 'Alternative Course Name';
$string['coursetimereq'] = 'Required minutes in course';
$string['coursetimereq_help'] = 'Enter here the minimum amount of time, in minutes, that a student must be logged into the course before they will be able to receive the certificate.';
$string['datefmt'] = 'Date Format';
$string['datefmt_help'] = 'Choose a date format to print the date on the certificate. Or, choose the last option to have the date printed in the format of the user\'s chosen language.';
$string['dateformat01'] = 'January 1, 2000';
$string['dateformat02'] = 'January 1st, 2000';
$string['dateformat03'] = '1 January 2000';
$string['dateformat04'] = 'January 2000';
$string['dateformat05'] = '1 {$a} Janeiro {$a} 2000';
$string['defaultcertificatetextx'] = 'Default Hotizontal Text Position';
$string['defaultcertificatetexty'] = 'Default Vertical Text Position';
$string['defaultheight'] = 'Default Height';
$string['defaultwidth'] = 'Default Width';
$string['deletissuedcertificates'] = 'Delete issued certificates';
$string['delivery'] = 'Delivery';
$string['delivery_help'] = 'Choose here how you would like your students to get their certificate.
Open in Browser: Opens the certificate in a new browser window.
Force Download: Opens the browser file download window.
Email Certificate: Choosing this option sends the certificate to the student as an email attachment.
After a user receives their certificate, if they click on the certificate link from the course homepage, they will see the date they received their certificate and will be able to review their received certificate.';
$string['designoptions'] = 'Design Options';
$string['download'] = 'Force download';
$string['emailcertificate'] = 'Email (Must also choose save!)';
$string['emailfrom'] = 'Email From name';
$string['emailfrom_help'] = 'Alternate email form name';
$string['emailothers'] = 'Email Others';
$string['emailothers_help'] = 'Enter the email addresses here, separated by a comma, of those who should be alerted with an email whenever students receive a certificate.';
$string['emailstudenttext'] = 'Attached is your certificate for {$a->course}.';
$string['emailteachermail'] = '{$a->student} has received their certificate: \'{$a->certificate}\'
for {$a->course}.

You can review it here:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} has received their certificate: \'<i>{$a->certificate}</i>\'
for {$a->course}.

You can review it here:

    <a href="{$a->url}">Certificate Report</a>.';
$string['emailteachers'] = 'Email Teachers';
$string['emailteachers_help'] = 'If enabled, then teachers are alerted with an email whenever students receive a certificate.';
$string['filenotfound'] = 'File not Found: {$a}';
$string['getcertificate'] = 'Get your certificate';
$string['grade'] = 'Grade';
$string['gradefmt'] = 'Grade Format';
$string['gradefmt_help'] = 'There are three available formats if you choose to print a grade on the certificate:

Percentage Grade: Prints the grade as a percentage.
Points Grade: Prints the point value of the grade.
Letter Grade: Prints the percentage grade as a letter.';
$string['gradeletter'] = 'Letter Grade';
$string['gradepercent'] = 'Percentage Grade';
$string['gradepoints'] = 'Points Grade';
$string['height'] = 'Certificate Height';
$string['hours'] = 'hours';
$string['intro'] = 'Introduction';
$string['invalidcode'] = 'Invalide certificade code';
$string['issued'] = 'Issued';
$string['issueddate'] = 'Date Issued';
$string['issueoptions'] = 'Issue Options';
$string['keywords'] = 'cetificate, course, pdf, moodle';
$string['modulename'] = 'Simple Certificate';
$string['modulenameplural'] = 'Simple Certificates';
$string['neverdeleteoption'] = 'Never delete';
$string['nocertificatesissued'] = 'There are no certificates that have been issued';
$string['of'] = 'of';
$string['openbrowser'] = 'Open in new window';
$string['opendownload'] = 'Click the button below to save your certificate to your computer.';
$string['openemail'] = 'Click the button below and your certificate will be sent to you as an email attachment.';
$string['openwindow'] = 'Click the button below to open your certificate in a new browser window.';
$string['pluginadministration'] = 'Certificate administration';
$string['pluginname'] = 'Simple Certificate';
$string['printdate'] = 'Print Date';
$string['printdate_help'] = 'This is the date that will be printed, if a print date is selected. If the course completion date is selected but the student has not completed the course, the date received will be printed. You can also choose to print the date based on when an activity was graded. If a certificate is issued before that activity is graded, the date received will be printed.';
$string['printgrade'] = 'Print Grade';
$string['printgrade_help'] = 'You can choose any available course grade items from the gradebook to print the user\'s grade received for that item on the certificate.  The grade items are listed in the order in which they appear in the gradebook. Choose the format of the grade below.';
$string['printoutcome'] = 'Print Outcome';
$string['printoutcome_help'] = 'You can choose any course outcome to print the name of the outcome and the user\'s received outcome on the certificate.  An example might be: Assignment Outcome: Proficient.';
$string['receiveddate'] = 'Date Received';
$string['report'] = 'Report';
$string['savecert'] = 'Save Certificates';
$string['savecert_help'] = 'If you choose this option, then a copy of each user\'s certificate pdf file is saved in the course files moddata folder for that certificate. A link to each user\'s saved certificate will be displayed in the certificate report.';
$string['size'] = 'Certificate Size';
$string['size_help'] = 'These are the Width and Height size (in millimeters) of the certificate, Default size is A4 Landscape';
$string['summaryofattempts'] = 'Summary of Previously Received Certificates';
$string['textposition'] = 'Certificate Text Positionn';
$string['textposition_help'] = 'These are the XY coordinates (in millimeters) of the certificate text';
$string['userdateformat'] = 'User\'s Language Date Format';
$string['viewcertificateviews'] = 'View {$a} issued certificates';
$string['width'] = 'Certificate Width';
