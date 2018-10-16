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
 * Strings for component 'question', language 'de', branch 'MOODLE_20_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Bericht zu möglichen Problemen mit Ihrer Fragen-Datenbank';
$string['availableq'] = 'Verfügbar?';
$string['badbase'] = 'Schlechter Bezug vor **: {$a}**';
$string['broken'] = 'Dies ist ein ungültiger Link, der auf eine nicht existierende Datei zeigt.';
$string['byandon'] = 'von <em>{$a->user}</em> - <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Die Sicherungsdatei konnte nicht kopiert werden';
$string['cannotcreate'] = 'Es konnte kein Eintrag in der Datenbanktabelle für Testversuche (question_attempts) angelegt werden.';
$string['cannotcreatepath'] = 'Pfad {$a} konnte nicht erstellt werden';
$string['cannotdeletecate'] = 'Kategorie konnte nicht gelöscht werden, weil sie für diesen Kontext die Standardkategorie darstellt.';
$string['cannotenable'] = 'Fragetyp {$a} kann nicht direkt erstellt werden.';
$string['cannotfindcate'] = 'Kategoriedaten konnten nicht gefunden werden';
$string['cannotfindquestionfile'] = 'Die Fragendaten konnten nicht in der ZIP-Datei gefunden werden';
$string['cannotgetdsfordependent'] = 'Für diese datensetabhängige Frage kann das gewählte Datenset nicht aufgerufen werden! (Frage: {$a->id}, Datensetwert: {$a->item})';
$string['cannotgetdsforquestion'] = 'Ausgewähltes Datenset für berechnete Fragen nicht gefunden! (Frage:{$a})';
$string['cannothidequestion'] = 'Frage konnte nicht verborgen werden';
$string['cannotimportformat'] = 'Entschuldigung, aber der Import für dieses Format ist bisher nicht implementiert!';
$string['cannotinsertquestion'] = 'Neue Frage konnte nicht eingefügt werden!';
$string['cannotinsertquestioncatecontext'] = 'Neue Fragenkategorie {$a->cat} nicht eingefügt: ungültige Kontext-ID {$a->ctx}';
$string['cannotloadquestion'] = 'Frage konnte nicht geladen werden';
$string['cannotmovequestion'] = 'Mit dieser Funktionen können Sie keine Fragen verschieben in denen Dateien (Bilder) aus verschiedenen Bereichen eingebunden sind.';
$string['cannotopenforwriting'] = 'Öffnen zum Schreiben von {$a} nicht möglich.';
$string['cannotpreview'] = 'Keine Vorschau für diese Fragen möglich!';
$string['cannotretrieveqcat'] = 'Fragekategorie konnte nicht aufgerufen werden';
$string['cannotunhidequestion'] = 'Frage konnte nicht sichtbar gemacht werden';
$string['cannotunzip'] = 'Datei konnte nicht entpackt werden.';
$string['cannotwriteto'] = 'Die exportierten Fragen können nicht nach "{$a}" gespeichert werden';
$string['categorycurrent'] = 'Aktuelle Kategorie';
$string['categorycurrentuse'] = 'Diese Kategorie benutzen';
$string['categorydoesnotexist'] = 'Diese Kategorie gibt es nicht';
$string['categorymoveto'] = 'In der Kategorie sichern';
$string['changepublishstatuscat'] = 'Die <a href="{$a->caturl}">Kategorie "{$a->name}"</a> im Kurs "{$a->coursename}" wird ihren Freigabestatus von <strong>{$a->changefrom} nach {$a->changeto}</strong> ändern.';
$string['chooseqtypetoadd'] = 'Markieren Sie den gewünschten Fragetyp';
$string['clicktoflag'] = 'Klicken um die Frage zu markieren';
$string['clicktounflag'] = 'Klicken um die Frage nicht zu markieren';
$string['contexterror'] = 'Diese Seite sollte nur angezeigt werden, wenn eine Kategorie in einen anderen Kontext verschoben wird.';
$string['copy'] = 'Aus {$a} kopieren und Links ändern.';
$string['created'] = 'Erstellt';
$string['createdby'] = 'Erstellt von';
$string['createdmodifiedheader'] = 'Erstellt / Verändert';
$string['createnewquestion'] = 'Neue Frage erstellen...';
$string['cwrqpfs'] = 'Zufallsfragen, die Fragen aus der Unterkategorie auswählen.';
$string['cwrqpfsinfo'] = '<p>Beim Update auf Moodle 1.9 werden Kategorien, in denen Fragen abgelegt wurden, unterschiedlichen Kontexten zugeordnet. Bei einigen Kategorien kann es vorkommen, dass der Status der Freigabe dabei angepasst werden muss. Dies ist in dem seltenen Fall erforderlich, dass Sie die Funktion zufällig ausgewählte Fragen verwenden und diese aus Kategorien stammen, die sowohl nur in Ihem Kurs, als auch in anderen Kursen verwandt werden. Dies ist in diesem System der Fall. Die spassiert wenn auf unterschiedlichen Hierarchieebenen unterschiedliche Freigabewerte existieren.</p>
<p>In den folgenden Fragenkategorien wurde der Freigabestatus so angepasst, dass die übergeordnete Kategorie den gleichen Status erhält wie die Kategorie, in der Fragen zur Zufallsauswahl abgelegt sind. Die von dieser Änderung betroffenen Fragen können wie bisher in allen Tests weiter genutzt werden, bis sie aus den Tests entfernt werden.</p>';
$string['cwrqpfsnoprob'] = 'Es sind keine Fragekategorien von der Funktion "Zufallsfragenauswahl aus untergeordnete Kategorien" betroffen.';
$string['defaultfor'] = 'Standard für {$a}';
$string['defaultinfofor'] = 'Standardkategorie für Fragen, die im Kontext \'{$a}\' freigegeben sind.';
$string['deletecoursecategorywithquestions'] = 'In dieser Kurskategorie sind Fragen in der Testfragendatenbank hinterlegt. Wenn Sie nun fortfahren, werden diese gelöscht. Über die Testfragenverwaltung können diese  von Ihnen verschoben werden.';
$string['disabled'] = 'deaktiviert';
$string['disterror'] = 'Distribution {$a} verursacht Fehler.';
$string['donothing'] = 'Keine Dateien kopieren oder verschieben. Keine Links ändern.';
$string['editcategories'] = 'Kategorien bearbeiten';
$string['editcategories_help'] = 'Anstatt Fragen in einer einzigen langen Liste zu sammeln, können Sie Ihre Fragen strukturieren und in Fragenkategorien ablegen.

