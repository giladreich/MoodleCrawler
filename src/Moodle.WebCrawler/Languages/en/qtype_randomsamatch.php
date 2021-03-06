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
 * Strings for component 'qtype_randomsamatch', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   qtype_randomsamatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingrandomsamatch'] = 'Adding a Random short-answer matching question';
$string['editingrandomsamatch'] = 'Editing a Random short-answer matching question';
$string['nosaincategory'] = 'There are no short answer questions in the category that you chose \'{$a->catname}\'. Choose a different category, make some questions in this category.';
$string['notenoughsaincategory'] = 'There is/are only {$a->nosaquestions} short answer questions in the category that you chose \'{$a->catname}\'. Choose a different category, make some more questions in this category or reduce the amount of questions you\'ve selected.';
$string['randomsamatch'] = 'Random short-answer matching';
$string['randomsamatch_help'] = 'From the student perspective, this looks just like a matching question. The difference is that the list of names or statements (questions) for matching are drawn randomly from the short answer questions in the current category. There should be sufficient unused short answer questions in the category, otherwise an error message will be displayed.';
$string['randomsamatch_link'] = 'question/type/randomsamatch';
$string['randomsamatchsummary'] = 'Like a Matching question, but created randomly from the short answer questions in a particular category.';
