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
 * Strings for component 'block_configurable_reports', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   block_configurable_reports
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Activity posts';
$string['activityview'] = 'Activity views';
$string['addreport'] = 'Add report';
$string['anyone'] = 'Anyone';
$string['anyone_summary'] = 'Any user in the Campus will be able to view this report';
$string['availablemarks'] = 'Available marks';
$string['average'] = 'Average';
$string['badconditionexpr'] = 'Incorrect condition expression';
$string['badsize'] = 'Incorrect size, it must be in &#37; or px';
$string['badtablewidth'] = 'Incorrect width, it must be in &#37; or absolute value';
$string['blockname'] = 'Configurable Reports';
$string['calcs'] = 'Calculations';
$string['categories'] = 'Categories';
$string['categoryfield'] = 'Category field';
$string['categoryfieldorder'] = 'Category field order';
$string['ccoursefield'] = 'Course field condition';
$string['cellalign'] = 'Cell align';
$string['cellsize'] = 'Cell size';
$string['cellwrap'] = 'Cell wrap';
$string['column'] = 'Column';
$string['columnandcellproperties'] = 'Column and cell properties';
$string['columncalculations'] = 'Column Calculations';
$string['columns'] = 'Columns';
$string['comp_calcs'] = 'Calcs';
$string['comp_calcs_help'] = '<p>Here you can add calculations for columns, i.e: average of number of users enrolled in courses</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_calculations'] = 'Calcs';
$string['comp_calculations_help'] = '<p>Here you can add calculations for columns, i.e: average of number of users enrolled in courses</p>';
$string['comp_columns'] = 'Columns';
$string['comp_columns_help'] = '<p>Here you can choose the differents columns of your report depending on the type of report</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_conditions'] = 'Conditions';
$string['comp_conditions_help'] = '<p>Here you can define the conditions (i.e, only courses from this category, only users from Spain, etc.. </p>

<p>You can add a logical expression if you are using more than one condition.</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_customsql'] = 'Custom SQL';
$string['comp_customsql_help'] = '<p>Add a working SQL query. Do no use the moodle database prefix $CFG->prefix instead use "prefix_" without quotes</p>
<p>Example: SELECT * FROM prefix_course</p>

<p>You can find a lot of SQL Reports here: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc contributed reports</a></p>

<p>Since this block supports Tim Hunt\'s CustomSQL Queries Reports, you can use any query.</p>

<p>Remember to add a "Time filter" if you are going to use reports with time tokens. </p>

<p>For using filters see: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>';
$string['comp_filters'] = 'Filters';
$string['comp_filters_help'] = '<p>Here you can choose which filters will be displayed</p>

<p>A filter lets an user to choose columns from the report to filter the report results</p>

<p>For using filters if your report type is SQL see: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['componenthelp'] = 'Component help';
$string['comp_ordering'] = 'Ordering';
$string['comp_ordering_help'] = '<p>Here you can choose how to order the report using fields and directions</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_permissions'] = 'Permissions';
$string['comp_permissions_help'] = '<p>Here you can choose who can view a report.</p>

<p>You can add a logical expression to calculate the final permission if you are using more than one condition.</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_plot'] = 'Plot';
$string['comp_plot_help'] = '<p>Here you can add graphs to your report based on the report columns and values</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_template'] = 'Template';
$string['comp_template_help'] = '<p>You can modify the report\'s layout by creating a template</p>

<p>For creating a template see the replacemnet marks you can use in header, footer and for each report record using the help buttons or the information displayed in the same page.</p>

<p>More help: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['conditionexpr'] = 'Condition';
$string['conditionexpr_conditions'] = 'Condition';
$string['conditionexpr_conditions_help'] = '<p>You can combine conditions using a logic expression</p>

<p>Enter a valid logic expression with these operators: and, or, nor.</p>';
$string['conditionexprhelp'] = 'Enter a valid condition i.e: (c1 and c2) or (c4 and c3)';
$string['conditionexpr_permissions'] = 'Condition';
$string['conditionexpr_permissions_help'] = '<p>You can combine conditions using a logic expression</p>