Jede Kategorie verfügt über einen Kontext, der festlegt wo die Fragen dieser Kategorie eingesetzt werden können.

* Aktivitätenkontext - Frage nur in der konkreten Aktivität einsetzbar
* Kurskontext _ Frage kann im gesamten kurs genutzt weden
* Kursbereichskontext - Frage kann in allen Kursen des Kursbereichs genutzt werden
* Systemkontext - Frage kann in allen Kursen genutzt werden.

Kategorien können auch als Container für Zufallsfragen genutzt werden.';
$string['editingcategory'] = 'Kategorie bearbeiten';
$string['editingquestion'] = 'Frage bearbeiten';
$string['editthiscategory'] = 'Diese Kategorie bearbeiten';
$string['emptyxml'] = 'Unbekannter Fehler- leere imsmanifest.xml-Datei.';
$string['enabled'] = 'aktiv';
$string['erroraccessingcontext'] = 'Kein Zugriff auf den Kontext';
$string['errordeletingquestionsfromcategory'] = 'Fehler beim Löschen von Fragen in der Kategorie {$a}.';
$string['errorduringpost'] = 'Fehler nach Prozessabschluss';
$string['errorduringpre'] = 'Fehler vor Prozessbeginn';
$string['errorduringproc'] = 'Fehler bei Prozessausführung';
$string['errorduringregrade'] = 'Frage {$a->qid} konnte nicht neu bewertet werden - Status: {$a->stateid}';
$string['errorfilecannotbecopied'] = 'Fehler: Datei {$a} kann nicht kopiert werden.';
$string['errorfilecannotbemoved'] = 'Fehler: Datei {$a} kann nicht verschoben werden.';
$string['errorfileschanged'] = 'Fehler: Dateien, die in Fragen verwendet werden, haben sich seit der letzten Anzeige geändert. ';
$string['errormanualgradeoutofrange'] = 'Die Bewertung {$a->grade} für die Frage {$a->name} liegt nicht zwischen \'0\' und {$a->maxgrade}. Punkte und Kommentare wurde nicht gespeichert.';
$string['errormovingquestions'] = 'Fehler beim Verschieben von Fragen mit Ids {$a}.';
$string['errorpostprocess'] = 'Fehler beim Post-Processing';
$string['errorpreprocess'] = 'Fehler beim Pre-Processing';
$string['errorprocess'] = 'Fehler beim Processing';
$string['errorprocessingresponses'] = 'Während der Verarbeitung Ihrer Antworten ist ein Fehler aufgetreten.';
$string['errorsavingcomment'] = 'Fehler beim Speichern des Kommentars für Frage {$a->name}.';
$string['errorupdatingattempt'] = 'Fehler beim Speichern des Kommentars zu Frage {$a->id} in der Datenbank.';
$string['exportcategory'] = 'Kategorie exportieren';
$string['exportcategory_help'] = '<h2>Export von Test-Kategorien</h2>

