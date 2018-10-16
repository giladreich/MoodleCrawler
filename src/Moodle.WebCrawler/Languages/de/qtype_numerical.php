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
 * Strings for component 'qtype_numerical', language 'de', branch 'MOODLE_20_STABLE'
 *
 * @package   qtype_numerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingnumerical'] = 'Numerische Frage hinzufügen';
$string['addmoreanswerblanks'] = 'Leerfelder für {no} weitere Antworten';
$string['addmoreunitblanks'] = 'Leerfelder für {no} weitere Maßeinheiten';
$string['answermustbenumberorstar'] = 'Die Antwort muss eine Zahl oder \'*\' sein.';
$string['answerno'] = 'Antwort {$a}';
$string['decfractionofquestiongrade'] = 'als Dezimalbruch (0-1) der Fragebewertung';
$string['decfractionofresponsegrade'] = 'als Dezimalbruch (0-1) der Antwortenbewertung';
$string['editableunittext'] = 'Texteingabe-Feld';
$string['editingnumerical'] = 'Numerische Frage ändern';
$string['errornomultiplier'] = 'Sie müssen einen Multiplikator für diese Maßeinheit angeben.';
$string['errorrepeatedunit'] = 'Sie können nicht zwei Maßeinheiten mit der selben Bezeichnung haben.';
$string['instructions'] = 'Erläuterungen';
$string['leftexample'] = 'Links als $1.00';
$string['manynumerical'] = 'Nur der Zahlenwert wird bewertet, die Maßeinheit ist optional';
$string['noneditableunittext'] = 'NICHT veränderbarer Wert der Maßeinheit 1';
$string['nonvalidcharactersinnumber'] = 'Ungültiges Zeichen im Zahlenwert';
$string['notenoughanswers'] = 'Sie müssen mindestens eine Antwort eingeben.';
$string['nounitdisplay'] = 'Keine Berücksichtigung der Maßeinheit';
$string['numerical'] = 'Numerisch';
$string['numerical_help'] = 'Aus Nutzersicht sehen numerische Fragen wie gewöhnliche Kurztextfragen aus. Der Unterschied liegt darin, dass numerische Fragen mit einer Fehlertoleranz versehen werden können. Beispiel: Ist die Antwort 10 und die Fehlertoleranz liegt bei 2, so sind alle Antworten von 8 bis 12 richtig.';
$string['numericalinstructions'] = 'Erläuterungen';
$string['numericalinstructions_help'] = 'Spezifische Erläuterungen bezogen auf die Fragen als

* Beispiele von Zahlenformaten
* Komplexe Maßeinheiten';
$string['numericalmultiplier'] = 'Multiplikator';
$string['numericalmultiplier_help'] = 'Der Multiplikator ist der Faktor, mit welchem die richtige numerische Antwort multipliziert wird.

Die erste Maßeinheit (Einheit 1) hat einen Standardmultiplikator von 1. Wenn also die richtige numerische Antwort 5500 lautet und als Maßeinheit ist W (Watt) angegeben, ergibt dies mit dem Multiplikator von 1 die richtige Antwort von 5500 W.

Wenn Sie die Maßeinheit kW (Kilowatt) mit dem Multiplikator 0,001 hinzufügen, ergibt dies eine weitere richtige Antwort von 5,5 kW. 5500 W sowieso 5,5 kW werden dann als richtig anerkannt.

Bedenken Sie, dass auch die eingeräumte Fehlertoleranz multipliziert wird; Liegt diese bei 100 W, wird sie automatisch auch zu 0,1 kW.';
$string['numericalsummary'] = 'Erlaubt eine numerische Antwort (auch mit Maßeinheiten), die gegen einige Modellantworten, ggf. mit Toleranzen, bewertet wird.';
$string['oneunitshown'] = 'Nur der Zahlenwert wird bewertet, die Maßeinheit wird angezeigt';
$string['onlynumerical'] = 'Nur der Zahlenwert wird bewertet, keine Maßeinheit zugelassen';
$string['rightexample'] = 'Rechts als 1.00cm';
$string['selectunit'] = 'Maßeinheit wählen';
$string['selectunits'] = 'Maßeinheiten wählen';
$string['studentunitanswer'] = 'Maßeinheit wird angezeigt als';
$string['unitappliedpenalty'] = 'Diese Bewertungen enthalten einen Abzug von {$a} für falsche Maßeinheiten.';
$string['unitchoice'] = 'Mehrfachauswahl (Radiobutton)';
$string['unitdisplay'] = '<STRONG>Maßeinheit 1 anzeigen</STRONG>';
$string['unitedit'] = 'Maßeinheite/n bearbeiten';
$string['unitgraded'] = 'Zahlenwert und Maßeinheit werden bewertet';
$string['unitgraded1'] = '<strong>Maßeinheit bewertet</strong>';
$string['unithdr'] = 'Maßeinheit {$a}';
$string['unitmandatory'] = 'Obligatorisch';
$string['unitmandatory_help'] = '* Die Antwort wird zusammen mit der angegebenen Einheit bewertet.

* Der Abzug wird angewandt, wenn das Einheitenfeld leer ist';
$string['unitnotgraded'] = '<strong>Einheit unbewertet</strong>';
$string['unitnotselected'] = 'Keine Einheit ausgewählt';
$string['unitnotused'] = '<STRONG>Einheit nicht benutzt</STRONG>';
$string['unitnotvalid'] = 'Ungültige Einheit bei diesem Zahlenwert';
$string['unitoptional'] = 'Optionale Einheit';
$string['unitoptional_help'] = '* Wenn das Einheitenfeld nicht leer ist, wird die Antwort zusammen mit der EInheit gewertet.

* Wenn die Einheit falsch geschrieben oder unbekannt ist, wird die Antwort zusammen mit der Einheit als ungültig gewertet. ';
$string['unitpenalty'] = 'Abzug wegen falscher Einheit';
$string['unitpenalty_help'] = 'Der Abzug wird berechnet, wenn

* eine undefinierte Einheit in das Einheitenfeld eingetragen ist oder

* eine Einheit in das Zahlenfeld eingetragen ist';
$string['unitposition'] = 'Position der Einheit';
$string['unitshandling'] = 'Behandlung von Einheiten';
$string['unitsused'] = '<STRONG>Einheit benutzt</STRONG>';
$string['unitunknown'] = 'Undefinierte Einheit';
$string['unitused'] = '<STRONG>Einheit benutzt</STRONG>';
$string['unituses'] = 'Einheitenverwendung';
$string['unituses_help'] = 'Verwendung von Einheiten

* Einheiten können in Antworten zusammen mit dem Zahlenwert angegeben werden, wenn sie dafür vordefiniert wurden
* der Zahlenwert wird als Konstante verwendet
* Falls die Einheit in einer Antwort nicht angegeben wird, wird der Zahlenwert so benutzt, wie er ist';
$string['validnumberformats'] = 'Gültige Zahlenformate';
$string['validnumberformats_help'] = '* Normale Zahlenschreibweise 13500,67 : 13 500,67 : 13500,67 : 13 500,67
* Bei Verwendung des Tausendertrennzeichens muss IMMER das Dezimalkomma gesetzt sein  13,500.67. 13.500
* Die Exponentschreibweise 1,350067 * 10 <sup> 4 </ sup> wird so notiert 1,350067 E4 : 1,350067 E04';
$string['validnumbers'] = '13500.67 : 13 500.67 : 13,500.67 : 13500,67: 13 500,67 : 1.350067 E4 : 1,350067 E04';