<p>Enter a valid logic expression with these operators: and, or.</p>';
$string['conditions'] = 'Conditions';
$string['configurable_reports:addinstance'] = 'Add a new configurable reports block';
$string['configurable_reports:manageownreports'] = 'Manage own reports';
$string['configurable_reports:managereports'] = 'Mange reports';
$string['configurable_reports:managesqlreports'] = 'Manage SQL reports';
$string['configurable_reports:viewreports'] = 'View reports';
$string['confirmdeletereport'] = 'Are you sure you want to delete this report?';
$string['coursecategory'] = 'Course in category';
$string['coursechild'] = 'Courses that are children of';
$string['coursededicationtime'] = 'Course dedication time';
$string['coursefield'] = 'Course field';
$string['coursefieldorder'] = 'Course field order';
$string['courseparent'] = 'Courses whose parent is';
$string['courses'] = 'Courses';
$string['coursestats'] = 'Course stats';
$string['currentreportcourse'] = 'Current report course';
$string['currentreportcourse_summary'] = 'The course where the report has been created';
$string['currentuser'] = 'Current user';
$string['currentusercourses'] = 'Current user enrolled courses';
$string['currentusercourses_summary'] = 'A list of the current users courses (only visible courses)';
$string['currentuserfinalgrade'] = 'Current user final grade in course';
$string['currentuserfinalgrade_summary'] = 'This column shows the final grade of the current user in the row-course';
$string['currentuser_summary'] = 'The user that is viewing the report';
$string['cuserfield'] = 'User field condition';
$string['custom'] = 'Custom';
$string['customdateformat'] = 'Custom date format';
$string['customsql'] = 'Custom SQL';
$string['date'] = 'Date';
$string['dateformat'] = 'Date format';
$string['direction'] = 'Direction';
$string['disabled'] = 'Disabled';
$string['donotshowtime'] = 'Do not show date information';
$string['download'] = 'Download';
$string['downloadreport'] = 'Download report';
$string['enabled'] = 'Enabled';
$string['enablejsordering'] = 'Enable JavaScript ordering';
$string['enablejspagination'] = 'Enable JavaScript Pagination';
$string['endtime'] = 'End date';
$string['error_field'] = 'Field not allowed';
$string['error_operator'] = 'Operator not allowed';
$string['error_value_expected_integer'] = 'Expected integer value';
$string['export_ods'] = 'Export in ODS format';
$string['exportoptions'] = 'Export options';
$string['exportreport'] = 'Export report';
$string['export_xls'] = 'Export in XLS format';
$string['fcoursefield'] = 'Course field filter';
$string['field'] = 'Field';
$string['filter'] = 'Filter';
$string['filter_all'] = 'All';
$string['filter_apply'] = 'Apply';
$string['filtercategories'] = 'Filter categories';
$string['filtercategories_summary'] = 'To filter by category';
$string['filtercourses'] = 'Courses';
$string['filtercourses_summary'] = 'This filter shows a list of courses. Only one course can be selected at the same time';
$string['filters'] = 'Filters';
$string['filterstartendtime_summary'] = 'Start / End date filter';
$string['fixeddate'] = 'Fixed date';
$string['footer'] = 'Footer';
$string['forcemidnight'] = 'Force midnight';
$string['fsearchuserfield'] = 'User field search box';
$string['fuserfield'] = 'User field filter';
$string['globalstatsshouldbeenabled'] = 'Site statistics must be enabled. Go to Admin -> Server -> Statistics';
$string['groupseries'] = 'Group series';
$string['groupvalues'] = 'Group same values (sum)';
$string['header'] = 'Header';
$string['importreport'] = 'Import report';
$string['includesubcats'] = 'Include subcategories';
$string['jsordering'] = 'JavaScript Ordering';
$string['jsordering_help'] = 'JavaScript Ordering allow you to order the report table without reloading the page';
$string['line'] = 'Line graph';
$string['linesummary'] = 'A line graph with multiple series of data';
$string['listofsqlreports'] = '<a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">List of SQL Contributed reports</a>';
$string['managereports'] = 'Manage reports';
$string['max'] = 'Maximum';
$string['min'] = 'Minimum';
$string['missingcolumn'] = 'A column is required';
$string['module'] = 'Module';
$string['newreport'] = 'New report';
$string['nocalcsyet'] = 'No calculations yet';
$string['nocolumnsyet'] = 'No columns yet';
$string['noconditionsyet'] = 'No conditions yet';
$string['noexplicitprefix'] = 'No explicit prefix';
$string['nofiltersyet'] = 'No filters yet';
$string['nofilteryet'] = 'No filters yet';
$string['noorderingyet'] = 'No ordering yet';
$string['nopermissionsyet'] = 'No permissions yet';
$string['noplotyet'] = 'No plots yet';
$string['norecordsfound'] = 'No records found';
$string['noreportsavailable'] = 'No reports available';
$string['norowsreturned'] = 'No rows returned';
$string['nosemicolon'] = 'No semicolon';
$string['notallowedwords'] = 'Not allowed words';
$string['operator'] = 'Operator';
$string['ordering'] = 'Ordering';
$string['pagination'] = 'Pagination';
$string['pagination_help'] = 'Number of records to show in each page. Zero means no pagination';
$string['parentcategory'] = 'Parent category';
$string['permissions'] = 'Permissions';
$string['pie'] = 'Pie';
$string['pieareaname'] = 'Name';
$string['pieareavalue'] = 'Value';
$string['piesummary'] = 'A pie graph';
$string['plot'] = 'Plot - Graphs';
$string['pluginname'] = 'Configurable Reports';
$string['previousdays'] = 'Previous days';
$string['previousend'] = 'Previous end';
$string['previousstart'] = 'Previous start';
$string['printreport'] = 'Print report';
$string['puserfield'] = 'User field value';
$string['puserfield_summary'] = 'User with the selected value in the selected field';
$string['queryfailed'] = 'Query failed';
$string['querysql'] = 'SQL Query';
$string['report'] = 'Report';
$string['report_categories'] = 'Categories report';
$string['reportcolumn'] = 'Other report column';
$string['report_courses'] = 'Courses report';
$string['reports'] = 'Reports';
$string['reportscapabilities'] = 'Report Capabilities';
$string['reportscapabilities_summary'] = 'Users with the capability moodle/site:viewreports enabled';
$string['report_sql'] = 'SQL Report';
$string['reporttable'] = 'Report table';
$string['reporttable_help'] = '<p>This is the width of the table that will display the report records.</p>