<p>Das <b>Kategorie:</b> Drop-Down-Auswahlfeld wird genutzt, um die Kategorie auszuwählen in der die Fragen stehen, die exportiert werden sollen.</p>

<p>Einige Importformate (GIFT und XML Format) lassen es zu, dass die Kategorie in die Dateibezeichnung mit aufgenommen wird. Damit kann die Kategorie beim Import mit wiederhergestellt werden. In diesem Fall muss das Feld \'in Datei\' mit markiert werden.</p>';
$string['exporterror'] = 'Fehler beim Export aufgetreten!';
$string['exportfilename'] = 'quiz';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = 'Fragen in Datei exportieren';
$string['exportquestions_help'] = '<h2>Export von Fragen aus einer
Kategorie</h2>
<p>Diese Funktion ermöglicht es, alle Fragen einer Kategorie
in eine Textdatei zu exportieren.</p>
<p>Beim Export und Import von Testfragen können nicht alle Fragetypen bei allen Formaten verarbeitet werden. Das liegt daran, dass nicht alle Formate alle Fragetypen unterstützen. Der Fragenumfang, der aus
einem Programm exportiert und in ein anderes
Programm importiert wird, muss also nicht identisch
sein. Prüfen Sie daher alle Fragen, bevor Sie sie in einem
Kurs verwenden.</p>';
$string['filecantmovefrom'] = 'Die Fragedateien können von Ihnen nicht verschoben werden. Sie verfügen nicht über ausreichende Rechte Sie von diesem Ort zu verschieben.';
$string['filecantmoveto'] = 'Die Fragedateien können von Ihnen nicht verschoben oder kopiert werden. Sie verfügen nicht über ausreichende Rechte Sie an diesen Ort zu verschieben.';
$string['filesareacourse'] = 'Dateibereich im Kurs';
$string['filesareasite'] = 'Dateien der Website';
$string['filestomove'] = 'Dateien nach {$a} kopieren / verschieben?';
$string['flagged'] = 'markiert';
$string['flagthisquestion'] = 'Diese Frage markieren';
$string['formquestionnotinids'] = 'Die angefragte Frage ist nicht in questionids vermerkt.';
$string['fractionsnomax'] = 'Eine der Antworten sollte mit 100% bewertet werden, um für die Beantwortung der Frage die volle Punktzahl bekommen zu können.';
$string['getcategoryfromfile'] = 'Kategorie aus Datei holen';
$string['getcontextfromfile'] = 'Kontext aus Datei holen';
$string['ignorebroken'] = 'Ungültige Links ignorieren';
$string['importcategory'] = 'Importkategorien';
$string['importcategory_help'] = '<h2>Import von Kategorien</h2>

<p>Das <b>Kategorie:</b> Dropdown-Auswahlfeld ermöglicht Ihnen, die Kategorie auszuwählen in die die Fragen importiert werden sollen.</p>

<p>Bei einigen Importformaten (GIFT und XML-Format) kann die Importkategorie bereits in der Importdatei festgelegt werden. Um diese Option zu nutzen muss das Häkchen \'aus Datei\' gesetzt werden. Wenn hier keine Markierung erfolgt wird die ausgewählte Kategorie genutzt. Die Anweisung in der Importdatei wird dann ignoriert. </p>

