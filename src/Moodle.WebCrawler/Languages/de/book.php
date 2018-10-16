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
 * Strings for component 'book', language 'de', branch 'MOODLE_20_STABLE'
 *
 * @package   book
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Kapitel hinzufügen';
$string['book:edit'] = 'Kapitel bearbeiten';
$string['book:exportimscp'] = 'IMS-Content exportieren';
$string['book:import'] = 'Kapitel importieren';
$string['book:print'] = 'Buch drucken';
$string['book:read'] = 'Buch lesen';
$string['book:viewhiddenchapters'] = 'Verborgene Kapitel sehen';
$string['chapterscount'] = 'Kapitel';
$string['chaptertitle'] = 'Überschrift';
$string['confchapterdelete'] = 'Wollen Sie dieses Kapitel wirklich löschen?';
$string['confchapterdeleteall'] = 'Wollen Sie dieses Kapitel zusammen mit allen Unterkapiteln wirklich löschen?';
$string['content'] = 'Inhalte';
$string['customtitles'] = 'Eigene Überschriften';
$string['customtitles_help'] = 'Wenn diese Option aktiviert ist, werden die Kapitelüberschriften ausschließlich im Inhaltsverzeichnis benutzt. Die Buchseiten können dann eigene (eventuell längere) Kapitelüberschriften enthalten.';
$string['doexport'] = 'Export';
$string['doimport'] = 'Import';
$string['editingchapter'] = 'Kapitel bearbeiten';
$string['errorchapter'] = 'Fehler beim Lesen des Buchkapitels';
$string['faq'] = 'FAQ zum Buch';
$string['faq_help'] = 'FAQ zum Buch - Häufig gestellte Fragen

*Warum gibt es nur zwei Ebenen im Buch?*

Zwei Ebenen reichen normalerweise für alle Bücher völlig aus. Zusätzliche Ebenen können zu schlecht strukturierten Dokumenten führen. Das Modul \'Buch\' ist dafür ausgelegt, kurze mehrseitige Lernmaterialien und Dokumente zu erstellen. Für längere Texte sind oft PDF-Dateien besser handhabbar.

*Wie wandle ich ein Buch in PDF um?*

Wenn Sie virtuelle Drucker auf Ihrem Computer installieren, können Sie das gesamte Buch oder einzelne Kapitel als PDF umwandeln.  (Siehe
<a  href="http://www.pdfforge.org/pdfcreator"  target="_blank">PDFCreator</a>,
<a  href="http://fineprint.com/products/pdffactory/index.html"  target="_blank">PDFFactory</a>,
<a  href="http://www.adobe.com/products/acrobatstandard.html"  target="_blank">Adobe Acrobat</a>,
usw.)

*Dürfen Teilnehmer/innen in Büchern schreiben?*

Nein, ausschließlich die Trainer/innen eines Kurses dürfen Bücher erstellen und bearbeiten. Es ist nicht beabsichtigt, eine Bearbeitungsmöglichkeit für Teilnehmer/innen zu integrieren. Der Grund dafür ist, dass das Modul \'Buch\' möglichst einfach bleiben soll.

*Kann ich Bücher durchsuchen?*

Aktuell gibt es nur eine Möglichkeit, das gesamte Buch zu durchsuchen. Benutzen Sie dafür die Browsersuche in der Vorschau von \'Gesamtes Buch drucken\'. Vielleicht gibt es ja Freiwillige, die die globale Suche für beliebige Materialien (incl. Buch) programmieren möchten.

*Meine Überschriften passen nicht in eine Zeile*

Kürzen Sie die Kapitelüberschriften oder Sie bitten den Administrator der Website, die Breite des Inhaltsverzeichnisses in den Moduleinstellungen zu vergrößern. Dies ist allerdings eine globale Einstellung für alle Bücher in Ihrem Moodle und könnte an anderer Stelle Probleme bereiten.
';
$string['fileordir'] = 'Datei / Verzeichnis';
$string['generateimscp'] = 'IMS-Content erzeugen';
$string['import'] = 'Import';
$string['import_help'] = 'Sie können eine einzelne HTML-Datei oder ein ganzes Verzeichnis mit HTML-Dateien importieren. Relative Links werden in absolute Kapitellinks umgewandelt. Bilder, Flash und Java werden ebenfalls neu verlinkt.';
$string['importinfo'] = 'HTML-Datei oder Verzeichnis importieren.
<br />Kapitel werden alphabetisch nach den Dateinamen sortiert.
<br />Dateien mit Namen \'sub_*.html\' werden als Unterkapitel importiert.';
$string['importing'] = 'Import läuft...';
$string['importingchapters'] = 'Kapitel ins Buch importieren';
$string['maindirectory'] = 'Hauptverzeichnis';
$string['modulename'] = 'Buch';
$string['modulename_help'] = 'Das Buch ist ein einfach strukturiertes, mehrseitiges Lernmaterial. ';
$string['modulenameplural'] = 'Bücher';
$string['navexit'] = 'Buch schließen';
$string['navnext'] = 'Weiter';
$string['navprev'] = 'Zurück';
$string['numbering'] = 'Kapitelgliederung';
$string['numbering0'] = 'Keine';
$string['numbering1'] = 'Zahlen';
$string['numbering2'] = 'Punkte';
$string['numbering3'] = 'Einrückung';
$string['numbering_help'] = 'Überschriften der Kapitel und Unterkapitel können im Buch automatisch gegliedert werden.

* Keine - Kapitel und Unterkapitel werden nicht automatisch nummeriert. Bei Bedarf sind eigene Formatierungen möglich, z.B. mit Buchstaben und Ziffern (A, A.1, A.2, B, B.1,...)
* Zahlen - Kapitel und Unterkapitel werden nummeriert (1, 1.1, 1.2, 2, 2.1,...)
* Punkte - Unterkapitel werden eingerückt und mit Punkten markiert
* Einrückung - Unterkapitel werden eingerückt';
$string['numberingoptions'] = 'Verfügbare Kapitelgliederungen';
$string['numberingoptions_help'] = 'Wählen Sie die Kapitelgliederungen aus, die in den Bucheinstellungen verfügbar sein sollen';
$string['pluginadministration'] = 'Buch-Administration';
$string['pluginname'] = 'Buch';
$string['printbook'] = 'Buch drucken';
$string['printchapter'] = 'Kapitel drucken';
$string['printdate'] = 'Datum';
$string['printedby'] = 'Gedruckt von';
$string['relinking'] = 'Neuverlinkung läuft ...';
$string['subchapter'] = 'Unterkapitel';
$string['toc'] = 'Inhaltsverzeichnis';
$string['top'] = 'Anfang';