<p>If you use a Template this option has no effect</p>';
$string['report_timeline'] = 'Timeline report';
$string['report_users'] = 'Users report';
$string['roleincourse'] = 'User with the selected role/s in the current report course';
$string['roleusersn'] = 'Number of users with role...';
$string['serieid'] = 'Serie column';
$string['startendtime'] = 'Start / End date filter';
$string['starttime'] = 'Start date';
$string['stat'] = 'Statistic';
$string['statsactiveenrolments'] = 'Active (last week) enrolments';
$string['statslogins'] = 'Logins in the platform';
$string['statstotalenrolments'] = 'Total enrolments';
$string['sum'] = 'Sum';
$string['tablealign'] = 'Table align';
$string['tablecellpadding'] = 'Table cellpadding';
$string['tablecellspacing'] = 'Table cellspacing';
$string['tableclass'] = 'Table class';
$string['tablewidth'] = 'Table width';
$string['template'] = 'Template';
$string['template_marks'] = 'Template marks';
$string['template_marks_help'] = '<p>You can use any of this replacement marks:</p>

<ul>
<li>##reportname## - For including the report name</li>
<li>##reportsummary## - For including the reports summary</li>
<li>##graphs## - For including the graphs</li>
<li>##exportoptions## - For including the export options</li>
<li>##calculationstable## - For including the calculations table</li>
<li>##pagination## - For including the pagination </li>

</ul>';
$string['templaterecord'] = 'Record template';
$string['timeinterval'] = 'Time interval';
$string['timeline'] = 'Timeline';
$string['timemode'] = 'Time mode';
$string['type'] = 'Type of report';
$string['typeofreport'] = 'Type of report';
$string['typeofreport_help'] = 'Choose the type of report you want to create.
For security, SQL Report requires an additional capability';
$string['userfield'] = 'User profile field';
$string['userfieldorder'] = 'User field order';
$string['usermodactions'] = 'User module actions';
$string['usermodoutline'] = 'User module outline stats';
$string['usersincoursereport'] = 'Any user in the current report course';
$string['usersincoursereport_summary'] = 'Any user in the current report course';
$string['usersincurrentcourse'] = 'Users in current report course';
$string['usersincurrentcourse_summary'] = 'Users with the role/s selected in the report course';
$string['userstats'] = 'User statistics';
$string['value'] = 'Value';
$string['viewreport'] = 'View report';
$string['xaxis'] = 'X Axis';
$string['yaxis'] = 'Y Axis';
$string['youmustselectarole'] = 'At least a role is required';