<p>Falls in der Importdatei Kategorien definiert sind, die in Ihrem Kurs nicht existieren ,werden diese beim Import angelegt.</p>';
$string['importquestions'] = 'Fragen aus Datei importieren';
$string['importquestions_help'] = 'Die Funktion ermöglicht es Ihnen Fragen mit verschiedene Fragetypen aus eienr Textdatei zu importieren. Achtung: die Datei muss im UTF-8 Format codiert sein. ';
$string['impossiblechar'] = 'Unzulässiges Zeichen {$a} innerhalb der Klammern entdeckt';
$string['invalidarg'] = 'Ungültige Argumente oder falsche Serverkonfiguration';
$string['invalidcategoryidforparent'] = 'Ungültige Kategorien ID für übergeordnete Ebene';
$string['invalidcategoryidtomove'] = 'Ungültige Kategorien ID beim Verschieben';
$string['invalidconfirm'] = 'Falscher Bestätigungstext';
$string['invalidcontextinhasanyquestions'] = 'Ungültiger Kontext für question_context_has_any_questions.';
$string['invalidwizardpage'] = 'Falsche oder keine Seite festgelegt!';
$string['lastmodifiedby'] = 'Zuletzt verändert von';
$string['linkedfiledoesntexist'] = 'Verbundene Datei {$a} existiert nicht';
$string['makechildof'] = 'Unterkategorie  von \'{$a}\' erzeugen';
$string['maketoplevelitem'] = 'Nach ganz oben bewegen';
$string['matchgrades'] = 'Bewertungen abgleichen';
$string['matchgrades_help'] = '<h2>Bewertungen zuordnen</h2>

<p>Importierte Bewertungen <b>müssen</b> zu einer der gültigen Bewertungen passen, die in der folgenden Liste aufgeführt sind.</p>

<ul>
  <li>100%</li>
  <li>90%</li>
  <li>80%</li>
  <li>75%</li>
  <li>70%</li>
  <li>66.666%</li>
  <li>60%</li>
  <li>50%</li>
  <li>40%</li>
  <li>33.333</li>
  <li>30%</li>
  <li>25%</li>
  <li>20%</li>
  <li>16.666%</li>
  <li>14.2857</li>
  <li>12.5%</li>
  <li>11.111%</li>
  <li>10%</li>
  <li>5%</li>
  <li>0%</li>
</ul>

<p>Negative Werte zu der obigen Liste sind auch zulässig.</p>

<p>Es gibt hierfür zwei Einstellungen. Sie legen fest, wie mit Werten umgegangen werden soll, die nicht <strong>exakt</strong> mit den obigen Werten übereinstimmen.</p>

<ul>
  <li><strong>Fehlermeldung, wenn Bewertung nicht in der Liste enthalten ist</strong><br />
  Wenn die Frage eine Bewertung enthält, die nicht in der Liste steht, wird die Frage beim Import zurückgewiesen und ein Fehler angezeigt.</li>
  <li><strong>Nächstliegenden Wert aus der Liste eintragen</strong><br />
  Wenn ein Wert beim Import nicht gefunden wird, wird er ersetzt durch den nächstliegenden Wert aus der Liste.</li>
</ul>

<p><i>Anmerkung: Einige Importfunktionen schreiben ihre Daten direkt in die Datenbank und können diese Prüfung umgehen.</i></p>';
$string['missingcourseorcmid'] = 'courseid oder cmid muss für print_question  angegeben werden';
$string['missingcourseorcmidtolink'] = 'courseid oder cmid erforderlich, um get_question_edit_link anzuzeigen.';
$string['missingimportantcode'] = 'Für diesem Fragetyp fehlt wichtiger Code: {$a}.';
$string['missingoption'] = 'In der Lückentext-Frage {$a} fehlen Optionen.';
$string['modified'] = 'Verändert';
$string['move'] = 'Aus {$a} verschieben und Links ändern.';
$string['movecategory'] = 'Kategorie verschieben';
$string['movedquestionsandcategories'] = 'Fragen und Fragenkategorien wurden von {$a->oldplace} nach {$a->newplace} verschoben.';
$string['movelinksonly'] = 'Verändert die Angabe auf die Links verweisen. Verschiebt oder kopiert keine Dateien.';
$string['moveq'] = 'Frage(n) verschieben';
$string['moveqtoanothercontext'] = 'Frage in einen anderen Kontext verschieben';
$string['movingcategory'] = 'Kategorie wird verschoben';
$string['movingcategoryandfiles'] = 'Sind Sie sicher, dass Sie die Kategorie {$a->name} und alle Unterkategorien in den Kontext  "{$a->contextto}" verschieben wollen?<br/> Wir haben {$a->urlcount} Dateien entdeckt, auf die in den Fragen aus {$a->fromareaname} verlinkt wird. Wollen Sie diese nach {$a->toareaname} verschieben oder kopieren?';
$string['movingcategorynofiles'] = 'Sind Sie sicher, dass Sie die Kategorie "{$a->name}" und alle Unterkategorien in den Kontext "{$a->contextto}" verschieben wollen?';
$string['movingquestions'] = 'Fragen und Dateien werden verschoben';
$string['movingquestionsandfiles'] = 'Sind Sie sicher, dass Sie die Frage(n) {$a->questions} in den Kontext <strong>"{$a->tocontext}"</strong> verschieben wollen?<br/>In Frage(n) in {$a->fromareaname} wird auf <strong>{$a->urlcount} Dateien</strong> verlinkt. Wollen Sie diese Dateien nach {$a->toareaname} kopieren oder verschieben?';
$string['movingquestionsnofiles'] = 'Sind Sie sicher, dass Sie die Frage(n) {$a->questions} in den Kontext <strong>"{$a->tocontext}"</strong> verschieben wollen?<br/>In keiner Frage in {$a->fromareaname} wird auf <strong> Dateien</strong> verlinkt.';
$string['needtochoosecat'] = 'Sie müssen eine Kategorie auswählen, um diese Frage zu verschieben. Oder Sie drücken "Abbrechen".';
$string['nocate'] = 'Keine solche Kategorie: {$a}!';
$string['nopermissionadd'] = 'Sie haben nicht das Recht, hier Fragen hinzuzufügen.';
$string['nopermissionmove'] = 'Sie haben nicht das Recht, hier Fragen zu verschieben. Speichern Sie die Frage in dieser Kategorie oder als neue Frage.';
$string['noprobs'] = 'Es wurden keine Probleme in Ihrer Fragen-Datenbank gefunden.';
$string['notenoughdatatoeditaquestion'] = 'Weder eine Frage-ID, noch Kategorie-ID oder Fragetyp sind angegeben.';
$string['notenoughdatatomovequestions'] = 'Sie müssen die Frage-ID der Fragen angeben, die Sie verschieben wollen.';
$string['notflagged'] = 'nicht markiert';
$string['novirtualquestiontype'] = 'Kein virtueller Fragetyp für Fragetyp {$a} vorhanden';
$string['parentcategory'] = 'Übergeordnete Kategorie';
$string['parentcategory_help'] = '<h2>Hierarchieebenen für Fragenkategorien</h2>

<p>Fragenkategorien können hierarchisch strukturiert werden. Eine Kategorie kann eine oder mehrere Unterkategorien enthalten. Sie ist dann für jede dieser Unterkategorien die übergeordnete Kategorie. Es gibt eine spezielle Hierarchiebene "Oben": Das ist die oberste Hierarchieebene, alle Kategorien in dieser Ebene haben keine übergeordneten Kategorien.</p>

<p>Normalerweise sehen Sie verschiedene Kontexte von Fragenkategorien. Beachten Sie, dass jeder Kontext seine eigene Hierarchie von Fragenkategorien enthält. Weiterführende Informationen zu Kontexten von Fragenkategorien finden Sie unten. Wenn Sie nicht mehrere Kontexte von Fragenkategorien sehen, kann das daran liegen, dass Sie keine Berechtigung haben, auf andere Kontexte zuzugreifen.</p>

<p>Wenn es in einem Kontext nur eine Fragenkategorie gibt, können Sie diese nicht verschieben, da jeder Kontext mindestens eine Fragenkategorie enthalten muss.</p>

<p>Siehe auch:</p>
<ul>
  <li><a href="help.php?module=question&amp;file=categories.html">Fragenkategorien</a></li>
  <li><a href="help.php?module=question&amp;file=categorycontexts.html">Kontexte von Fragenkategorien</a></li>
  <li><a href="help.php?module=question&amp;file=permissions.html">Berechtigungen für Fragen</a></li>
</ul>';
$string['parenthesisinproperclose'] = 'Die Klammer vor ** ist nicht richtig geschlossen bei {$a}**';
$string['parenthesisinproperstart'] = 'Die Klammer vor ** ist nicht richtig geöffnet bei {$a}**';
$string['penaltyfactor'] = 'Abzugsfaktor';
$string['penaltyfactor_help'] = '<h2>Höhe des Punktabzugs</h2>

<p>Legen Sie fest, welcher Anteil an der erreichbaren Punktzahl für jede falsche Antwort abgezogen wird. Diese Funktion ist nur dann bedeutsam, wenn der adaptive Modus eingeschaltet ist. Der Wert sollte zwischen 0 und 1 liegen. Der Wert "1" bedeutet: Nur bei einer richtigen Antwort im ersten Versuch gibt es Punkte. Der Wert "=" bedeutet: Bei jedem Versuch - auch dem wiederholten - kann die volle Punktzahl erreicht werden. Der Wert "0,1" bedeutet: Beim zweiten Versuch werden für die richtige Antwort nur 90 % der maximal erreichbaren Punktzahl des ersten Versuchs gewertet.</p>';
$string['permissionedit'] = 'Diese Frage bearbeiten';
$string['permissionmove'] = 'Diese Frage verschieben';
$string['permissionsaveasnew'] = 'Diese Frage  als neue Frage speichern';
$string['permissionto'] = 'Sie haben Rechte für :';
$string['published'] = 'Freigegeben';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">Die Frage "{$a->name}" ({$a->qtype})</a> gehört zu dieser Fragenkategorie. Sie wird aber auch im <a href="{$a->qurl}">Test "{$a->quizname}"</a> innerhalb des Kurses "{$a->coursename}" benutzt.';
$string['questionbank'] = 'Fragensammlung';
$string['questioncategory'] = 'Fragenkategorie';
$string['questioncatsfor'] = 'Fragenkategorien für \'{$a}\'';
$string['questiondoesnotexist'] = 'Diese Frage gibt es nicht';
$string['questionname'] = 'Fragetitel';
$string['questionsaveerror'] = 'Fehler beim Speichern der Frage aufgetreten - ({$a})';
$string['questionsmovedto'] = 'In Gebrauch befindliche Fragen wurden nach "{$a}" in der Kategorie verschoben.';
$string['questionsrescuedfrom'] = 'Fragen aus Kontext {$a} gespeichert.';
$string['questionsrescuedfrominfo'] = 'Diese Fragen (einige mögen verborgen sein) wurden gespeichert als der Kontext {$a} gelöscht wurde, da sie in Tests oder anderen Aktivitäten in Gebrauch sind.';
$string['questiontype'] = 'Fragetyp';
$string['questionuse'] = 'Frage in dieser Aktivität benutzen';
$string['saveflags'] = 'Den Status der Markierungen speichern';
$string['selectacategory'] = 'Eine Kategorie wählen:';
$string['selectaqtypefordescription'] = 'Wählen Sie einen Fragetyp, um seine Beschreibung zu sehen.';
$string['selectquestionsforbulk'] = 'Mehrere Fragen auswählen';
$string['shareincontext'] = 'Im Kontext von {$a} freigeben';
$string['stoponerror'] = 'Bei Fehler anhalten';
$string['stoponerror_help'] = 'Die Einstellung legt fest, ob der Importprozess gestoppt werden soll, wenn ein Fehler entdeckt wird. In dem Fall wird keine Frage importiert. Andernfalls werden korrekte Fragen importiert, fehlerhafte ignoriert. ';
$string['tofilecategory'] = 'Kategorie in eine Datei schreiben';
$string['tofilecontext'] = 'Kontext in eine Datei schreiben';
$string['unknown'] = 'Unbekannt';
$string['unknownquestiontype'] = 'Unbekannter Fragetyp: {$a}';
$string['unknowntolerance'] = 'Unbekannter Toleranztyp: {$a}';
$string['unpublished'] = 'Nicht freigegeben';
$string['upgradeproblemcategoryloop'] = 'Bei der Aktualisierung der Fragenkategorien wurde ein Problem erkannt. Es wurde eine Schleife (Wiederholung) im Kategorien-Baum entdeckt. Es handelt sich hierbei um die Kategorie mit der ID {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Die Fragenkategorie {$a->name} ({$a->id}) konnte nicht aktualisiert werden.';
$string['upgradeproblemunknowncategory'] = 'Bei der Aktualisierung der Fragenkategorien wurde ein Problem erkannt. Kategorie {$a->id} bezieht sich auf die Vorgänger-Kategorie, die nicht existiert. Die Vorgänger-Kategorie wurde geändert um das Problem zu beheben.';
$string['wrongprefix'] = 'Falsch formatiertes Präfix-Wort';
$string['youmustselectaqtype'] = 'Wählen Sie zunächst einen Fragetyp aus.';
$string['yourfileshoulddownload'] = 'Der Download Ihrer Exportdatei sollte in Kürze beginnen. Falls nicht, dann klicken Sie  <a href="{$a}">hier</a>.';
