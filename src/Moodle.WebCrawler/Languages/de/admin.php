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
 * Strings for component 'admin', language 'de', branch 'MOODLE_20_STABLE'
 *
 * @package   admin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Kein Zugriff';
$string['accounts'] = 'Nutzerkonten';
$string['additionalhtml'] = 'Zusätzliches HTML';
$string['additionalhtml_desc'] = 'Die folgenden Felder erlauben die Eingabe von HTML-Code, der automatisch auf jeder Seite eingefügt wird. Vorgesehen sind Anweisungen innerhalb des HEAD-Bereichs, direkt am Anfang des BODY-Bereichs und direkt am Ende des BODY-Bereichs. <br /><br />Auf diese Weise können benutzerdefinierte Kopf- oder Fußzeilen auf jeder Seite eingefügt werden. Zur Einbindung von externen Diensten wie Google Analytics ist es sehr einfach, die notwendigen Anweisungen hier einzutragen und unabhängig vom gewählten Design zu benutzen.';
$string['additionalhtmlfooter'] = 'Vor dem Schließen von BODY';
$string['additionalhtmlfooter_desc'] = 'Dieser HTML-Code wird auf jeder Seite direkt vor dem Ende des BODY-Bereichs eingefügt';
$string['additionalhtmlhead'] = 'Innerhalb von HEAD';
$string['additionalhtmlhead_desc'] = 'Dieser HTML-Code wird auf jeder Seite innerhalb des HEAD-Bereichs eingefügt';
$string['additionalhtml_heading'] = 'Zusätzlicher HTML-Code für jede Seite
';
$string['additionalhtmltopofbody'] = 'Nach dem Öffnen von BODY';
$string['additionalhtmltopofbody_desc'] = 'Dieser HTML-Code wird auf jeder Seite direkt am Anfang des BODY-Bereichs eingefügt';
$string['adminseesall'] = 'Administrator/innen sehen alles';
$string['adminseesallevents'] = 'Administrator/innen sehen alle Termine';
$string['adminseesownevents'] = 'Administrator/innen sehen nur eigene Termine';
$string['advancedfeatures'] = 'Zusatzoptionen';
$string['allcountrycodes'] = 'Alle Ländercodes';
$string['allowbeforeblock'] = 'Zugelassene IP-Adressen vorrangig behandeln';
$string['allowbeforeblockdesc'] = 'Standardmäßig wird die Liste der gesperrten IP-Adressen zuerst berücksichtigt. Falls diese Einstellung aktiviert ist, hat die Liste der zugelassenen IP-Adressen Vorrang.';
$string['allowblockstodock'] = 'Blöcke im Dock erlauben';
$string['allowcategorythemes'] = 'Designwechsel im Kursbereich erlauben';
$string['allowcoursethemes'] = 'Designwechsel im Kurs erlauben';
$string['allowdeletes'] = 'Löschen erlauben';
$string['allowediplist'] = 'Zugelassene IP-Adressen';
$string['allowemailaddresses'] = 'E-Mail-Domains vorgeben';
$string['allowobjectembed'] = 'object/embed erlauben';
$string['allowrenames'] = 'Umbenennen erlauben';
$string['allowthemechangeonurl'] = 'Designwechsel über URL erlauben';
$string['allowuserblockhiding'] = 'Blöckeminimierung erlauben';
$string['allowusermailcharset'] = 'E-Mail-Zeichensatz wählbar';
$string['allowuserswitchrolestheycantassign'] = 'Rollenwechsel für Nutzer/innen erlauben, die kein Recht zur Rollenzuweisung besitzen';
$string['allowuserthemes'] = 'Designwechsel für Nutzer/innen erlauben';
$string['antivirus'] = 'AntiVirus';
$string['appearance'] = 'Darstellung';
$string['aspellpath'] = 'Pfad zu <i>aspell</i>';
$string['authentication'] = 'Authentifizierung';
$string['authsettings'] = 'Übersicht';
$string['autolang'] = 'Sprache erkennen';
$string['autologinguests'] = 'Auto-Login für Gäste';
$string['availablelicenses'] = 'Verfügbare Lizenzen';
$string['availableto'] = 'Verfügbar für';
$string['backgroundcolour'] = 'LaTeX Transparenzfarbe';
$string['backups'] = 'Sicherung';
$string['badwordsconfig'] = 'Geben Sie eine kommagetrennte Liste der Wörter ein, die zensiert werden sollen.';
$string['badwordsdefault'] = 'Wenn die Liste leer ist, wird die Wortliste aus dem Sprachpaket verwendet.';
$string['badwordslist'] = 'Wortzensurliste';
$string['blockediplist'] = 'Gesperrte IP-Adressen';
$string['blockinstances'] = 'Instanzen';
$string['blockmultiple'] = 'Mehrfach';
$string['blockprotect'] = 'Gegen Löschen schützen';
$string['blockprotect_help'] = 'Ausgewählte Blöcke werden im Website-weiten Kontext gegen Löschen geschützt. So sind vor allem die Blöcke \'Navigation\' und \'Einstellungen\' geschützt, die bei einer versehentlichen Löschung nur schwer wiederherstellbar wären.';
$string['blocksettings'] = 'Übersicht';
$string['blockunprotect'] = 'Schutz aufheben';
$string['bloglevel'] = 'Blogsichtbarkeit';
$string['bloglevelupgrade'] = 'Aktualisierung der Blogsichtbarkeit';
$string['bloglevelupgradedescription'] = '<p>Diese Website wurde auf Moodle 2.0 aktualisiert.</p>
<p>Die Regeln für die Blogsichtbarkeit wurden in 2.0 stark vereinfacht, aber Sie können auch weiterhin die bisherigen Regeln verwenden.</p>
<p>Um die kursbasierte oder gruppenbasierte Sichtbarkeit der Blogeinträge auf Ihrer Website zu bewahren, wird das folgende Script spezielle Blogforen erzeugen, und zwar in jedem Kurs, dessen Nutzer/innen bisher irgendwelche Blogeinträge veröffentlicht haben. Diese Blogeinträge werden in die speziellen Blogforen in den Kursen kopiert.</p>
<p>Die bisherigen Blogs werden abgeschaltet, aber es werden keine Blogeinträge gelöscht.</p>
<p>Sie können das Script über den folgenden Link starten: <a href="{$a->fixurl}">Aktualisierung der Blogsichtbarkeit</a>.</p>';
$string['bloglevelupgradeinfo'] = 'Die Regeln für die Blogsichtbarkeit wurden in Moodle 2.0 vereinfacht, wobei Sie weiterhin die alten Berechtigungseinstellungen benutzen können. Um die kursbasierte oder gruppenbasierte Sichtbarkeit der Blogeinträge auf Ihrer Website zu bewahren, wird das folgende Script spezielle Blogforen erzeugen, und zwar in jedem Kurs, dessen Nutzer/innen bisher irgendwelche Blogeinträge veröffentlicht haben. Diese Blogeinträge werden in die speziellen Blogforen in den Kursen kopiert. Die bisherigen Blogs werden abgeschaltet, aber es werden keine Blogeinträge gelöscht.';
$string['bloglevelupgradenotice'] = 'Ihr Moodle benutzt alte Blogberechtigungen. Die <a href="bloglevelupgrade.php">Aktualisierung der Blogsichtbarkeit</a> wird empfohlen.';
$string['bloglevelupgradeprogress'] = 'Fortschritt: {$a->userscount} Nutzer/innen geprüft - {$a->blogcount} Blogeinträge konvertiert';
$string['bookmarkadded'] = 'Lesezeichen hinzugefügt';
$string['bookmarkalreadyexists'] = 'Sie haben für diese Seite bereits ein Lesezeichen gesetzt.';
$string['bookmarkdeleted'] = 'Lesezeichen gelöscht';
$string['bookmarkthispage'] = 'Seite als Lesezeichen speichern';
$string['cachejs'] = 'JavaScript Cache';
$string['cachejs_help'] = 'Bei Javascript führen Komprimierung und Caching zu höherer Leistung. Diese Option sollte für Produktivsysteme unbedingt aktiviert sein. Entwickler möchten die Option eventuell deaktivieren.';
$string['cachetext'] = 'Cache-Gültigkeit';
$string['cachetype'] = 'Cache-Typ';
$string['calendarexportsalt'] = 'Exportschlüssel für den Kalender';
$string['calendarsettings'] = 'Kalender';
$string['calendar_weekend'] = 'Tage am Wochenende';
$string['cannotdeletemissingqtype'] = 'Sie dürfen den fehlenden Fragetyp nicht löschen. Er wird vom System benötigt.';
$string['cannotdeletemodfilter'] = 'Der Filter \'{$a->filter}\' kann nicht deinstalliert werden, weil er Teil des Moduls \'{$a->module}\' ist.';
$string['cannotdeleteqtypeinuse'] = 'Sie dürfen den Fragetyp \'{$a}\' nicht löschen. In der Fragedatenbank gibt es Fragen dieses Typs.';
$string['cannotdeleteqtypeneeded'] = 'Sie dürfen den Fragetyp \'{$a}\' nicht löschen. Andere installierte Fragetypen sind davon abgeleitet.';
$string['cfgwwwrootslashwarning'] = 'In der Datei config.php ist die Einstellung für $CFG->wwwroot  falsch eingetragen. Das Zeichen \'/\' am Ende muss gelöscht werden, weil es andernfalls Probleme verursachen kann. Siehe <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>.';
$string['cfgwwwrootwarning'] = 'In der Datei config.php ist die Einstellung für $CFG->wwwroot  falsch eingetragen. Der Text passt nicht zu der URL, mit der die Seite aufgerufen wurde. Eine Änderung ist notwendig, weil es andernfalls zu Problemen kommen kann. Siehe <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>.';
$string['change'] = 'Ändern';
$string['changesitelang'] = 'Sprache für die Website ändern';
$string['checkboxno'] = 'Nein';
$string['checkboxyes'] = 'Ja';
$string['choosefiletoedit'] = 'Wählen Sie eine Datei zur Bearbeitung';
$string['clamfailureonupload'] = 'Fehlermeldung bei ClamAV';
$string['cleanup'] = 'Aufräumarbeiten';
$string['clianswerno'] = 'n';
$string['cliansweryes'] = 'y';
$string['cliincorrectvalueerror'] = 'Fehler: Falscher Wert "{$a->value}" für "{$a->option}"';
$string['cliincorrectvalueretry'] = 'Falscher Wert - bitte nochmal';
$string['clistatusdisabled'] = 'Status: deaktiviert';
$string['clistatusenabled'] = 'Status: aktiviert';
$string['clitypevalue'] = 'Wert eingeben';
$string['clitypevaluedefault'] = 'Wert eingeben oder Standardwert benutzen ({$a})';
$string['cliunknowoption'] = 'Nicht erkannte Optionen:
  {$a}
Hilfe wird über die Option --help angezeigt.';
$string['cliupgradefinished'] = 'Die Aktualisierung wurde erfolgreich beendet.';
$string['cliyesnoprompt'] = 'y (yes=ja) oder n (no=nein) eingeben';
$string['commentsperpage'] = 'Angezeigte Kommentare pro Seite';
$string['commonfiltersettings'] = 'Grundeinstellungen';
$string['commonsettings'] = 'Grundeinstellungen';
$string['componentinstalled'] = 'Komponente installiert';
$string['computedfromlogs'] = 'Logdaten seit {$a}';
$string['condifmodeditdefaults'] = 'Die eingegebenen Werte legen die Standardwerte fest, die beim Hinzufügen einer Aktivität im Einstellungsformular vorgegeben werden. Zusätzlich kann angegeben werden, welche der Einstellungen als \'optionale Felder\' bezeichnet werden.';
$string['confeditorhidebuttons'] = 'Wählen Sie die Optionen, die im HTML-Editor verborgen sein sollen.';
$string['configallcountrycodes'] = 'Diese Länderliste wird an unterschiedlichen Stellen benutzt, z.B. im Nutzerprofil.
Falls das Feld leer bleibt, wird standardmäßig die gesamte Liste aus der Datei countries.php im englischen Sprachpaket benutzt.
Dies ist die Liste gemäß ISO 3166-1.
Über eine kommagetrennte Liste können Sie die Auswahlmöglichkeiten einschränken, z.B. \'GB,FR,ES\'.
Falls Sie weitere, nicht standardmäßige Codes ergänzen möchten, so müssen Sie diese Codes in der Datei countries.php in Ihrem Sprachpaket hinzufügen.';
$string['configallowassign'] = 'Die linksseitig genannten Rolleninhaber dürfen alle rechts in den Spalten markierten Rollen an andere Nutzer/innen zuweisen.';
$string['configallowblockstodock'] = 'Diese Option legt fest, ob Nutzer/innen die Blöcke in ein spezielles Dock ablegen können, wobei nicht alle Designs diese Möglichkeit unterstützen.';
$string['configallowcategorythemes'] = 'Wenn Sie diese Option aktivieren, können Designs auf Kategorieebene gesetzt werden. Dies wirkt sich gleichzeitig auf alle Unterkategorien und Kurse aus, falls diese nicht wiederum eigene Designs verwenden. ACHTUNG: Kategorie-Designs können zu einer Reduzierung der Arbeitsgeschwindigkeit führen!!';
$string['configallowcoursethemes'] = 'Mit der Aktivierung erlauben Sie die Auswahl kursspezifischer Designs. Ein Kursdesign hat Vorrang vor allen anderen Designfestlegungen (Website, Kursbereich, Nutzer, Session).';
$string['configallowemailaddresses'] = 'Wenn Sie die Eingabe bestimmter E-Mail-Domains bei der Neueingabe verbindlich vorgeben möchten, tragen Sie hier bitte eine leerzeichengetrennte Liste der zulässigen Domains ein, z.B. <strong>unserefirma.de</strong>. Alle übrigen Domains werden zurückgewiesen. Um Subdomains zu erlauben, fügen Sie die Domain mit einem führenden Punkt \'.\' hinzu.';
$string['configallowobjectembed'] = 'Aus Sicherheitsgründen dürfen normale Nutzer/innen keine Multmedia-Objekte über die HTML-Tags &lt;embed&gt; und &lt;object&gt; in den HTML-Code einbinden. Multimedia-Objekte sind alternativ auch über den Mediafilter nutzbar, ohne dabei Sicherheitsprobleme zu verursachen. Wenn Sie die HTML-Tags für alle erlauben möchten, aktivieren Sie diese Option.';
$string['configallowoverride'] = 'Die linksseitig genannten Rolleninhaber dürfen alle nach rechts markierten Rollen ändern';
$string['configallowoverride2'] = 'Wählen Sie, welche Rollen durch eine Rolle aus der linken Spalte verändert werden dürfen. <br />Beachten Sie dabei, dass diese Einstellungen ausschließlich für Nutzer/innen gelten, für die die Rechte moodle/role:override oder moodle/role:safeoverride gesetzt sind.';
$string['configallowswitch'] = 'Legen Sie fest, in welche anderen Rollen eine Person von ihrer aktuellen Rolle aus wechseln kann. Zusätzlich zu dieser Einstellung ist die Berechtigung moodle/role:switchroles für die aktuelle Rolle erforderlich. <br />Anmerkung: Der Wechsel in eine Rolle kann nur erfolgen, wenn diese die Berechtigung moodle/course:view besitzen und nicht die Berechtigung moodle/site:doanything. Einige Spalten sind daher u.U. deaktiviert.';
$string['configallowthemechangeonurl'] = 'Wenn diese Option aktiv ist, kann das Design jeder Seite über den Zusatz \'theme={themename}\' zur URL geändert werden';
$string['configallowuserblockhiding'] = 'Möchten Sie das Minimieren von Blöcken zulassen? Die Blöcke werden dabei bis auf die Kopfzeile reduziert. Jede Person beeinflusst ausschließlich ihre eigene Nutzeransicht.';
$string['configallowusermailcharset'] = 'Mit der Aktivierung erlauben Sie allen Nutzer/innen der Website, den Zeichensatz für E-Mails selber festzulegen.';
$string['configallowuserswitchrolestheycantassign'] = 'Standardmäßig besteht für das Recht zum Rollenwechsel die Notwendigkeit, dass jemand das Recht moodle/role:assign besitzt. Falls diese Einstellung aktiviert ist, entfällt diese Notwendigkeit. <br />Die verfügbaren Rollen, die im Dropdown-Menü "Rolle wechseln..." angezeigt werden, sind nur durch die Einstellungen in der Tabelle "Rollenzuweisungen erlauben" beschränkt. Es wird unbedingt empfohlen, dass diese Tabelle niemandem erlaubt, zu höheren Rollen mit mehr Rechten zu wechseln als ihm ursprünglich zugewiesen wurden.';
$string['configallowuserthemes'] = 'Die Einstellung erlaubt allen Nutzer/innen, ein eigenes Design auszuwählen. Damit wird das Design der Website überschrieben, aber keine kursspezifische Design-Vorgabe.';
$string['configallusersaresitestudents'] = 'Mit dieser Option legen Sie den Zugriff zu den Lernaktivitäten auf der Startseite fest. Wenn Sie \'Ja\' auswählen, können alle eingetragenen Nutzer/innen die Lernaktivitäten auf der Startseite durchführen. Wenn Sie \'Nein\' auswählen, können nur diejenigen, die derzeit in mindestens einem Kurs eingetragen sind, die Lernaktivitäten auf der Startseite ausführen. Nur Administrator/innen und speziell zugelassene Trainer/innen dürfen die Aktivitäten auf der Startseite einrichten und bearbeiten.';
$string['configauthenticationplugins'] = 'Wählen Sie die Authentifizierungsverfahren aus, die Sie benutzen möchten, und ordnen Sie diese in eine Reihenfolge der Nutzung.</br>
<b>Hinweis:</b> Bei einer späteren Deaktivierung von Authentifizierungsverfahren kann es passieren, dass Nutzer/innen mit dem deaktivierten Verfahren keinen Zugang mehr erhalten. Prüfen Sie dies sorgfältig.</br>';
$string['configautolang'] = 'Leitet die Standardsprache von den Browsereinstellungen des Nutzers ab. Wenn die Funktion deaktiviert ist wird die Default-Einstellung für die Sprache der Moodle-Installation verwendet.';
$string['configautologinguests'] = 'Sollen Personen automatisch als Gäste eingeloggt werden, wenn sie Kurse mit Gastzugang öffnen?';
$string['configbloglevel'] = 'Diese Einstellung erlaubt es, die Sichtbarkeit von Blogeinträgen für dieses Moodle zu beschränken. Beachten Sie, dass die Einstellung den Maximalrahmen beim Lesen festlegt, nicht aber den Blogtyp beim Schreiben ändert. Sie können das Blogsystem auch vollständig deaktivieren.';
$string['configcachetext'] = 'Diese Einstellung kann größere Websites (oder auch Websites, die Textfilter verwenden) erheblich beschleunigen. Textkopien werden in der jeweiligen Form für die festgelegte Zeit vorgehalten. Eine zu niedrige Einstellung könnte das System verlangsamen. Bei einer zu hohen Einstellung werden Textänderungen  (z.B. neue Links) erst erheblich verzögert sichtbar.';
$string['configcachetype'] = 'Wählen Sie den Cache-Typ, den Moodle verwenden soll. Stellen Sie sicher, dass der Cache-Speicher aktiviert ist (Einstellung <em>rcache</em>). Verwenden Sie diese Einstellung nur, wenn Sie die Belastung des Datenbanksystems reduzieren müssen, denn Moodle läuft mit aktiviertem Cache-Speicher langsamer. Für mittelgroße Moodle-Systeme kann die Einstellung \'internal\' von Vorteil sein. Bei einem einzelnen Webserver mit installiertem eAccelerator oder Turckmmcache und aktivierter \'shared memory\' Einstellung sollten Sie die Einstellung \'eaccelerator\' ausprobieren. Wenn Sie mehrere Webserver haben und ein odere mehrere memcached Dämonen sowie die PHP-memcached Erweiterung laufen haben, dann wählen Sie die Einstellung \'memcached\' und konfigurieren die unten stehenden memcached-Einstellungen.
<strong>Achtung:</strong>Testen und optimieren Sie die Performanz Ihrer Seiten unter Belastung. Ein aktivierter Cache kann Ihre Seiten langsamer machen. Bei stark belasteten Seiten können eAccelerator und memcached Geschwindigkeitsvorteile bringen, das geht jedoch auf Kosten der CPU-Last für den Webserver.';
$string['configcalendarexportsalt'] = 'Dieser Zufallstext (hash salt) wird benutzt, um die Sicherheit von Authentifikationstoken für den Kalenderexport zu erhöhen. Beachten Sie, dass alle aktuellen Token ungültig werden, wenn Sie diesen Text ändern.';
$string['configclamactlikevirus'] = 'Dateien wie virenhaltige Dateien behandeln';
$string['configclamdonothing'] = 'Dateien als ok behandeln';
$string['configclamfailureonupload'] = 'Legen Sie die Reaktion fest, falls bei der Virenprüfung von hochgeladenen Dateien ein Fehler auftritt.
Wenn Sie \'Behandle Dateien wie virenhaltige Dateien\' auswählen, werden diese in Quarantäne verschoben oder gelöscht. Wenn Sie \'Behandle die Dateien als ok\' wählen, werden diese normal ohne Prüfung hochgeladen. In jedem Fall werden die Administrator/innen benachrichtigt, dass ein Problem aufgetreten ist.
Wenn Sie die Option \'Behandle Dateien wie virenhaltige Dateien\' und ein Fehler auftritt (z.B. weil der Pfad zu ClamAV falsch eingegeben wurde) werden alle hochgeladenen Dateien in Quarantäne geschoben oder gelöscht. Seien Sie mit dieser Einstellung sehr vorsichtig.';
$string['configconvertformat'] = 'Wenn  auf dem Server die Programme <i>latex</i>, <i>dvips</i> und <i>convert</i> verfügbar sind, können Formelbilder im angegebenen Format erzeugt werden. Standardmäßig werden die Formelbilder mit dem Programm mimeTeX als GIF erzeugt.';
$string['configcookiehttponly'] = 'Diese Funktion aktiviert neue Funktionen unter PHP 5.2.0. Um bestimmte XSS-Angriffe zu verhindern, werden Cookies nur über echte HTTP-Anfragen gesendet. Cookies sollten nicht für Skripte zugänglich sein. Diese Funktion wird nicht von allen Browsern unterstützt. Es kann auch sein, dass im aktuellen Code noch nicht überall die Funktion unterstützt wird.';
$string['configcookiesecure'] = 'Wenn Ihr Server über HTTPS-Verbindungen erreicht wird, ist es empfehlenswert die Funktion zum Übertragen sicherer Cookies zu aktivieren. Wenn die Funktion aktiviert wird müssen Sie sicherstellen, dass der Server nicht über HTTP-Verbindungen erreichbar ist bzw. eine Umleitung an https:// Adressen besteht. Falls die <em>wwwroot</em> Adresse nicht mit https:// beginnt wird die Einstellung automatisch wieder deaktiviert. .';
$string['configcountry'] = 'Diese Option legt das Land fest, das als Vorgabe für neue Nutzerkonten eingetragen ist. Wenn Nutzer/innen ihr Land selber eintragen sollen, lassen Sie das Feld leer.';
$string['configcourserequestnotify'] = 'Anmeldename der Person, die bei einer Kursanfrage benachrichtigt werden soll';
$string['configcourserequestnotify2'] = 'Nutzer/innen, die benachrichtigt werden sollen, wenn ein Kurs angefordert wird. Es werden nur Nutzer/innen gelistet, die eine Kursanfrage annehmen dürfen.';
$string['configcoursesperpage'] = 'Geben Sie die Kursanzahl an, die pro Seite in einer Kursliste angezeigt werden soll.';
$string['configcronclionly'] = 'Diese Option legt fest, dass das Script cron.php ausschließlich über die Kommandozeile aufgerufen werden kann und nicht im Webbrowser. Die nachfolgende Kennwort-Einstellung wird überschrieben.';
$string['configcronremotepassword'] = 'Dies bedeutet, dass das Script cron.php nicht im Webbrowser aufgerufen werden kann, ohne das Kennwort folgendermaßen an die URL anzuhängen: <pre>
http://www.beispiel.de/admin/cron.php?password=geheim
</pre>Falls das Feld leer bleibt, wird kein Kennwort benötigt.';
$string['configcurlcache'] = 'Speicherzeit für cURL Cache (in Sekunden)';
$string['configcustommenuitems'] = 'Sie können ein eigenes, zusätzliches Menü einrichten, welches auf jeder Seite angezeigt wird. Jede Zeile besteht aus dem angezeigten Text, einer URL (optional), einem Tooltipp (optional) und der Sprachzuordnung (optional). Die Trennung erfolgt jeweils durch einen senkrechten Strich (|). Die Struktur wird über Bindestriche (-) geregelt. Für die Sprachzuordnung geben Sie nach einem dritten senkrechten Strich das Kürzel der Sprache an (oder eine kommagetrennte Liste). Ein solcher Menüeintrag wird nur angezeigt, wenn der Nutzer genau diese Sprache benutzt. Beispiel: <pre> Moodle Community|http://moodle.org -Moodle Support|http://moodle.org/support -Moodle Entwickler|http://moodle.org/development --Moodle Tracker|http://tracker.moodle.org --Moodle Docs|http://docs.moodle.org|Moodle-Dokumentation --Deutsche Moodle Docs|http://docs.moodle.org/de|Moodle-Dokumentation in Deutsch|de -Moodle News|http://moodle.org/Nachrichten von Moodle -Moodle Commercial Hosting|http://moodle.com/hosting -Moodle Commercial Support|http://moodle.com/support </pre>';
$string['configdbsessions'] = 'Bei der Aktivierung dieser Einstellung wird die Datenbank unter anderem dazu verwendet, um Informationen über aktuelle Sitzungen abzuspeichern. Das ist sinnvoll bei sehr großen Anwendungen oder Anwendungen, die über mehrere Cluster von Servern verteilt arbeiten. Meist kann die Einstellung deaktiviert bleiben. Bei einer Einstellungsänderung werden alle aktuellen Nutzer/innen ausgeloggt (auch die Administrator/innen). Falls Sie MySQL benutzen, stellen Sie sicher, dass \'max_allowed_packet\' in der Datei my.cnf (oder my.ini) mindestens 4M ist.';
$string['configdebug'] = 'Wenn Sie diese Funktion einschalten, werden die Fehlermeldungen von PHP erweitert, so dass mehr Warnungen ausgegeben werden. Dies ist nur für Entwickler nützlich.';
$string['configdebugdisplay'] = 'Wenn diese Option aktiviert ist, werden Fehlermeldungen direkt auf der HTML-Seite angezeigt. Auftretende Fehler stören dann aber XHTML, JavaScript, Cookies und HTTP-Header. Wenn die Option deaktiviert ist, werden alle Fehlermeldungen in die Logdaten des Webservers geschrieben. Die PHP-Variable error_log enthält den Pfad zur Logdatei.';
$string['configdebugpageinfo'] = 'Wenn diese Option aktiviert ist, werden Seiteninformationen in der Fußzeile angezeigt.';
$string['configdebugsmtp'] = 'Umfassende Debug-Mitteilungen zum Versand von E-Mails über den eingestellten SMTP-Server erstellen.';
$string['configdebugstringids'] = 'Diese Option soll bei der Übersetzung helfen. Neben jeder Textausgabe werden zusätzlich die Sprachdatei und die Text-ID angezeigt. Eine Änderung der Einstellung ist erst bei einem Neuladen der  betreffenden Seite wirksam.';
$string['configdebugvalidators'] = 'Aktivieren Sie diese Option, um Links zu externen Validierungsservern in der Fußzeile anzuzeigen. Möglicherweise müssen Sie einen neuen Nutzer mit dem Anmeldenamen <em>w3cvalidator</em> erstellen und den Gastzugang freischalten. Diese Änderungen erlauben unauthorisierte Serverzugriffe und sollten nicht auf Produktivsystemen eingeschaltet werden!';
$string['configdefaultallowedmodules'] = 'Welche Module sollen in den Kursen der oben genannten Kategorie standardmäßig bei der Kurs-Einrichtung aktiviert sein?';
$string['configdefaulthomepage'] = 'Diese Option legt fest, welche Seite eingeloggte Nutzer/innen als Startseite bekommen.';
$string['configdefaultrequestcategory'] = 'Von Nutzer/innen beantragte Kurse werden automatisch in diesem Kursbereich angelegt.';
$string['configdefaultrequestedcategory'] = 'Voreingestellter Kursbereich, in dem beantragte Kurse angelegt werden.';
$string['configdefaultuserroleid'] = 'Angemeldete Nutzer/innen erhalten für die gesamte Website automatisch die hier angegebene Rolle zugewiesen, u.z. zusätzlich zu anderen Rollenzuweisungen. Standardmäßig ist die Rolle "Authentifizierte/r Nutzer/in" eingestellt. Achten Sie darauf, dass Sie mit Ihrer Einstellung keine Konflikte mit anderen Rollen schaffen und dass die Nutzer/innen sinnvolle Dinge tun können, z.B. ihr Nutzerprofil verwalten, den eigenen Kalender verwalten oder Blogeinträge schreiben.';
$string['configdeleteincompleteusers'] = 'Nach dieser Zeitspanne werden alte unvollständige Nutzerkonten gelöscht';
$string['configdeleteunconfirmed'] = 'Wenn Sie die Authentifikation per E-Mail verwenden, geben Sie hier den Zeitraum an, innerhalb dessen die Nutzer/innen ihre Registrierung bestätigen müssen. Unbestätigte Zugänge verfallen und werden gelöscht.';
$string['configdenyemailaddresses'] = 'Um E-Mail-Adressen mit bestimmten Domains zu sperren, werden die Domainnamen hier in diese Liste eingetragen. Alle anderen Domains werden akzeptiert. Um Subdomains zu sperren, wird der Domainname mit einem führenden Punkt (.) angegeben. <strong>hotmail.de yahoo.co.uk .live.com</strong>.';
$string['configdigestmailtime'] = 'Personen, die E-Mails als Zusammenfassung (Digest) eingerichtet haben, erhalten diese Zusammenfassung einmal täglich zu dem hier festgelegten Zeitpunkt zugesandt, und zwar bei der auf diesen Zeitpunkt folgenden Ausführung des Scripts cron.php.';
$string['configdisableuserimages'] = 'Diese Einstellung verbietet die Möglichkeit, dass Nutzer/innen ihre Profilbilder ändern können.';
$string['configdisplayloginfailures'] = 'Anzeige von Informationen über frühere gescheiterte Logins der ausgewählten Nutzer/innen.';
$string['configdocroot'] = 'Diese Angabe legt den Pfad zur Moodle-Dokumentation fest. Eine Änderung des Pfades kann sinnvoll sein, um eine eigene angepasste Dokumentation zu nutzen. In diesem Fall muss allerdings sichergestellt sein, dass die gleiche Pfadstruktur wie bei http://docs.moodle.org verwendet wird.';
$string['configdoctonewwindow'] = 'Wenn diese Option aktiviert ist, werden alle Links zur Moodle-Dokumentation in einem neuen Fenster angezeigt';
$string['configeditordictionary'] = 'Dieser Wert wird verwendet, wenn aspell kein Wörterbuch für die nutzergewählte Sprache hat.';
$string['configeditorfontlist'] = 'Zeichensätze auswählen, die im Editormenü erscheinen sollen';
$string['configemailchangeconfirmation'] = 'Wenn Nutzer/innen in ihrem Profil die E-Mail-Adresse ändern, dann ist eine E-Mail-Bestätigung notwendig';
$string['configenableajax'] = 'Diese Einstellung erlaubt es Ihnen, die Benutzung von Ajax über die gesamte Website zu kontrollieren. Ajax ist eine auf JavaScript basierende Erweiterung der Client-Server-Schnittstelle.  Falls diese Einstellung aktiviert ist, kann Ajax individuell in jedem Nutzerprofil ein- oder ausgeschaltet werden, andernfalls ist Ajax für alle ausgeschaltet.';
$string['configenablecalendarexport'] = 'Exportieren oder Abonnieren von Kalendern erlauben';
$string['configenablecomments'] = 'Kommentare aktivieren';
$string['configenablecourserequests'] = 'Diese Option erlaubt es allen Nutzer/innen, Anfragen zur Einrichtung von Kursen zu stellen.';
$string['configenableglobalsearch'] = 'Diese Einstellung erlaubt die globale Textsuche in Ressourcen und Aktivitäten. Dies ist nicht kompatibel zu PHP4.';
$string['configenablegroupmembersonly'] = 'Die Einstellung aktiviert die Funktion \'nur für Gruppenmitglieder verfügbar\'. Die Funktion wirkt sich auf die Serverbelastung aus. Sie ist erforderlich, um einige erweiterte Optionen im Bewertungsbereich zu verwenden. Bewertungskategorien müssen so eingerichtet werden, dass diese Aktivitäten für Nichtmitglieder der Gruppen auch dort unsichtbar bleiben.';
$string['configenablehtmlpurifier'] = 'Zur Bereinigung von nicht vertrauenswürdigen Texten wird HTML Purifier anstatt KSES benutzt. HTML Purifier wird aktuell entwickelt und scheint sicherer zu sein, benötigt aber mehr Serverresourcen. Es könnten geringe Unterschiede in der Darstellung des gefilterten HTML-Codes auftreten. Bitte berücksichtigen Sie, dass EMBED/OBJECT- Tags nicht erlaubt werden können. Weiter werden MathML- und alte LANG-Tags nicht unterstützt.';
$string['configenablerssfeeds'] = 'Diese Option aktiviert RSS-Feeds für die gesamte Website. Zusätzlich ist erforderlich, die RSS-Feeds in den einzelnen Modulen zu aktivieren. Öffnen Sie dazu in der Administration die Moduleinstellungen.';
$string['configenablerssfeedsdisabled'] = 'Diese Option ist nicht verfügbar, weil RSS Feeds für alle Seiten deaktiviert sind. Um diese zu aktivieren, öffnen Sie die Variableneinstellung in der Administration.';
$string['configenablerssfeedsdisabled2'] = 'RSS Feeds sind auf Serverebene deaktiviert. Sie müssen zuerst unter Server/RSS aktiviert werden.';
$string['configenablesafebrowserintegration'] = 'Diese Einstellung fügt in den Testeinstellungen die Auswahl \'Nutzung des Safe Exam Browser erforderlich\' hinzu. Weitere Informationen:  http://www.safeexambrowser.org';
$string['configenablestats'] = 'Wenn diese Option aktiviert ist, werden per Cronjob die Logdaten verarbeitet und Statistiken erstellt. Je nach Serverlast könnte der Vorgang einige Zeit dauern. Die Funktion erstellt Datenlisten und Graphen für Kurse und die gesamte Website.';
$string['configenabletrusttext'] = 'Normalerweise bereinigt Moodle grundsätzlich alle Texte, die von Nutzer/innen eingegeben werden, und entfernt damit mögliche Skripte und Media-Dateien, die ein Sicherheitsrisiko darstellen könnten. Das Trusted-Content-System ist ein Weg, bestimmten Nutzer/innen die Möglichkeit zu geben, erweiterte Inhalte auch ohne Filterung in ihren Beiträgen zu benutzen. Um dieses System zu aktivieren, müssen Sie zuerst diese Option zulassen, danach gewähren Sie das Trusted-Content-Recht in der betreffenden Moodle-Rollenbeschreibung. Texte, die von den betreffenden Nutzer/innen geschrieben oder hochgeladen werden, werden als vertrauenswürdig markiert und vor der Anzeige nicht gefiltert.';
$string['configenablewebservices'] = 'Diese Option aktiviert Webservices, über die sich andere Systeme in diesem Moodle anmelden und Operationen ausführen können. Sicherheitshalber sollte diese Option deaktiviert sein, wenn Sie keine Webservices verwenden.';
$string['configenablewsdocumentation'] = 'Mit dieser Option wird die automatische Erstellung einer Dokumentation zu den Webservices aktiviert. Webservice-Nutzer können auf ihre eigene Dokumentation für die Sicherheitsschlüssel \'{$a}\' zugreifen. Es werden ausschließlich die aktivierten Protokolle angezeigt.';
$string['configerrorlevel'] = 'Wählen Sie die Menge der PHP-Warnungen, die angezeigt werden sollen. \'Normal\' ist meist eine gute Wahl.';
$string['configexcludeoldflashclients'] = 'Einige Plugin-Versionen des Adobe FlashPlayers sind mit bösartigen Flash-Inhalten angreifbar. Sie können hier eine minimale Version angeben, damit Moodle bei Zugriffen mit niedrigeren Plugin-Versionen keine Flash-Inhalte ausliefert. Stattdessen wird eine alternative Flash-Datei angezeigt, die zur Aktualisierung auffordert. Um die Prüfung zu deaktivieren, lassen Sie dieses Feld einfach leer.';
$string['configextendedusernamechars'] = 'Aktivieren Sie diese Einstellung, damit beliebige Zeichen im Anmeldenamen zulässig werden (Anmerkung: Dies beeinflusst nicht bereits vorhandene Namen). In der Grundeinstellung \'Nein\' sind nur alphanumerische Zeichen (sowie (_)Unterstrich, (-) Bindestrich, (.) Punkt oder das (@) at-Symbol erlaubt. Falls Sie \'Ja\' auswählen, könnten bestimmte Sonderzeichen (z.B. deutsche Umlaute) Probleme verursachen!';
$string['configextramemorylimit'] = 'Einige Skripte wie Suche, Sicherung, Wiederherstellung oder Cron erfordern mehr Arbeitsspeicher. Tragen Sie höhere Werte für große Websites ein.';
$string['configextrauserselectorfields'] = 'Bei der Nutzerauswahl, z.B. bei einer Rollen- oder Gruppenzuweisung, werden diese Felder in der Nutzerliste durchsuchbar angezeigt. Vom Sicherheitsaspekt her ist die Abwahl des Nutzernamens nicht empfohlen.';
$string['configfilterall'] = 'Filter über alle Begriffe (inkl. aller Überschriften, Titel, Navigationselemente usw.). Im Zusammenhang mit dem Filter "Mehrsprachiger Inhalt" könnte eine Aktivierung nützlich sein, aber den Server stark belasten und zur Reduzierung der Arbeitsgeschwindigkeit führen.';
$string['configfiltermatchoneperpage'] = 'Der Filter für die automatische Verlinkung soll nur das erste Vorkommen eines Begriffes auf einer Seite verlinken. Wiederholt auf einer Seite auftretende Begriffe werden nur einmal verlinkt.';
$string['configfiltermatchonepertext'] = 'Der Filter für die automatische Verlinkung soll nur das erste Vorkommen eines Begriffes in jedem Abschnitt auf einer Seite (z.B. Block) verlinken. Wiederholt auftretende Begriffe werden nur einmal verlinkt. Diese Einstellung wird ignoriert, wenn die Einstellung \'configfiltermatchoneperpage\' aktiv ist.';
$string['configfilteruploadedfiles'] = 'Beim Aktivieren dieser Option werden alle hochgeladenen HTML- und Textdateien über den Filter bearbeitet, bevor sie angezeigt werden.';
$string['configforcelogin'] = 'Normalerweise können die Startseite und die Kursübersicht (nicht jedoch die Kurse) angezeigt werden, ohne dass man angemeldet ist. Aktivieren Sie diese Option, wenn eine Anmeldung zwingend sein soll, um IRGENDETWAS auf der Website sehen zu können.';
$string['configforceloginforprofiles'] = 'Wenn diese Option aktiviert ist, werden die Nutzerprofile nur für angemeldete Personen angezeigt (nicht für Gäste). Die Grundeinstellung "Ja" schützt die Nutzerprofile vor externen Zugriffen (speziell vor Suchmaschinen). Wenn Sie die Funktion ausschalten, sind die in den persönlichen Nutzerprofilen hinterlegten Beschreibungen weltweit sichtbar. Nutzer/innen könnten das Beschreibungsfeld missbrauchen, um anstößige Inhalte oder Werbung (Spam) zu veröffentlichen.';
$string['configframename'] = 'Falls Sie Moodle innerhalb eines Frames einbinden, tragen Sie hier den Namen des Frames ein. Andernfalls sollte dieser Wert auf \'_top\' stehen.';
$string['configfrontpage'] = 'Die ausgewählten Elemente werden auf der Startseite angezeigt.';
$string['configfrontpageloggedin'] = 'Die ausgewählten Elemente werden auf der Startseite angezeigt, wenn Nutzer/innen angemeldet sind.';
$string['configfullnamedisplay'] = 'Hier können Sie festlegen, wie die Langform der Namen angezeigt wird. In den meisten Fällen ist die Grundeinstellung "Vorname + Nachname" geeignet, wobei Sie auch die Vor- oder die Nachnamen ausblenden können, falls Sie dies wünschen.';
$string['configgdversion'] = 'Dies zeigt die installierte Version von GD an (GD ist eine Funktion zur Bilddarstellung). Die angezeigte Version wurde automatisch ermittelt. Ändern Sie diese nicht, es sei denn, Sie wissen wirklich, was Sie tun.';
$string['configgeoipfile'] = 'Die GeoIP-Ortsdaten sind kein fester Bestandteil von Moodle und müssen separat von <a href="http://www.maxmind.com/"> MaxMind </a> bezogen werden. Die GeoIP-Ortsdaten gibt es als kommerzielle Version oder als freie Version. Die freie Version können Sie unter <a href="http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz"> http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz </a> herunterladen und ins Verzeichnis \'{$a}\' auf Ihrem Server entpacken.';
$string['configgetremoteaddrconf'] = 'Wenn Ihr Server hinter einem Reverse Proxy steht, können sie mit diesen Einträgen festlegen, welche HTTP-Header vertraut wird, dass sie die Remote-IP Adresse enthalten. Die Header werden in der angegebenen Reihenfolge ausgelesen. Die erste verfügbare wird verwandt.';
$string['configgooglemapkey'] = 'Sie müssen einen speziellen Schlüssel eingeben, um Google Maps zur geografischen Darstellung der IP-Adressen benutzen zu können. Sie können den Schlüssel kostenfrei beziehen, und zwar über die Seite <a href="http://code.google.com/apis/maps/signup.html"> http://code.google.com/apis/maps/signup.html </a>. <br />Ihre eigene Adresse lautet: {$a}';
$string['configgradebookroles'] = 'Diese Einstellung erlaubt Ihnen die Kontrolle, wer in den Bewertungen erscheint. Teilnehmer/innen müssen zuerst eine der Rollen in einem Kurs einnehmen, bevor sie in den Bewertungen dieses Kurses angezeigt werden.';
$string['configgradeexport'] = 'Wählen Sie ein bevorzugtes Exportformat für die Bewertungen aus. Das gewählte Plugin wird dann das Feld "zuletzt exportiert" in jeder Bewertung setzen und benutzen. Dies wird beispielsweise die exportierten Daten als "neu" oder "geändert" markieren. Wenn Sie nicht sicher sind, wählen Sie nichts aus.';
$string['confighiddenuserfields'] = 'Markieren Sie die Felder, deren Inhalte vor anderen Nutzer/innen, nicht aber vor Trainer/innen und Administrator/innen verborgen werden sollen. Dies erhöht den Datenschutz. Mit gedrückter strg/cmd-Taste können Sie auch mehrere Felder markieren.';
$string['configidnumber'] = 'Diese Option legt fest, ob (a) nicht nach einer ID-Nummer gefragt wird, (b) zwar nach einer ID-Nummer gefragt wird, aber das Feld leer bleiben kann oder (c) nach einer zwingenden Eingabe einer ID-Nummer gefragt wird. Eine eingegebene ID-Nummer wird im Nutzerprofil angezeigt.';
$string['configintcachemax'] = 'Nur bei aktiviertem internem Cache: Maximalzahl der Blöcke, die im Speicher gehalten werden sollen (empfohlen 50). Benutzen Sie kleinere Werte, um die Speicherauslastung zu reduzieren.';
$string['configintro'] = 'Auf dieser Seite können Sie zahlreiche Variablen konfigurieren, die Einstellungen von Moodle auf dem Server beeinflussen. Überlegen Sie nicht zu lange - die Standard-Einstellungen funktionieren normalerweise sehr gut. Sie können jederzeit später alle Einstellungen ändern.';
$string['configintroadmin'] = 'Sie müssen den Hauptadministrator einrichten, der die vollständige Kontrolle über die Website hat. Achten Sie darauf, unbedingt einen sicheren Anmeldenamen, ein sicheres Kennwort sowie eine gültige E-Mail-Adresse anzugeben. Weitere Administrator/innen können Sie später festlegen.';
$string['configintrosite'] = 'Diese Seite erlaubt es Ihnen, die Startseite und den Namen der Webseite festzulegen. Sie können die Einstellungen später jederzeit bearbeiten.';
$string['configintrotimezones'] = 'Diese Zeitzonen-Einstellungen inkl. aller Sommerzeit-Regelungen werden aktualisiert: {$a} Der Vorgang arbeitet normalerweise zuverlässig. Möchten Sie die Zeitzonen aktualisieren?';
$string['configiplookup'] = 'Wenn Sie auf eine IP-Adresse (z.B. 123.45.67.98) in den Logdaten klicken, dann sollten Sie auf einer Übersicht den Ort gezeigt bekommen, von wo aus der Zugriff erfolgte. Es existieren für diese Aufgabe unterschiedliche Module, aber jedes hat spezifische Vor- und Nachteile.';
$string['configjabberhost'] = 'Jabber Server zum Versenden von Benachrichtigungen';
$string['configjabberpassword'] = 'Kennwort für die Verbindung mit dem Jabber Server';
$string['configjabberport'] = 'Port für die Verbindung mit dem Jabber Server';
$string['configjabberserver'] = 'XMPP Server-ID (leer, falls identisch mit Jabber Server)';
$string['configjabberusername'] = 'Anmeldename für die Verbindung mit dem Jabber Server';
$string['configkeeptagnamecase'] = 'Diese Option legt fest, dass die ursprüngliche Schreibweise von Schlagwörtern erhalten bleibt, wie sie von den Nutzer/innen eingegeben wurden.';
$string['configlang'] = 'Die Standardsprache wird für die gesamte Website festgelegt. Alle Personen können ihre eigene Sprache über das Sprachmenü wählen oder in ihrem persönlichen Profil anpassen.';
$string['configlangdir'] = 'In vielen Sprachen wird von links nach rechts geschrieben, aber in manchen aber auch von rechts nach links, z.B. Arabisch oder Hebräisch.';
$string['configlanglist'] = 'Wenn das Feld leer ist, können alle  installierten Sprachen ausgewählt werden. Die Einträge im Sprachmenü können über eine Liste von Sprachcodes festgelegt werden (Komma getrennt, z.B. de,en,es_es,fr,it)';
$string['configlangmenu'] = 'Diese Option legt fest, ob Sie das Sprachmenü auf der Startseite und auf der Anmeldungsseite angezeigt wird. Dies schränkt nicht die Möglichkeit, dass alle ihre bevorzugte Sprache im Nutzerprofil einstellen können.';
$string['configlangstringcache'] = 'Alle Texte des Sprachpakets sind zur Leistungsoptimierung zwischengespeichert. Wenn Sie Texte lokal ändern, müssen Sie die Zwischenspeicherung deaktivieren, um die Änderungen sofort wirksam zu machen. Normalerweise sollte die Option aber aktiviert sein.';
$string['configlatinexcelexport'] = 'Wählen Sie die Kodierung für die Excel-Exporte.';
$string['configlocale'] = 'Wählen Sie eine Einstellung für \'locale\', die für die gesamte Website gelten soll - dies wird die Anzeige der deutschen Umlaute und jedes Datums beeinflussen. Die für die Einstellung notwendigen Dateien müssen auf Ihrem Server installiert sein. Für ein deutschsprachiges System wird z.B. de_DE.UTF-8 eingetragen. Normalerweise sollte das Feld leer bleiben können.';
$string['configloginhttps'] = 'Wenn Sie diese Einstellung aktivieren, wird eine sichere HTTPS-Verbindung für den Anmeldevorgang  genutzt. Danach wird eine normale HTTP-Verbindung verwendet.
<br />ACHTUNG: Die Einstellung erfordert eine gesonderte Aktivierung von HTTPS auf dem Server. Wenn diese Aktivierung NICHT besteht, können Sie sich selbst vom Zugriff zur Website ausschließen!!!';
$string['configloglifetime'] = 'Die angegebene Zeitdauer gibt an, für welchen Zeitraum die Logdaten der Nutzeraktivitäten gespeichert werden. Ältere Logdaten werden automatisch gelöscht. Speichern Sie die Logdaten nur so lange, wie sie unbedingt benötigt werden. Wenn Sie bei Ihrem Server Leistungseinbrüche feststellen, sollten Sie den Zeitraum reduzieren. Werte kleiner als 30 werden nicht empfohlen, weil dann die Statistiken nicht mehr richtig arbeiten können.';
$string['configlookahead'] = 'Tage in der Vorausschau';
$string['configmailnewline'] = 'Zeichen für Zeilenschaltung in E-Mails. CRLF ist erfordelich für RFC 822bis. Manche Mailserver konvertieren LF automatisch in CRLF. Andere Mailserver wandeln CRLF falsch in CRCRLF um, wieder andere weisen E-Mails mit reinem LF zurück (z.B. qmail). Probieren Sie unterschiedliche Einstellungen aus, falls Probleme mit der Mailzustellung auftreten oder doppelte Zeilenschaltungen angezeigt werden.';
$string['configmaxbytes'] = 'Dieser Wert legt für die gesamte Website die maximale Dateigröße zum Hochladen fest. Der Eintrag wird seinerseits eingeschränkt durch die PHP-Einstellung \'post_max_size\' und \'upload_max_filesize\' sowie die Apache-Einstellung \'LimitRequestBody\'.

Die Einstellung \'Servermaximum\' setzt für Moodle den größten Wert, den der Server zulässt. Möchten Sie die maximal wählbare Dateigröße auf Kurs- oder Modulebene einschränken, wählen Sie hier einen entsprechend kleineren Wert aus.';
$string['configmaxconsecutiveidentchars'] = 'Kennwörter dürfen maximal diese Zahl aufeinanderfolgender gleicher Zeichen haben. Der Wert \'0\' deaktiviert die Prüfung.';
$string['configmaxeditingtime'] = 'Hiermit bestimmen Sie die Zeitdauer, in der Beiträge in Foren, Glossaren bearbeitet werden dürfen. Normalerweise sind 30 Minuten ein guter Wert.';
$string['configmaxevents'] = 'Ereignisse in der Vorausschau';
$string['configmemcachedhosts'] = 'Für memcached: Kommagetrennte Liste der Hosts, auf denen der memcached Dämon läuft. Verwenden Sie IP-Adressen, um DNS-Wartezeiten zu vermeiden. memcached verhält sich nicht korrekt, wenn Sie diese Einstellung im laufenden Betrieb vornehmen oder ändern.';
$string['configmemcachedpconn'] = 'Für memcached: Verwenden Sie feste Verbindungen. Vorsicht: Unsachgemäße Einstellungen können beim Neustart des memcached Dämons zum Absturz von Apache/PHP führen.';
$string['configmessaging'] = 'Diese Option aktiviert das Mitteilungssystem systemweit, d.h. für alle Kurse und für alle Nutzer/innen.';
$string['configmessagingdeletereadnotificationsdelay'] = 'Gelesene Mitteilungen können gelöscht werden, um Platz zu sparen. Diese Einstellung legt die Zeitdauer fest, nach der eine Mitteilung gelöscht wird.';
$string['configmessaginghidereadnotifications'] = 'Gelesene Mitteilungen über Ereignisse (z.B. neue Forumsbeiträge) verbergen';
$string['configminpassworddigits'] = 'Kennwörter müssen mindestens die angegebene Zahl von Ziffern enthalten.';
$string['configminpasswordlength'] = 'Kennwörter müssen mindestens die angegebene Zahl von Zeichen enthalten.';
$string['configminpasswordlower'] = 'Kennwörter müssen mindestens die angegebene Zahl von Kleinbuchstaben enthalten.';
$string['configminpasswordnonalphanum'] = 'Kennwörter müssen mindestens die angegebene Zahl von Sonderzeichen enthalten.';
$string['configminpasswordupper'] = 'Kennwörter müssen mindestens die angegebene Zahl von Großbuchstaben enthalten.';
$string['configmycoursesperpage'] = 'Maximale Zahl der gezeigten Kurse in Übersicht \'Meine Kurse\'';
$string['configmymoodleredirect'] = 'Die Einstellung führt Personen (außer Admins) beim Anmelden automatisch auf \'Meine Startseite\'. Auch die Navigation zur Startseite entsprechend verändert.';
$string['configmypagelocked'] = 'Diese Option schützt die standardmäßig gezeigte Seite vor Änderungen durch Nicht-Admins';
$string['confignavcourselimit'] = 'Die Zahl legt die Anzahl der maximal in der Navigation angezeigten Kurse fest, falls Nutzer/innen nicht eingeloggt oder noch in keinem Kurs eingetragen sind ';
$string['confignavshowallcourses'] = 'Mit dieser Option werden immer alle Kurse der Website in der Navigation angezeigt. Standardmäßig werden nur Kurse angezeigt, die bereits angesehen wurden.';
$string['confignavshowcategories'] = 'Kursbereiche in Navigationsleiste und Navigationsblöcken anzeigen. Diese Einstellung wirkt sich nicht auf die Anzeige der eingeschriebenen Kurse im Bereich \'Meine Kurse\' aus, wo die Kurse immer ohne Kursbereiche gelistet werden.';
$string['confignoreplyaddress'] = 'Tragen Sie hier die E-Mail-Adresse ein, die als Absender beim Versand von Nachrichten (z.B. aus Foren) genutzt werden soll, wenn die E-Mail-Adresse des Absenders nicht für Rückantworten genutzt werden kann.';
$string['confignotifyloginfailures'] = 'E-Mail-Mitteilungen können versandt werden, wenn Login-Fehler aufgezeichnet wurden. Wer soll diese Mitteilungen lesen können?';
$string['confignotifyloginthreshold'] = 'Nach wie vielen erfolglosen Anmeldeversuchen hintereinander für ein Nutzerkonto oder über eine IP-Adresse soll eine Mitteilung gesendet werden?';
$string['confignotloggedinroleid'] = 'Nicht auf der Website eingeloggte Nutzer/innen werden behandelt, als ob sie diese Rolle hätten. Die Rolle \'Gast\' ist in der Regel brauchbar. Sie können aber auch neue Rollen erstellen, die mehr oder weniger Einschränkungen vornehmen. Viele Aktivitäten, z.B. Beiträge schreiben oder Tests durchführen, erfordern aber immer eine richtige Anmeldung.';
$string['configopentogoogle'] = 'Wenn diese Option aktiviert ist, kann Google Ihre Website als Gast besuchen. Außerdem wird jeder automatisch als Gast eingeloggt, der über die Google-Suche auf Ihre Website kommt. Dies gilt natürlich ausschließlich für Kurse, die einen Gastzugang (ohne Gastschlüssel) zulassen.';
$string['configoverride'] = 'In der config.php festgelegt';
$string['configpasswordpolicy'] = 'Diese Option legt fest, dass die Kennwörter hinsichtlich der Kennwortregeln überprüft werden. Nutzen Sie die nachfolgenden Parameter, um die Kennwortregeln anzupassen. Die Parameter werden ignoriert, falls Sie hier "Nein" setzen.';
$string['configpathtoclam'] = 'Pfad für ClamAV, meistens /usr/bin/clamscan oder user/bin/clamdscan. Die Einstellung ist erforderlich, damit ClamAV starten kann.';
$string['configpathtodu'] = 'Pfad für du, meistens /usr/bin/du. Mit dieser Option werden Seiten mit Verzeichnissen und vielen Dateien schneller angezeigt.';
$string['configperfdebug'] = 'Nach der Aktivierung der Option wird eine Performance-Information in der Fußzeile des Standardthemes angezeigt.';
$string['configprofileroles'] = 'Liste der Rollen, die in Nutzerprofilen und auf der Teilnehmerseite sichtbar sind';
$string['configprofilesforenrolledusersonly'] = 'Um eine unerwünschte Nutzung durch Spammer zu vermeiden, sind die Profilbeschreibungen von Nutzer/innen ohne vorhandene Kurseinschreibung gesperrt. Neue Nutzer/innen müssen sich in mindestens einem Kurs eingeschrieben haben, um eine Profilbeschreibung hinzufügen zu können.';
$string['configprotectusernames'] = 'Standardmäßig werden keine Hinweise für vergessene Anmeldenamen und Kennwörter angezeigt.';
$string['configproxybypass'] = 'Liste von Servernamen oder IP-Adressen (auch Teile davon), die ohne Proxy geladen werden (Komma getrennt, z.B. 192.168., .meineseite.de)';
$string['configproxyhost'] = 'Wenn dieser <b>Moodle-Server</b> einen Proxy für den Internetzugriff (z.B. eine Firewall) benötigt, dann tragen Sie hier den Namen und den Port des Proxys ein. Andernfalls lassen Sie das Feld leer.';
$string['configproxypassword'] = 'Für den Internetzugang ist eventuell ein Kennwort nötig. Lassen Sie das Feld leer, falls der Proxy kein Kennwort verlangt. Die PHP-Extension cURL ist notwendig!';
$string['configproxyport'] = 'Falls dieser Server einen Proxy benutzt, geben Sie hier bitte den Proxy-Port an.';
$string['configproxytype'] = 'Typ des Web-Proxys. Für die Unterstützung von SOCKS5 ist PHP5 und die PHP-Extension cURL notwendig!';
$string['configproxyuser'] = 'Für den Internet-Zugriff muss eventuell ein Anmeldename eingegeben werden. Lassen Sie das Feld leer, falls der Proxy keinen Anmeldenamen verlangt. Die PHP-Extension cURL ist notwendig!';
$string['configquarantinedir'] = 'Wenn ClamAV infizierte Dateien in ein Quarantäne-Verzeichnis verschieben soll, definieren Sie hier dieses Verzeichnis. Es benötigt Schreibrechte für den Server. Wenn Sie den Eintrag leer lassen, das Verzeichnis ungültig ist oder nicht beschrieben werden kann, werden infizierte Dateien gelöscht. Tragen Sie keinen Slash am Ende ein.';
$string['configrcache'] = 'Der Cache-Speicher wird benutzt, um Datenbankeinträge zwischenzuspeichern. Achten Sie darauf, auch den Cache-Typ zu setzen!';
$string['configrcachettl'] = 'Gültigkeitsdauer für zwischengespeicherte Inhalte (in Sekunden). Wählen Sie hier einen Wert kleiner als 15.';
$string['configrecaptchaprivatekey'] = 'Dieser Code dient der Kommunikation zwischen Moodle und dem Recaptcha-Server.  Sie erhalten den Code unter <a href="http://www.google.com/recaptcha/" target="_blank">http://www.google.com/recaptcha/</a>.';
$string['configrecaptchapublickey'] = 'Der Code dient zur Anzeige des Recaptcha-Elements bei der Nutzerregistrierung, generiert über <a href="http://www.google.com/recaptcha/" target="_blank">http://www.google.com/recaptcha/</a>.';
$string['configrequestedstudentname'] = 'Begriff für Teilnehmer/in in beantragten Kursen';
$string['configrequestedstudentsname'] = 'Begriff für Teilnehmer/innen in beantragten Kursen';
$string['configrequestedteachername'] = 'Begriff für Trainer/in in beantragten Kursen';
$string['configrequestedteachersname'] = 'Begriff für Trainer/innen in beantragten Kursen';
$string['configrequiremodintro'] = 'Deaktivieren Sie diese Option, wenn die Eingabe von Beschreibungen für die Aktivität nicht verpflichtend sein soll.';
$string['configrestrictbydefault'] = 'Soll bei neu angelegten Kursen dieser Kategorie die Nutzung der Module als Voreinstellung eingeschränkt werden?';
$string['configrestrictmodulesfor'] = 'Welche Kurse sollen die Einstellung zum Deaktivieren von Lernaktivitäten haben? Beachten Sie, dass diese Einstellung nur Trainer/innen betrifft. Administrator/innen dürfen weiterhin alle Aktivitäten zu einem Kurs hinzufügen.';
$string['configrunclamavonupload'] = 'Wenn dies aktiviert ist, dann wird ClamAV benutzt, um alle hochgeladenen Dateien auf Viren zu untersuchen.';
$string['configrunclamonupload'] = 'ClamAV für hochgeladene Dateien nutzen? Sie müssen zusätzlich einen Pfad zu ClamAV in pathtoclam eintragen. ClamAV ist ein freier Virenscanner (http.//www.clamav.net).';
$string['configsectioninterface'] = 'Gestaltung';
$string['configsectionmail'] = 'E-Mail';
$string['configsectionmaintenance'] = 'Wartung';
$string['configsectionmisc'] = 'Verschiedenes';
$string['configsectionoperatingsystem'] = 'Arbeitsweise';
$string['configsectionpermissions'] = 'Rechte ändern';
$string['configsectionrequestedcourse'] = 'Kursanträge';
$string['configsectionsecurity'] = 'Sicherheit';
$string['configsectionstats'] = 'Statistiken';
$string['configsectionuser'] = 'Nutzer/in';
$string['configsecureforms'] = 'Moodle kann eine erhöhte Sicherheitsstufe für Daten aus Web-Formularen nutzen. Sofern dies eingeschaltet ist, wird die Variable HTTP_REFERER gegen die Adresse des aktuellen Formulars geprüft.
In einigen wenigen Fällen kann das Probleme verursachen, wenn der Nutzer eine Firewall benutzt (z.B. Zonealarm), die so konfiguriert ist, dass der HTTP_REFERER nicht mitgesendet wird.
Das Ergebnis ist, dass Sie bei einem Formular nicht weiterkommen.
Sofern Nutzer/innen z.B. Probleme mit der Zugangsseite haben, sollten Sie diese Einstellung deaktivieren - allerdings ist Ihre Seite so offener für Brute-Force-Attacken. Im Zweifelsfall belassen Sie es bei \'Ja\'.';
$string['configsessioncookie'] = 'Diese Einstellung beeinflusst die Namen der Cookies, die für Moodle-Zugriffe benutzt werden. Dieser Eintrag ist sinnvoll, um die Überlagerung der Cookies zu verhindern, wenn mehrere Moodle-Systeme auf der gleichen Website installiert sind.';
$string['configsessioncookiedomain'] = 'Diese Einstellung erlaubt es Ihnen, die Domain zu verändern, von der Moodle-Cookies benutzbar sind. Dies ist nützlich für Moodle-Anpassungen (z.B. Plugins zur Authentifikation oder zum Einschreiben), die Informationen bezüglich der Moodle-Session mit Programmen auf einer anderen Subdomain teilen müssen.<br /><strong>ACHTUNG: Es wird dringend empfohlen, diese Einstellung leer zu lassen und nicht zu verändern - ein falscher Wert könnte dazu führen, dass alle Logins auf diese Website zurückgewiesen werden!! </strong>';
$string['configsessioncookiepath'] = 'Es könnte notwendig sein, ein Ziel für die Rücksendung von Moodle-Cookies anzugeben. Dafür können Sie hier ein Unterverzeichnis Ihrer Website definieren. Andernfalls sollte die Grundeinstellung \'/\' ausreichend sein.';
$string['configsessiontimeout'] = 'Wenn angemeldete Nutzer/innen länger keine Aktionen ausführen (z.B. keine Seiten laden), werden sie automatisch abgemeldet. Diese Variable legt die betreffende Zeitspanne fest.';
$string['configshowcommentscount'] = 'Kommentarzähler anzeigen, danach kostet es nur eine weitere Anfrage, um die Kommentarlinks zu zeigen';
$string['configshowsiteparticipantslist'] = 'Alle Teilnehmer/innen und Trainer/innen der Website werden in der Nutzergesamtliste geführt. Wer soll diese Liste sehen dürfen?';
$string['configsitedefaultlicense'] = 'Standardlizenz';
$string['configsitedefaultlicensehelp'] = 'Die Standardlizenz regelt die Veröffentlichung von Inhalte auf dieser Website';
$string['configsitemailcharset'] = 'Alle E-Mails aus diesem Moodle werden mit dem hier eingetragen Zeichensatz versandt. Wenn Sie die nächste Einstellung aktivieren, können alle Nutzer/innen diese Vorgabe für sich selber ändern.';
$string['configsitemaxcategorydepth'] = 'Maximale Bereichstiefe';
$string['configsitemaxcategorydepthhelp'] = 'Diese Einstellung legt die maximale Tiefe von sichtbaren Kursunterbereichen fest.';
$string['configslasharguments'] = 'Dateien (Bilder, Dokumente usw.) werden über ein Script ausgeliefert und können mit der Aktivierung \'Slash-Parameter benutzen\' besser in Browsern, Proxy-Servern usw. zwischengespeichert werden. Leider erlauben nicht alle PHP-Server diese Methode, so dass Sie die Option deaktivieren müssen, falls Probleme mit Dateiauslieferung oder der Bildanzeige (z.B. bei den Nutzerfotos) auftreten.';
$string['configsmartpix'] = 'Wenn diese Option aktiviert ist, werden Icons durch ein PHP-Skript bereitgestellt, das das aktuelle Design, alle übergeordneten Designs (parent themes) und das /pix Verzeichnis im Moodle-Installationsverzeichnis durchsucht. Damit müssen Grafiken u.U. nicht mehrfach in verschiedenen Designs bereitgestellt werden - zu Lasten geringfügiger Geschwindigkeitseinbußen.';
$string['configsmtphosts'] = 'In diesem Feld können Sie einen oder mehrere SMTP-Server angeben, die Moodle für den E-Mail-Versand benutzen soll (z.B. \'mail.a.de\' oder \'mail.a.de;mail.b.de\'). Um einen Nicht-Standard-Port anzugeben (also nicht Port 25), benutzen Sie die Syntax [server]:[port] (z.B. mail.a.de:587). Wenn Sie dieses Feld frei lassen, verwendet Moodle die Standard-Methode von PHP zum E-Mail-Versand.';
$string['configsmtpmaxbulk'] = 'Maximale Anzahl von Nachrichten pro SMTP-Session. Die Zusammenfassung von E-Mails sollte deren Versand beschleunigen. Mit Werten kleiner als 2 wird für jede E-Mail eine neue SMTP-Session gestartet.';
$string['configsmtpuser'] = 'Falls Sie einen SMTP-Server angegeben haben und dieser Server Zugangsdaten erfordert, geben Sie hier Anmeldenamen und Kennwort an.';
$string['configstartwday'] = 'Beginn der Woche';
$string['configstatsfirstrun'] = 'Die Einstellung legt den Zeitraum fest, um den die auszuwertenden Logdaten zurückliegen dürfen. Wenn Sie sehr viele Aktivitäten in den Kursen haben oder sich einen Server mit anderen Anwendungen teilen, sollten Sie keinen zu langen Zeitraum wählen. Die Auswertung erfordert eine hohe Serverleistung. (Hinweis: für diese Einstellung gilt: 1 Monat = 28 Tage. In der grafischen Auswertung und den Berichten ist 1 Monat = 1 Kalendermonat.)';
$string['configstatsmaxruntime'] = 'Die Berechnung der Statistiken kann sehr viel Rechenleistung erfordern. Verwenden Sie eine Kombination aus diesem Feld und dem nächsten, um festzulegen zu welchem Zeitpunkt und für welchen Zeitraum die Berechnung erfolgen soll.';
$string['configstatsmaxruntime2'] = 'Die Berechnung der Statistiken kann sehr aufwendig sein. Besonders durch die maximal Dauer für Prozesse wird hier eine Begrenzung gesetzt. Mit einem Cron-Job können daher höchstens 31 Tage der Statistik berechnet werden.';
$string['configstatsmaxruntime3'] = 'Die Berechnung der Statistiken kann auf dem Server sehr viel Last erzeugen. Daher können Sie hier festlegen wie viel Zeit täglich dafür höchstens eingesetzt werden soll. Weiter unten legen Sie fest für wie viel Tage innerhalb eines Cron-Job-Durchlaufs die Berechnung der Statistiken erfolgen soll.';
$string['configstatsruntimedays'] = 'Wenn Sie die Statistik-Funktion aktivieren werden für einen zurückliegenden Zeitraum statistische Berechnungen durchgeführt. Damit dadurch die Serverbelastung nicht zu hoch wird, können Sie hier festlegen, dass pro Cron-Job-Durchlauf nur für eine bestimmte Zahl von Tagen die Berechnung erfolgt. Ist die Statistik-Ermittlung auf dem aktuellen Stand erfolgt wird jeweils für einen Tag die Statistik ergänzt';
$string['configstatsruntimestart'] = 'Zu welchem Zeitpunkt soll die Berechnung der Statistiken begonnen werden? Bitte wählen Sie unterschiedliche Zeitpunkte, wenn auf einen physikalischen Server mehrere Moodle-Instanzen laufen.';
$string['configstatsuserthreshold'] = 'Kurse mit einer geringeren Zahl von Nutzer/innen als in diesem Wert angegeben, werden beim Erstellen von Kursstatistiken nicht berücksichtigt.';
$string['configstrictformsrequired'] = 'Wenn diese Option aktiviert ist, wird die alleinige Eingabe eines Leerzeichens oder Zeilenumbruchs in Pflichtfeldern von Formularen verhindert.';
$string['configstripalltitletags'] = 'Wenn diese Option deaktiviert ist, dürfen HTML-Tags in den Aktivitätsnamen verwendet werden, z.B. zur Formatierung.';
$string['configsupportemail'] = 'Diese E-Mail-Adresse wird Nutzer/innen dieser Website per E-Mail gesendet, wenn Sie z.B. ein neues Kennwort anfordern oder selber einen Nutzerzugang anlegen. Wenn das Feld leer bleibt, wird keine E-Mail-Adresse angeboten. Die E-Mail-Adresse wird auch als Absenderadresse dieser Benachrichtigungen benutzt. Fehlt hier der Eintrag, so wird die E-Mail-Adresse des primären Administrators verwendet.';
$string['configsupportname'] = 'Beim Versand von E-Mails an Nutzer wird der hier eingetragene Name als Ansprechpartner für den Support genannt. Dies betrifft z. B. E-Mails beim Anlegen neuer Nutzeraccounts oder dem Anfordern von neuen Kennwörtern.';
$string['configsupportpage'] = 'Tragen Sie hier die Adresse einer Webseite ein, auf der Ihre Nutzer/innen speziell von Ihnen bereitgestellte Hilfeinformationen finden. Geben Sie die Adresse mit einem http:// oder https:// ein. Die Adresse wird bspw. in E-Mails an Nutzer/innen beim Anlegen von Nutzerzugängen oder dem Anfordern von neuen Kennwörtern angezeigt. Wenn Sie keinen Eintrag vornehmen, wird in den E-Mails nichts angezeigt.';
$string['configthemedesignermode'] = 'Aus Performancegründen werden Bilder und CSS-Dateien eines Designs im Browser und auf dem Server zwischengespeichert (gecacht). Schalten Sie diese Option an, wenn Sie neue Designs entwickeln oder optimieren, damit die Daten nicht in den Cache geschrieben werden.  Achtung: Die Aktivierung des Design-Entwickler-Modus wirkt sich negativ auf die Serverleistung aus! Der Theme-Cache kann auch manuell über die Theme-Auswahlseite gelöscht werden.';
$string['configthemelist'] = 'Wenn das Feld leer ist, können alle  installierten Designs ausgewählt werden. Die Einträge im Designmenü können über eine Liste festgelegt werden (Komma getrennt, z.B. formal_white,leatherbound,standard)';
$string['configtimezone'] = 'Diese Option legt die standardmäßige Zeitzone fest und steuert die Zeitanzeige in allen Kursen. Mit der Einstellung \'Serverzeit\' benutzt Moodle die Zeit des Internetservers. Wenn Nutzer/innen in ihrem Nutzerprofil als Zeitzone \'Serverzeit\' auswählen, wird auf die hier vorgenommenen Einstellung zurückgegriffen. Cronjobs nutzen ebenfalls diese Einstellung.';
$string['configunzip'] = 'Geben Sie hier die Lage (Pfad und Dateiname) des Programms unzip an (nur Unix). Das Programm wird für das Entpacken von ZIP-Archiven auf dem Server benötigt. Wenn Sie dieses Feld leer lassen, benutzt Moodle interne Routinen.';
$string['configuseblogassociations'] = 'Soll es für Nutzer/innen möglich sein, ihre Blogeinträge über die Zuordnung an Kurse und Kursmodule zu organisieren?';
$string['configuseexternalyui'] = 'An Stelle der lokalen Dateien können Dateien von Yahoo-Servern verwendet werden. ACHTUNG: Es ist dann eine Internetverbindung notwendig, damit Ajax mit ihrer Website funktioniert.';
$string['configuserquota'] = 'Maximale Speichergröße, die alle in ihrem privaten Dateibereich speichern dürfen. {$a->bytes} bytes = {$a->displaysize}';
$string['configusetags'] = 'Diese Option aktiviert die Schlagwörter für die gesamte Website. Mit Schlagwörtern lassen sich Dinge kategorisieren.';
$string['configvariables'] = 'Variablen konfigurieren';
$string['configverifychangedemail'] = 'Diese Option aktiviert die Prüfung bei der Änderung von E-Mail-Adressen, ob sie von vorgegebenen oder zurückzuweisenden E-Mail- Domains stammen. Ist die Funktion deaktiviert, erfolgt die Prüfung nur bei der Neuanlage von Nutzerkonten.';
$string['configvisiblecourses'] = 'Kurse werden in verborgenen Kursbereichen normal angezeigt.';
$string['configwarning'] = 'Vorsicht bei der Veränderung dieser Einstellungen! <br />Ungeeignete Werte könnten Probleme verursachen.';
$string['configxmlstrictheaders'] = 'Mit dieser Funktion werden auf jeder Seite  XML http Header und Prologs erstellt. Der Browser zeigt dann XHTML Fehlermeldungen an. Diese Funktion ist nur für Entwickler sinnvoll.';
$string['configyuicomboloading'] = 'Diese Option aktiviert eine Ladeoptimierung für die YUI Libraries. Zur Performance-Steigerung sollte die Einstellung auf Produktivsystemen aktiviert sein.';
$string['configzip'] = 'Geben Sie hier die Lage (Pfad und Dateiname) des Programms zip an (nur Unix). Das Programm wird für die Erstellung ZIP-Archiven auf dem Server benötigt. Wenn Sie dieses Feld leer lassen, benutzt Moodle interne Routinen.';
$string['confirmation'] = 'Bestätigung';
$string['confirmdeletecomments'] = 'Möchten Sie die Kommentare wirklich löschen?';
$string['confirmed'] = 'Bestätigt';
$string['confirminstall'] = 'Sie sind dabei das Sprachpaket ({$a}) zu installieren. Wollen Sie dies fortsetzen?';
$string['convertformat'] = '<i>convert</i> Ausgabeformat';
$string['cookiehttponly'] = 'Nur HTTP-Cookies';
$string['cookiesecure'] = 'Nur sichere Cookies';
$string['country'] = 'Land';
$string['coursecontact'] = 'Kursverwaltung';
$string['coursecontact_desc'] = 'Diese Einstellung legt fest, wer zur Verwaltung eines Kurses angezeigt wird. Wem eine der hier angekreuzten Rollen für den Kurs zugewiesen wurde, dessen Name wird in der Beschreibung aufgelistet.';
$string['coursemgmt'] = 'Verwaltung';
$string['courseoverview'] = 'Kursbeschreibung';
$string['courserequestnotify'] = 'Mitteilung zur Kursanfrage';
$string['courserequestnotifyemail'] = 'Guten Tag,

der Nutzer {$a->user} hat einen neuen Kurs unter {$a->link} angefordert.

Ihr E-Learning-Team';
$string['courserequests'] = 'Kursanfragen';
$string['courserequestspending'] = 'Offene Kursanfragen';
$string['courses'] = 'Kurse';
$string['coursesperpage'] = 'Kurse pro Seite';
$string['creatornewroleid'] = 'Rolle für Kursersteller/in in neuen Kursen';
$string['creatornewroleid_help'] = 'Falls ein/e Nutzer/in nicht bereits das Recht besitzt, den neuen Kurs zu verwalten, wird die Person mit dieser Rolle automatisch in den Kurs eingeschrieben.';
$string['cron'] = 'Cron';
$string['cronclionly'] = 'Cron nur über die Befehlszeile ausführen';
$string['cronerrorclionly'] = 'Der Internetzugriff für diese Seite wurde deaktiviert.';
$string['cronerrorpassword'] = 'Sie haben kein gültiges Kennwort angegeben.';
$string['cron_help'] = 'Der Cronjob gewährleistet, dass alle Moodle-Module ihre ausstehenden Aufgaben regelmäßig ausführen, z.B. arbeitet der Versand der Emails aus Moodle-Foren über diesen Mechanismus. Das Script sollte möglichst alle 5 Minuten ausgeführt werden.';
$string['cronremotepassword'] = 'Kennwort für cron';
$string['cronwarning'] = 'Das <a href="cron.php">Cron-Script</a> wurde in den letzten 24 Stunden nicht ausgeführt.';
$string['csvdelimiter'] = 'CSV Trennzeichen';
$string['ctyperecommended'] = 'Die Installation der optionalen Bibliothek ctype wird empfohlen, um die Geschwindigkeit der Website zu steigern. Dies ist besonders wichtig, wenn Sie Sprachen mit anderen als lateinischen Zeichensätzen verwenden.';
$string['ctyperequired'] = 'Die PHP-Extension ctype wird benötigt, um die Geschwindigkeit der Website zu steigern und die Mehrsprachkompatibilität zu anzubieten.';
$string['curlcache'] = 'cURL cache TTL';
$string['curlrecommended'] = 'Die Installation der optionalen Bibliothek cURL wird empfohlen, um die Netzwerk-Funktionalität von Moodle einzuschalten.';
$string['curlrequired'] = 'Die PHP-Extension cURL wird benötigt, um mit den Moodle Repositories zu kommunizieren';
$string['curltimeoutkbitrate'] = 'Bitrate für die Berechnung von curl Timeouts (Kbps)';
$string['curltimeoutkbitrate_help'] = 'Beim Download von Dateien aus dem Internet wird ein Timeout ausgelöst, wenn die Geschwindigkeit zu gering wird. Als Teil der Berechnung wird die Dateigröße wird mit Hilfe von HTTP HEAD-Anfragen bestimmt. 0 deaktiviert alle HEAD-Anfragen.';
$string['customcheck'] = 'Weitere Prüfungen';
$string['custommenu'] = 'Zusätzliches Menü';
$string['custommenuitems'] = 'Einträge im zusätzlichen Menü';
$string['datarootsecurityerror'] = '<p><strong>Sicherheitswarnung!</strong></p><p>Ihr Verzeichnis dataroot liegt an der falschen Stelle auf dem Webserver, so dass sensible Dateien für alle im Internet zugänglich sind. Angreifer könnten dieses Problem ausnutzen, um unauthorisierten administrativen Zugriff auf Ihre Website zu erhalten!</p>
<p>Sie <em>müssen</em> das Verzeichnis dataroot \'{$a}\' an eine andere Stelle bewegen, die nicht in Ihrem öffentlichen Webverzeichnis liegt, und anschließend die Einstellung <code>$CFG->dataroot</code> in der Datei config.php entsprechend anpassen.</p>';
$string['datarootsecuritywarning'] = 'Ihre Einstellungen sind möglicherweise unsicher. Bitte stellen Sie sicher, dass das Verzeichnis dataroot \'{$a}\' nicht direkt aus dem Internet aufrufbar ist.';
$string['dbmigrate'] = 'Moodle-Datenbankmigration';
$string['dbmigrateconnecerror'] = 'Zur ausgewählten Datenbank konnte keine Verbindung hergestellt werden.';
$string['dbmigrateencodingerror'] = 'Die ausgewählte Datenbank verwendet den Zeichensatz {$a} und nicht UNICODE/UTF8.<br />Wählen Sie bitte eine andere Datenbank.';
$string['dbmigratepostgres'] = 'Sie verwenden vermutlich eine PostgreSQL-Datenbank auf dem Server. Um die Migration fortzusetzen, müssen Sie zunächst manuell eine neue Datenbank mit dem "UNICODE" (PostgreSQL 7) oder "UTF8" (PostgreSQL 8) anlegen, um die migrierten Daten zu speichern. Tragen Sie die Verbindungsdaten für die neue Datenbank unten ein:';
$string['dbmigratewarning'] = 'Sie müssen die Moodle-Datenbank sichern, bevor Sie fortfahren. Wenn Sie nicht sicher sind, wie dies gemacht wird, fragen Sie den Systemadmin. Ihr Moodle wird in den Wartungsmodus geschaltet, sobald der Migrationsprozess beginnt.';
$string['dbmigratewarning2'] = '<b>Warnung:  An dieser Stelle beginnt der Migrationprozess der Datenbank. Sind Sie sicher, dass die bestehende Datenbank wirklich gesichert wurde?</b>';
$string['dbmigrationdeprecateddb'] = '<font color="#ff0000">Die Datenbank wurde in eine neue UTF8-Datenbank übertragen. Bitte bearbeiten Sie die Datei config.php und benutzen Sie ab sofort die neue Datenbank für dieses Moodle.</font>';
$string['dbmigrationdupfailed'] = 'Bei der Übertragung der Datenbankinhalte ist ein Problem aufgetreten. Möglicherweise hilft diese Information weiter: <font color="#ff0000"><pre>{$a}</pre></font>';
$string['dbsessions'] = 'Sitzungsinformationen in der Datenbank speichern';
$string['dbtest'] = 'Datenbank-Tests';
$string['debug'] = 'Debug-Mitteilungen';
$string['debugall'] = 'ALLE: Alle PHP-Mitteilungen anzeigen';
$string['debugdeveloper'] = 'DEVELOPER: PHP-Mitteilungen für Entwickler anzeigen';
$string['debugdisplay'] = 'Debug-Mitteilungen anzeigen';
$string['debugging'] = 'Debugging';
$string['debugminimal'] = 'MINIMAL: Nur schwerwiegende Fehler anzeigen';
$string['debugnone'] = 'KEINE: Keine Fehler oder Warnungen anzeigen';
$string['debugnormal'] = 'NORMAL: Fehler, Warnungen und Bemerkungen anzeigen';
$string['debugpageinfo'] = 'Seiteninformation anzeigen';
$string['debugsmtp'] = 'Debug-Mitteilungen zum E-Mail-Versand';
$string['debugstringids'] = 'Herkunft der Texte anzeigen';
$string['debugvalidators'] = 'Prüflinks anzeigen';
$string['defaultallowedmodules'] = 'Standardmäßig erlaubte Module';
$string['defaultcity'] = 'Stadt/Ort';
$string['defaultcity_help'] = 'Wenn Sie in diesem Feld eine Stadt bzw. einen Ort eintragen, wird diese Eingabe als Voreinstellung beim Anlegen neuer Nutzerkonten verwendet.';
$string['defaulthomepage'] = 'Standardmäßige Startseite';
$string['defaultrequestcategory'] = 'Kategorie für beantragte Kurse';
$string['defaultsettinginfo'] = 'Standard: {$a}';
$string['defaultuserroleid'] = 'Rolle für Nutzer/innen';
$string['defaultvalues'] = 'Standardwerte';
$string['deleteerrors'] = 'Fehler löschen';
$string['deletefilterareyousure'] = 'Möchten Sie den Filter \'{$a}\' wirklich löschen?';
$string['deletefilterareyousuremessage'] = 'Möchten Sie den Filter \'{$a}\' wirklich löschen?';
$string['deletefilterfiles'] = 'Alle zum Filter \'{$a->filter}\' gehörenden Daten wurden aus der Datenbank gelöscht. Um das Löschen abzuschließen (und um eine automatische Neuinstallation des Filters zu verhindern), müssen Sie noch das Verzeichnis \'{$a->directory}\' von Ihrem Server entfernen.';
$string['deleteincompleteusers'] = 'Unvollständige Nutzerkonten löschen';
$string['deleteqtypeareyousure'] = 'Sind Sie Sicher, dass Sie den Fragetyp \'{$a}\' löschen möchten?';
$string['deleteqtypeareyousuremessage'] = 'Sie sind dabei, den Fragetyp \'{$a}\' vollständig zu löschen. Sind Sie sicher, dass Sie ihn deinstallieren wollen?';
$string['deleteunconfirmed'] = 'Unbestätigte Nutzerkonten löschen';
$string['deleteuser'] = 'Nutzerkonto löschen';
$string['deletingfilter'] = 'Filter \'{$a}\' löschen';
$string['deletingqtype'] = 'Fragetyp \'{$a}\' löschen';
$string['density'] = 'LaTeX Größe';
$string['denyemailaddresses'] = 'E-Mail-Domains zurückweisen';
$string['development'] = 'Entwicklung';
$string['digestmailtime'] = 'Termin für Foren- Zusammenfassungen';
$string['disableuserimages'] = 'Nutzerbilder deaktivieren';
$string['displayerrorswarning'] = 'Die Aktivierung der PHP-Einstellung <em>display_errors</em> wird für produktive Websites nicht empfohlen, weil einige der Fehlermeldungen sensible Informationen über Ihre Serverkonfiguration preisgeben könnten.';
$string['displayloginfailures'] = 'Login-Fehler sichtbar für';
$string['docroot'] = 'Basisadresse zur Dokumentation';
$string['doctonewwindow'] = 'In neuem Fenster öffnen';
$string['download'] = 'Download';
$string['editennotallowed'] = 'Das Sprachpaket en_utf8 kann nicht über diese Webseite bearbeitet werden - schalten Sie auf en_utf8_local';
$string['edithelpdocs'] = 'Hilfetexte bearbeiten';
$string['editingnoncorelangfile'] = 'Sie versuchen, die Übersetzung zu einen Zusatz-Modul/Plugin zu bearbeiten. Sie dürfen die Übersetzung von Fremdmodulen ausschließlich in Ihrem lokalen Sprachverzeichnis speichern. Anschließend können Sie die übersetzte Sprachdatei in das Sprachverzeichnis des Moduls legen. Senden Sie bitte auch eine Kopie an den Maintainer des Zusatzmoduls.';
$string['editlang'] = 'Bearbeiten';
$string['editorbackgroundcolor'] = 'Hintergrundfarbe';
$string['editordictionary'] = 'Wörterbuch für den Editor';
$string['editorfontfamily'] = 'Zeichensatzart';
$string['editorfontlist'] = 'Zeichensatzliste';
$string['editorfontsize'] = 'Schriftgröße';
$string['editorhidebuttons'] = 'Verborgene Tasten';
$string['editorkillword'] = 'Word-Format-Filter';
$string['editorspelling'] = 'Rechtschreibprüfung für den Editor';
$string['editorspellinghelp'] = 'Diese Einstellung aktiviert bzw. deaktiviert die Rechtschreibprüfung. Wenn sie aktiviert ist, muss <strong>aspell</strong> auf dem Server installiert sein.';
$string['editstrings'] = 'Menütexte bearbeiten';
$string['emailchangeconfirmation'] = 'Bestätigung der E-Mail-Änderung';
$string['emoticonalt'] = 'Alternativtext';
$string['emoticoncomponent'] = 'Komponente';
$string['emoticonimagename'] = 'Bildname';
$string['emoticons'] = 'Emoticons';
$string['emoticons_desc'] = 'Dieses Formular definiert die Emoticons (oder Smileys) für Ihre Website. Um eine Zeile aus der Tabelle zu entfernen, löschen Sie die Werte und speichern Sie das Formular ab. Um ein neues Emoticon hinzuzufügen, füllen Sie die Felder in der letzten leeren Tabellenzeile aus. Um alle Felder auf die Standardwerte zurückzusetzen, klicken Sie auf den entsprechenden Link.

* Text (erforderlich) - Dieser Text wird durch ein Bild des Emoticons ersetzt. Der Text muss mindestens zwei Zeichen lang sein.
* Bildname (erforderlich) - Dateiname des Bildes ohne Erweiterung, inclusive Pfad relativ zum Verzeichnis \'pix\'.
* Komponente (erforderlich) - Komponente, die das Symbol in Moodle bereitstellt.
* Alternativtext (optional) - Der alternative Text kann String-ID und Komponente des Emoticons anzeigen.';
$string['emoticonsreset'] = 'Emoticons auf Standardwerte zurücksetzen';
$string['emoticontext'] = 'Text';
$string['emptysettingvalue'] = 'Leer';
$string['enableajax'] = 'Ajax aktivieren';
$string['enablecalendarexport'] = 'Kalender-Export aktivieren';
$string['enablecomments'] = 'Kommentare aktivieren';
$string['enablecourseajax'] = 'Kursbearbeitung mit Ajax erlauben';
$string['enablecourseajax_desc'] = 'AJAX für die Bearbeitung der Kurshauptseiten erlauben. Beachten Sie, dass das Kursformat und das Kursdesign AJAX unterstützen müssen und dass außerdem AJAX in den entsprechenden Nutzerprofilen aktiviert ist.';
$string['enablecourserequests'] = 'Kursanfragen erlauben';
$string['enableglobalsearch'] = 'Globale Suche aktivieren';
$string['enablegroupmembersonly'] = 'Gruppierungen aktivieren';
$string['enablehtmlpurifier'] = '\'HTML Purifier\' erlauben';
$string['enablerecordcache'] = 'Zwischenspeicherung erlauben';
$string['enablerssfeeds'] = 'RSS Feeds aktivieren';
$string['enablesafebrowserintegration'] = '\'Safe Exam Browser\' vorsehen';
$string['enablestats'] = 'Statistiken aktivieren';
$string['enabletrusttext'] = 'Trusted-Content-System aktivieren';
$string['enablewebservices'] = 'Webservices aktivieren';
$string['enablewsdocumentation'] = 'Dokumentation zu Webservices';
$string['encoding'] = 'Encoding';
$string['enrolinstancedefaults'] = 'Standardeinstellungen zur Einschreibung';
$string['enrolinstancedefaults_desc'] = 'Standardeinstellungen zur Einschreibung in neue Kurse';
$string['enrolmultipleusers'] = 'Nutzer/innen einschreiben';
$string['environment'] = 'Serverkonfiguration';
$string['environmenterrortodo'] = 'Sie müssen zunächst alle Probleme mit der Serverkonfiguration beheben, bevor Sie mit der Installation von Moodle fortfahren können.';
$string['environmenterrorupgrade'] = 'Hinweis: Sie sollten unbedingt die Probleme mit der Serverkonfiguration beheben, bevor Sie mit der Aktualisierung fortfahren. Falls Sie die Aktualisierung trotzdem durchführen und die Anforderungen missachten, könnten Fehler entstehen, eventuell auch Datenverluste. Möchten Sie wirklich weiter fortfahren?';
$string['environmentmustfixsetting'] = 'Die PHP-Einstellung muss geändert werden';
$string['environmentok'] = 'Die Serverkonfiguration entspricht den Anforderungen.';
$string['environmentrecommendcustomcheck'] = 'Wenn dieser Test fehlschlägt, dann ist ein  mögliches Problem vorhanden.';
$string['environmentrecommendinstall'] = 'sollte installiert und aktiviert sein';
$string['environmentrecommendversion'] = 'empfohlen: {$a->needed} - installiert: {$a->current}';
$string['environmentrequirecustomcheck'] = 'Dieser Test muss erfolgreich verlaufen.';
$string['environmentrequireinstall'] = 'muss installiert und aktiviert sein';
$string['environmentrequireversion'] = 'notwendig: {$a->needed} - installiert: {$a->current}';
$string['environmentsettingok'] = 'Empfohlene Einstellung gefunden';
$string['environmentshouldfixsetting'] = 'Die PHP-Einstellung sollte geändert werden';
$string['environmentxmlerror'] = 'Fehler beim Auslesen der Serverkonfiguration ({$a->error_code})';
$string['errordeletingconfig'] = 'Fehler beim Löschen der Konfigurationsdaten für das Plugin \'{$a}\'';
$string['errors'] = 'Fehler';
$string['errorsetting'] = 'Einige Einstellungen konnten nicht gespeichert werden:';
$string['errorwithsettings'] = 'Einige Einstellungen wurden wegen eines Fehlers nicht geändert:';
$string['everyonewhocan'] = 'Alle, die \'{$a}\' können';
$string['exceptions'] = 'Ausnahmen';
$string['excludeoldflashclients'] = 'Benötigte FlashPlayer-Version';
$string['experimental'] = 'Experimentell';
$string['experimentalsettings'] = 'Experimentelle Einstellungen';
$string['extendedusernamechars'] = 'Sonderzeichen in Anmeldenamen';
$string['extramemorylimit'] = 'Eigene PHP-Memory-Begrenzung';
$string['extrauserselectorfields'] = 'Zur Nutzerauswahl suchen und anzeigen';
$string['fatalmagicquotesruntime'] = '<p>Schwerwiegender Konfigurationsfehler - bitte benachrichtigen Sie Ihren Server-Administrator</p> <p>Um ordnungsgemäß zu arbeiten, ist für Moodle eine Änderung in den PHP-Einstellungen notwendig.<br /><code>magic_quotes_runtime=off</code> muss gesetzt sein!<br />Diese Einstellung wird auf den Server geändert, u.z. in der Datei <code>php.ini</code>, in der Apache/IIS Konfiguration oder in der Datei  <code>.htaccess</code>.</p>';
$string['fatalsessionautostart'] = '<p>Schwerwiegender Konfigurationsfehler - bitte benachrichtigen Sie Ihren Server-Administrator</p> <p>Um ordnungsgemäß zu arbeiten, ist für Moodle eine Änderung in den PHP-Einstellungen notwendig.<br /><code> session.auto_start=off</code> muss gesetzt sein!<br />Diese Einstellung wird auf den Server geändert, u.z.  in der Datei <code>php.ini</code>, in der Apache/IIS Konfiguration oder in der Datei  <code>.htaccess</code>.</p>';
$string['filecreated'] = 'Neue Datei angelegt';
$string['filestoredin'] = 'Verzeichnis zum Speichern der Sprachdateien :';
$string['filestoredinhelp'] = 'Wo soll die Datei gespeichert werden';
$string['filterall'] = 'Alle Begriffe filtern';
$string['filtermatchoneperpage'] = 'Filter einmal pro Seite anwenden';
$string['filtermatchonepertext'] = 'Filter einmal pro Text anwenden';
$string['filters'] = 'Filter';
$string['filtersettings'] = 'Übersicht';
$string['filtersettingsgeneral'] = 'Generelle Filtereinstellungen';
$string['filteruploadedfiles'] = 'Filter für hochgeladene Dateien';
$string['forcelogin'] = 'Anmeldung notwendig';
$string['forceloginforprofileimage'] = 'Profilbilder nur für eingeloggte Nutzer/innen anzeigen';
$string['forceloginforprofileimage_help'] = 'Wenn diese Option aktiviert ist, müssen Nutzer/innen eingeloggt sein, um Profilbilder sehen zu können. Bei allen E-Mail-Mitteilungen wird nur das Standardbild benutzt.';
$string['forceloginforprofiles'] = 'Anmeldung notwendig, um Profile sehen zu können';
$string['forcetimezone'] = 'Vorgegebene Zeitzone';
$string['framename'] = 'Frame-Name';
$string['frontpage'] = 'Startseite';
$string['frontpagebackup'] = 'Sicherung';
$string['frontpagedefaultrole'] = 'Standardrolle für Startseite';
$string['frontpagefilters'] = 'Filter für Startseite';
$string['frontpageloggedin'] = 'Startseite nach Anmeldung';
$string['frontpageoverrides'] = 'Rechteänderungen für Startseite';
$string['frontpagequestions'] = 'Testfragen';
$string['frontpagerestore'] = 'Wiederherstellung';
$string['frontpageroles'] = 'Rollen für Startseite';
$string['frontpagesettings'] = 'Einstellungen';
$string['fullnamedisplay'] = 'Vollständiger Name';
$string['gdrecommended'] = 'Die PHP-Extension GD wird zur Bildumwandlung benutzt. Wenn die Extension fehlt, sind zahlreiche Möglichkeiten nicht verfügbar, z.B. Fotos in den Nutzerprofilen.';
$string['gdversion'] = 'GD-Version';
$string['generalsettings'] = 'Grundeinstellungen';
$string['geoipfile'] = 'GeoIP-Ortsdaten';
$string['getremoteaddrconf'] = 'Geloggte IP-Adressen Quelle';
$string['globalsquoteswarning'] = '<p><strong>Wichtiger Warnhinweis</strong>: Damit Sie erfolgreich mit Moodle arbeiten können, <br />sind einige Änderungen an den derzeitigen PHP-Einstellungen erforderlich.<p/><p>Die Einstellung  <code>register_globals=off</code> und/oder <code>magic_quotes_gpc=on</code> <em>muss</em> gesetzt werden. <br />Wenn möglich, sollten Sie  <code>register_globals=off</code> einstellen <br /> Sicherheitseinstellung für Server; die Einstellung <code>magic_quotes_gpc=on</code> ist ebenfalls ratsam.<p/><p>Die Einstellungen werden in der Datei <code>php.ini</code> vorgenommen, in der Apache/IIS <br />Konfiguration oder einer <code>.htaccess</code> Datei.</p>';
$string['globalswarning'] = '<p><strong>Sicherheitshinweis</strong>: Um ordnungsgemäß funktionieren zu können, benötigt <br />Moodle mehrere Änderungen in Ihren aktuellen PHP-Einstellungen.<p/> <p>Sie <em>müssen</em> den Parameter <code>register_globals=off</code> setzen.<p>Diese Einstellung können Sie vornehmen, in dem Sie die Datei <code>php.ini</code>, die Apache/IIS <br />Konfiguration oder die Datei <code>.htaccess</code> bearbeiten.</p>';
$string['googlemapkey'] = 'Google Maps API-Key';
$string['gotofirst'] = 'Zum ersten fehlenden Text springen';
$string['gradebook'] = 'Bewertungen';
$string['gradebookroles'] = 'Bewertete Rollen';
$string['gradeexport'] = 'Exportformat für die Bewertungen';
$string['groupenrolmentkeypolicy'] = 'Regeln zum Einschreibeschlüssel für Gruppen';
$string['groupenrolmentkeypolicy_desc'] = 'Diese Option legt fest, dass für Einschreibeschlüssel zu Gruppen die gleichen Regeln gelten wie für Kennwörter.';
$string['guestroleid'] = 'Rolle für Gäste';
$string['guestroleid_help'] = 'Diese Rolle wird Gästen automatisch zugewiesen. Sie wird außerdem vorübergehend vergeben, wenn Nutzer/innen über den \'Gastzugang\' einen Kurs betreten, sich dort aber nicht einschreiben.';
$string['helpadminseesall'] = 'Sollen Administrator/innen alle Kalendereinträge sehen oder nur die sie selbst betreffenden?';
$string['helpcalendarsettings'] = 'Konfiguration des Kalenders sowie datums- und zeitbezogene Einstellungen';
$string['helpforcetimezone'] = 'Sie können die Zeitzone festlegen. Alternativ können Sie allen Personen erlauben, ihre eigene Zeitzone zu wählen.';
$string['helpsitemaintenance'] = 'Der Wartungsmodus sperrt die Website für Arbeiten am System, für Installationen von Updates und Zusatzmodulen. Die Anmeldung ist ausschließlich für Administrator/innen möglich.';
$string['helpstartofweek'] = 'An welchem Tag soll die Woche im Kalender beginnen?';
$string['helpupcominglookahead'] = 'Wie viele Tage im Voraus sollen künftige Termine gesucht werden?';
$string['helpupcomingmaxevents'] = 'Wie viele Termine sollen maximal als künftige Termine angezeigt werden?';
$string['helpweekenddays'] = 'Welche Tage der Woche sollen als Wochenende farbig hervorgehoben werden?';
$string['hiddenuserfields'] = 'Nutzerfelder verbergen';
$string['hidefromall'] = 'Für alle verbergen';
$string['hidefromnone'] = 'Für niemanden verbergen';
$string['hidefromstudents'] = 'Für Teilnehmer/innen verbergen';
$string['htmleditor'] = 'HTML-Editor';
$string['htmleditorsettings'] = 'Einstellungen für den HTML-Editor';
$string['htmlsettings'] = 'HTML-Einstellungen';
$string['http'] = 'HTTP';
$string['httpsecurity'] = 'HTTP-Sicherheit';
$string['iconvrecommended'] = 'Die PHP-Extension ICONV wird zur Leistungsverbesserung dringend empfohlen. Die Installation ist besonders wichtig, wenn Sie Sprachen mit anderen als lateinischen Zeichensätzen verwenden.';
$string['iconvrequired'] = 'Die PHP-Extension ICONV muss installiert sein';
$string['ignore'] = 'Ignorieren';
$string['importlangreminder'] = 'Der Migrationsprozess für die Datenbank kann jetzt beginnen. Sie müssen sich <b>erneut einloggen</b>, damit das Upgrade ausgeführt wird. Installieren Sie  die Unicode-Sprachdateien unter "Administration > Sprache > Sprachdateien importieren", <b>nachdem</b> die Migration der Datenbank abgeschlossen wurde.';
$string['importtimezones'] = 'Update der Zeitzonenliste';
$string['importtimezonescount'] = '{$a->count} Einträge importiert von {$a->source}';
$string['importtimezonesfailed'] = 'Keine Daten gefunden! (schlechte Nachricht)';
$string['includemoduleuserdata'] = 'Nutzerdaten aus Modulen einbeziehen';
$string['incompatibleblocks'] = 'Inkompatible Blöcke';
$string['install'] = 'Sprachpaket installieren';
$string['installedlangs'] = 'Installierte Sprachpakete';
$string['installhijacked'] = 'Die Installation muss von der ursprünglichen IP-Adresse aus abgeschlossen werden.';
$string['installsessionerror'] = 'Die PHP Sessions können nicht initialisiert werden. Bitte prüfen Sie, ob Ihr Browser Cookies akzeptiert.';
$string['intcachemax'] = 'Max. Cache-Speicher';
$string['intlrecommended'] = 'Die PHP-Extension Intl gewährleistet die Internationalisierung, etwa eine lokalisierte Sortierung';
$string['invalidlangpack'] = 'Um dieses Sprachpaket zu bearbeiten müssen Sie es in das Sprachverzeichnis \'moodledata/lang\' legen';
$string['invalidsection'] = 'Ungültiger Abschnitt';
$string['invaliduserchangeme'] = 'Der Anmeldename "changeme" ist reserviert. Wählen Sie einen anderen Anmeldenamen.';
$string['ipblocked'] = 'Diese Website ist im Moment nicht verfügbar.';
$string['ipblocker'] = 'IP-Adressen';
$string['ipblockersyntax'] = 'Schreiben Sie jeden IP-Eintrag im Textfeld in eine neue Zeile.
<ul>
<li>vollständige IP-Adressen (z.B. 192.168.10.1)</li>
<li>unvollständige IP-Adressen (z.B. 192.168.) für alle IP-Adressen, die mit diesen Zahlen beginnen</li>
<li>IP-Adressbereich (z.B. 192.168.10.20-50) für alle IP-Adressen im Bereich (hier 20 bis 50)</li>
<li>IP-Adressen in CDIR-Schreibweise (z.B. 231.54.211.0/20)</li>
<li>Textdomains sind nicht erlaubt (z.B. \'meinedomain.de\')</li>
<li>Leere Zeilen werden ignoriert</li>
</ul>';
$string['iplookup'] = 'IP-Adressen-Suche';
$string['iplookupinfo'] = 'Standardmäßig nutzt Moodle zur Lokalisierung von IP-Adressen die Datenbank NetGeo. Die Datenbank wird nicht gepflegt und liefert leider oft seltsame Daten. Die Installation der freien Datenbank \'MaxMind GeoLiteCity\' wird empfohlen. Die IP-Adressen werden auf einer einfachen Übersichtskarte lokalisiert. Mit einem Googlekonto und einen freien API Key könnten Sie auch interaktive Karten über Google Maps verwenden.';
$string['iplookupmaxmindnote'] = 'Moodle benutzt zur Darstellung die Ortsdatenbank \'<a href="http://www.maxmind.com">GeoLite City von MaxMind.com</a>\'.';
$string['iplookupnetgeonote'] = 'Aktuell ist die Datenbank NetGeo zur Anzeige geografischen Informationen eingestellt. Um zuverlässigere Ergebnisse zu erhalten, wird die Installation der Datenbank GeoLiteCity von MaxMind empfohlen.';
$string['jabber'] = 'Jabber';
$string['jabberhost'] = 'Jabber Server';
$string['jabberpassword'] = 'Jabber Kennwort';
$string['jabberport'] = 'Jabber Port';
$string['jabberserver'] = 'Jabber Server-ID';
$string['jabberusername'] = 'Jabber Anmeldename';
$string['keeptagnamecase'] = 'Schreibweise der Schlagwörter beibehalten';
$string['lang'] = 'Sprache';
$string['lang16notify'] = 'Moodle 1.6 und alle späteren Versionen erlauben die Installation und Aktualisierung der Sprachpakete direkt von download.moodle.org über diesen Link.';
$string['langcache'] = 'Sprachmenü-Cache
';
$string['langcache_desc'] = 'Cache für Sprachmenü. Wenn diese Option aktiviert ist, wird eine Liste der in Moodle aktivierten Sprachpakete zwischengespeichert. Der Cache wird automatisch aktualisiert, wenn Sie ein Sprachpaket über die Sprachverwaltung installieren oder löschen. Falls Sie ein Sprachpaket manuell auf den Server kopieren, müssen Sie auch den Sprachcache löschen.';
$string['langedit'] = 'Texte bearbeiten';
$string['langimport'] = 'Sprachpakete verwalten';
$string['langimportdisabled'] = 'Der Import von Sprachpaketen wurde deaktiviert. Sie müssen die Sprachpakete manuell über FTP aktualisieren.';
$string['langimportsuccess'] = 'Sprachpaket wurde erfolgreich aktualisiert';
$string['langlist'] = 'Sprachen im Sprachmenü';
$string['langlocalpackage'] = 'Lokale Anpassungen';
$string['langmasterenglish'] = 'Sprachpaket en (Vorlage)';
$string['langmasterpackage'] = 'Sprachpaket (Vorlage)';
$string['langmenu'] = 'Sprachmenü';
$string['langnoeditenglish'] = 'Das englische Basis-Sprachpaket kann nicht überschrieben werden. Bitte wechseln Sie das Dateiverzeichnis, um lokale Spracheinstellungen zu vorzunehmen.';
$string['langpackinstalled'] = 'Sprachpaket {$a} wurde erfolgreich installiert';
$string['langpackmaintaining'] = 'Offizielles Sprachpaket bearbeiten';
$string['langpackremoved'] = 'Sprachpaket wurde deinstalliert';
$string['langpacks'] = 'Sprachpakete';
$string['langpackupdated'] = 'Sprachpaket {$a} wurde erfolgreich aktualisiert.';
$string['langpackupdateskipped'] = 'Update des Sprachpakets {$a} wurde übersprungen.';
$string['langpackwillbeupdated'] = 'Bei der Aktualisierung wird auch das Sprachpaket erneuert.';
$string['langrmyourself'] = 'Um Datenverlust vorzubeugen, darf lang.php keine existierende Datei mit einer leeren Datei überschreiben. Bitte entfernen Sie die Datei manuell.';
$string['langstringcache'] = 'Sprachcache';
$string['languagesettings'] = 'Einstellungen';
$string['langupdatecomplete'] = 'Update der Sprachpakete ist abgeschlossen.';
$string['latexpreamble'] = 'LaTeX Präambel';
$string['latexsettings'] = 'Einstellungen für das LaTeX-Rendering';
$string['latinexcelexport'] = 'Excel-Kodierung';
$string['legacyfilesinnewcourses'] = '\'Alte Kursdateien\' in neuen Kursen';
$string['legacyfilesinnewcourses_help'] = 'Standardmäßig ist das Verzeichnis \'Alte Kursdateien\' nur in Kursen verfügbar, die aus Moodle 1.9.x importiert wurden. Einige Features (wie z.B. die Sicherung und Wiederherstellung einzelner Aktivitäten) sind zu dieser Einstellung nicht kompatibel.';
$string['licensesettings'] = 'Lizenzeinstellungen';
$string['loading'] = 'Lädt';
$string['localetext'] = '"locale" für die Website';
$string['localstringcustomization'] = 'Lokales Sprachpaket anpassen';
$string['location'] = 'Lokales';
$string['locationsettings'] = 'Einstellungen';
$string['locked'] = 'gesperrt';
$string['log'] = 'Logdaten';
$string['logguests'] = 'Gastzugriff loggen';
$string['logguests_help'] = 'Diese Einstellung legt fest, ob die Aktionen über den Gastzugang unabhängig von den anderen Nutzerkonten geloggt werden soll. Es wird dringend empfohlen, bei produktiven Websites diese Einstellung zu aktivieren, auch wenn zur Verringerung der Serverlast die Deaktivierung von Logdaten für den Gastzugang erwogen wird.';
$string['loginhttps'] = 'Login über HTTPS';
$string['loginpasswordautocomplete'] = 'Vervollständigung von Kennwörtern verhindern';
$string['loginpasswordautocomplete_help'] = 'Wenn diese Options deaktiviert ist, können Anmeldekennworte im Browser gespeichert werden. Ein Aktivierung der Option hat zur Folge, dass Ihre Website nicht mehr die Regeln "XHTML strict validation" einhält.';
$string['loglifetime'] = 'Logdaten speichern';
$string['longtimewarning'] = '<b>Bitte beachten Sie, dass dieser Vorgang sehr lange dauern kann.</b>';
$string['mail'] = 'E-Mail';
$string['mailnewline'] = 'Zeilenschaltung in E-Mails';
$string['maintenancemode'] = 'Wartungsmodus';
$string['maintfileopenerror'] = 'Fehler beim Aktivieren des Wartungsmodus';
$string['maintinprogress'] = 'Die Wartung dauert eine Weile ....';
$string['managelang'] = 'Verwalten';
$string['managelicenses'] = 'Lizenzen verwalten';
$string['manageqtypes'] = 'Fragetypen verwalten';
$string['maturity100'] = 'Beta';
$string['maturity150'] = 'Release Candidate';
$string['maturity200'] = 'Stable Version';
$string['maturity50'] = 'Alpha';
$string['maturitycorewarning'] = 'Sie beabsichtigen Moodle in einer Version zu installieren oder zu aktualisieren, die als "{$a}" markiert und nicht für den produktiven Einsatz vorgesehen ist. Falls Sie dies nicht wollen, sollten Sie sicherstellen, dass Sie die richtigen Moodle-Dateien aus einem STABLE-Zweig verwenden. Bitte informieren Sie sich in den Moodle Docs.';
$string['maxbytes'] = 'Maximale Dateigröße';
$string['maxconsecutiveidentchars'] = 'Aufeinander folgende identische Zeichen';
$string['maxeditingtime'] = 'Maximale Zeit zur Beitragsbearbeitung';
$string['mbstringrecommended'] = 'Die Installation der Bibliothek MBSTRING wird zur Leistungsverbesserung dringend empfohlen. Dies ist besonders wichtig, wenn Sie Sprachen mit anderen als lateinischen Zeichensätzen verwenden.';
$string['mediapluginavi'] = '.avi Filter aktivieren';
$string['mediapluginflv'] = '.flv Filter aktivieren';
$string['mediapluginimg'] = 'Automatische Einbettung von verlinkten Bildern aktivieren';
$string['mediapluginmov'] = '.mov Filter aktivieren';
$string['mediapluginmp3'] = '.mp3 Filter aktivieren';
$string['mediapluginmpg'] = '.mpg Filter aktivieren';
$string['mediapluginogg'] = '.ogg Filter aktivieren';
$string['mediapluginogv'] = '.ogv Filter aktivieren';
$string['mediapluginram'] = '.ram Filter aktivieren';
$string['mediapluginrm'] = '.rm Filter aktivieren';
$string['mediapluginrpm'] = '.rpm Filter aktivieren';
$string['mediapluginswf'] = '.swf  Filter aktivieren';
$string['mediapluginswfnote'] = 'Sicherheitswarnung: Standardmäßig dürfen normale Nutzer/innen keine SWF-Flashdateien einbetten.';
$string['mediapluginwmv'] = '.wmv Filter aktivieren';
$string['mediapluginyoutube'] = 'YouTube Link-Filter aktivieren';
$string['memcachedhosts'] = 'Memcached Hosts';
$string['memcachedpconn'] = 'Memcached verwendet persistente Verbindungen';
$string['messaging'] = 'Mitteilungen aktivieren';
$string['messagingdeletereadnotificationsdelay'] = 'Gelesene Benachrichtigungen löschen';
$string['messaginghidereadnotifications'] = 'Gelesene Benachrichtigungen verbergen';
$string['minpassworddigits'] = 'Ziffern';
$string['minpasswordlength'] = 'Kennwortlänge';
$string['minpasswordlower'] = 'Kleinbuchstaben';
$string['minpasswordnonalphanum'] = 'Sonderzeichen';
$string['minpasswordupper'] = 'Großbuchstaben';
$string['misc'] = 'Verschiedenes';
$string['missinglangparent'] = 'Hauptsprachpaket  <em>{$a->parent}</em> fehlt für <em>{$a->lang}</em>.';
$string['mnetrestore_extusers'] = '<strong>Achtung:</strong> Die Sicherungsdatei enthält externe Moodle-Nutzerkonten, die bei der Wiederherstellung angelegt werden.';
$string['mnetrestore_extusers_admin'] = '<strong>Achtung: </strong>Diese Sicherungsdatei scheint von einer anderen Moodle-Instanz zu stammen und externe Nutzerkonten aus dem Moodle-Netzwerk zu enthalten. Der Wiederherstellungsvorgang wird versuchen, die Moodle-Netzwerk-Server für alle erzeugten Nutzer/innen anzupassen. Die nicht passenden Nutzerkonten werden automatisch auf die interne Authentifizierung gesetzt (anstelle von MNET) und in der Logdatei festgehalten.';
$string['mnetrestore_extusers_mismatch'] = '<strong>Achtung:</strong> Die Sicherungsdatei wurde in einem anderen Moodle erzeugt und enthält externe Nutzerkonten aus dem Moodle-Netzwerk, die evtl. nicht wiederhergestellt werden können. Diese Aktion wird nicht unterstützt. Nur wenn Sie sicher sind, dass die Sicherung aus diesem Moodle stammt oder dass alle Nutzerkonten aus dem Moodle-Netzwerk verfügbar sind, können Sie die Wiederherstellung fortsetzen.';
$string['mnetrestore_extusers_noadmin'] = '<strong>Achtung: </strong>Diese Sicherungsdatei scheint von einer anderen Moodle-Instanz zu stammen und externe Nutzerkonten aus dem Moodle-Netzwerk zu enthalten. Sie sind nicht berechtigt, diese Art von Wiederherstellung durchzuführen. Bitte nehmen Sie Kontakt mit dem Administrator Ihrer Website auf oder führen Sie alternativ die Wiederherstellung für den Kurs ohne Nutzerinformationen (Module, Dateien, ...) durch.';
$string['mnetrestore_extusers_switchuserauth'] = 'Der externe Nutzer {$a->username} aus dem Moodle-Netzwerk (von {$a->mnethosturl} kommend) wechselte zum lokal authentifizierten Nutzer {$a->auth}';
$string['modeditdefaults'] = 'Grundeinstellungen für die Aktivität';
$string['modsettings'] = 'Übersicht';
$string['modulesecurity'] = 'Modul-Sicherheit';
$string['multilangforceold'] = 'Alte Mehrsprach-Syntax festlegen:
ohne <span class="multilang"> und ohne <lang>';
$string['multilangupgrade'] = 'Multilang- Aktualisierung';
$string['multilangupgradeinfo'] = 'Die Mehrsprach-Filtersyntax wurde in 1.8 verändert. Das <lang>-Tag wird nicht mehr unterstützt.<br /><br />Beispiel: <span lang="en" class="multilang">Hello!</span><span lang="es" class="multilang">Hola!</span><br /><br /><strong>Möchten Sie die Syntax in allen bestehenden Texten jetzt aktualisieren?</strong>';
$string['multilangupgradenotice'] = 'Ihre Website nutzt die alte Mehrsprach-Syntax. Die <a href="multilangupgrade.php"> Mehrsprach-Aktualisierung</a> wird empfohlen.';
$string['mustenablestats'] = 'Die Statistiken wurden für diese Website nicht eingeschaltet.';
$string['mycoursesperpage'] = 'Zahl der Kurse';
$string['mydashboard'] = 'Standard Systemdashboard';
$string['mymoodle'] = 'Meine Startseite';
$string['mymoodleredirect'] = 'Weiterleitung zu \'Meine Startseite\'';
$string['mypage'] = 'Standardseite für MyMoodle';
$string['mypagelocked'] = 'Standardseite sperren';
$string['myprofile'] = 'Standardmäßige Profilseite';
$string['mysql416bypassed'] = 'Wenn Sie in Ihrer Website ausschließlich ISO-8859-1 (lateinische) Sprachen verwenden, können Sie eine MySQL-Version ab 4.1.12 (oder höher) verwenden.';
$string['mysql416required'] = 'MySQL 4.1.16 (oder höher) ist für Moodle 1.6 unbedingt erforderlich, um eine Datenkonvertierung nach UTF-8 sicherzustellen.';
$string['navcourselimit'] = 'Kursgrenze';
$string['navigationupgrade'] = 'Diese Aktualisierung liefert zwei neue Navigationsblöcke, die einige bisherige Blöcke (Administration, Kurse, Aktivitäten und Personen) ablösen. Wenn Sie spezielle Zugriffsrechte für diese Blöcke gesetzt haben, sollten Sie unbedingt prüfen, ob sich alles so verhält wie Sie es wünschen.';
$string['navshowallcourses'] = 'Alle Kurse anzeigen';
$string['navshowcategories'] = 'Kursbereiche anzeigen';
$string['neverdeleteruns'] = 'Durchläufe nicht löschen';
$string['nobookmarksforuser'] = 'Sie haben keine Lesezeichen.';
$string['nochanges'] = 'Keine Änderungen';
$string['nodatabase'] = 'Keine Datenbank';
$string['nolangupdateneeded'] = 'Alle Sprachpakete sind auf dem aktuellen Stand. <br />Ein Update ist nicht erforderlich.';
$string['nomissingstrings'] = 'Keine fehlenden Texte';
$string['nonewsettings'] = 'Bei der Aktualisierung wurden keine neuen Einstellungen hinzugefügt.';
$string['nonexistentbookmark'] = 'Das gesuchte Lesezeichen gibt es nicht.';
$string['noreplyaddress'] = '"Nicht-Antworten" Adresse';
$string['noresults'] = 'Keine Ergebnisse gefunden.';
$string['noroles'] = 'Keine Rollen';
$string['notifications'] = 'Systemmitteilungen';
$string['notifyloginfailures'] = 'E-Mail bei Login-Fehlern an';
$string['notifyloginthreshold'] = 'Schwelle zur Benachrichtigung';
$string['notloggedinroleid'] = 'Rolle für Besucher';
$string['numberofmissingstrings'] = 'Anzahl der fehlenden Texte: {$a}';
$string['numberofstrings'] = 'Gesamtzahl der Texte: {$a->strings}<br />Fehlende Texte: {$a->missing} ({$a->missingpercent}&nbsp;%)';
$string['numcoursesincombo'] = 'Maximalzahl von Kursen in der Kombiliste';
$string['numcoursesincombo_help'] = 'Die Kombiliste funktioniert nicht richtig, wenn die Anzahl der Kurse zu hoch wird. Legen Sie die maximale Anzahl von Kursen fest, ab der die Kursliste auf einer speziellen Übersichtsseite angezeigt wird, anstatt alle Kurse auf der Startseite aufzulisten.';
$string['numquestions'] = 'Fragenanzahl';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} verborgene)';
$string['opensslrecommended'] = 'Die optionale Installation der OpenSSL Bibliothek wird dringend empfohlen. Dadurch wird die Moodle-Netzwerk-Funktionalität ermöglicht.';
$string['opentogoogle'] = 'Offen für Google';
$string['optionalmaintenancemessage'] = 'Wartungsinformationen';
$string['order1'] = 'Erstens';
$string['order2'] = 'Zweitens';
$string['order3'] = 'Drittens';
$string['order4'] = 'Viertens';
$string['passwordpolicy'] = 'Kennwortregeln';
$string['pathconvert'] = 'Pfad zu <i>convert</i>';
$string['pathdvips'] = 'Pfad zu <i>dvips</i>';
$string['pathlatex'] = 'Pfad zu <i>latex</i>';
$string['pathtoclam'] = 'Pfad zu ClamAV';
$string['pathtodot'] = 'Pfad zu <i>dot</i>';
$string['pathtodot_help'] = 'Pfad zu dot, üblicherweise /usr/bin/dot. Um Grafiken aus DOT-Dateien generieren zu können, muss das Programm dot installiert und hier darauf verwiesen sein. Dies wird aktuell ausschließlich für das Profiling in Moodle gebraucht.  (Entwicklung > Profiling)';
$string['pathtodu'] = 'Pfad zu <i>du</i>';
$string['pathtopgdump'] = 'Pfad zu <i>pg_dump</i>';
$string['pathtopgdumpdesc'] = 'Sie benötigen diese Einstellung nur, wenn mehr als ein pg_dump auf dem System vorhanden ist (z.B. wenn mehr als eine Version von PostgreSQL installiert ist).';
$string['pathtopgdumpinvalid'] = 'Ungültiger Pfad zu pg_dump - entweder falscher Pfad oder nicht ausführbar';
$string['pathtopsql'] = 'Pfad zu <i>psql</i>';
$string['pathtopsqldesc'] = 'Sie benötigen diese Einstellung nur, wenn mehr als ein psql auf dem System vorhanden ist (z.B. wenn mehr als eine Version von PostgreSQL installiert ist).';
$string['pathtopsqlinvalid'] = 'Ungültiger Pfad zu psql - entweder falscher Pfad oder nicht ausführbar';
$string['pathtounzip'] = 'Pfad zu <i>unzip</i>';
$string['pathtozip'] = 'Pfad zu <i>zip</i>';
$string['perfdebug'] = 'Performance';
$string['performance'] = 'Performance';
$string['pgcluster'] = 'PostgreSQL Cluster';
$string['pgclusterdescription'] = 'PostgreSQL Versions-/Cluster-Parameter für Befehlszeilenoperationen. Wenn Sie nur eine PostgreSQL auf Ihrem System verwenden oder sich nicht sicher sind, lassen Sie das Feld leer.';
$string['php50restricted'] = 'PHP 5.0.x hat eine Reihe bekannter Fehler! Sie sollten die Versionen 5.1.x bzw. 4.3.x/4.4.x benutzen.';
$string['php533warning'] = 'PHP 5.3.3 oder höher wird empfohlen';
$string['phpfloatproblem'] = 'Unerwartetes Problem bei der Behandlung von PHP-Dezimalzahlen (float) aufgetreten - {$a}';
$string['pleaserefreshregistration'] = 'Ihre Website wurde am {$a} bei moodle.org registriert. <br />Bitte erneuern Sie die Registrierung bei entscheidenden Veränderungen.';
$string['pleaseregister'] = 'Bitte registrieren Sie Ihre Website.';
$string['plugin'] = 'Plugin';
$string['plugins'] = 'Plugins';
$string['profilecategory'] = 'Kategorie';
$string['profilecategoryname'] = 'Name der Kategorie (muss eindeutig sein)';
$string['profilecategorynamenotunique'] = 'Dieser Name wird bereits benutzt';
$string['profilecommonsettings'] = 'Grundeinstellungen';
$string['profileconfirmcategorydeletion'] = 'In dieser Kategorie gibt es {$a} Feld(er), die in die Kategorie darüber (oder darunter) verschoben werden. <br />Möchten Sie die Kategorie wirklich löschen?';
$string['profileconfirmfielddeletion'] = 'Für das zu löschende Feld gibt es {$a} Nutzereinträge. <br />Möchten Sie das Feld wirklich löschen?';
$string['profilecreatecategory'] = 'Neue Profilkategorie anlegen';
$string['profilecreatefield'] = 'Neues Profilfeld anlegen:';
$string['profilecreatenewcategory'] = 'Neue Kategorie anlegen';
$string['profilecreatenewfield'] = 'Neues Profilfeld \'{$a}\' anlegen';
$string['profiledefaultcategory'] = 'Weitere Profileinstellungen';
$string['profiledefaultchecked'] = 'Standardmäßig markiert';
$string['profiledefaultdata'] = 'Standardwert';
$string['profiledeletecategory'] = 'Kategorie löschen';
$string['profiledeletefield'] = 'Feld löschen';
$string['profiledescription'] = 'Beschreibung eines Feldes';
$string['profiledscript'] = 'Dieses Script wird gerade analysiert';
$string['profiledscriptview'] = 'Analyseinformationen für dieses Script anzeigen';
$string['profileeditcategory'] = 'Kategorie {$a} bearbeiten';
$string['profileeditfield'] = 'Profilfeld {$a} bearbeiten';
$string['profilefield'] = 'Profilfeld';
$string['profilefieldcolumns'] = 'Spalten';
$string['profilefieldispassword'] = 'Ist dies ein Kennwortfeld?';
$string['profilefieldlink'] = 'Link';
$string['profilefieldlink_help'] = 'Um den Text in einen Link umzuwandeln, geben Sie eine URL mit $$ an, wobei $$ durch den Text ersetzt wird. Um z.B. eine Twitter-ID in einen Link umzuwandeln, schreiben Sie http://twitter.com/$$.';
$string['profilefieldlinktarget'] = 'Verlinkungsziel';
$string['profilefieldmaxlength'] = 'Maximale Länge';
$string['profilefieldrows'] = 'Zeilen';
$string['profilefields'] = 'Profilfelder';
$string['profilefieldsize'] = 'Größe anzeigen';
$string['profileforceunique'] = 'Sollen die Daten eindeutig sein?';
$string['profileinvaliddata'] = 'Ungültiger Wert';
$string['profilelocked'] = 'Ist dieses Feld gesperrt?';
$string['profilemenudefaultnotinoptions'] = 'Der Standardwert entspricht keiner der Optionen';
$string['profilemenunooptions'] = 'Keine Menü-Option vorhanden';
$string['profilemenuoptions'] = 'Menü-Optionen (eine pro Zeile)';
$string['profilemenutoofewoptions'] = 'Sie müssen mindestens 2 Optionen angeben';
$string['profilename'] = 'Name';
$string['profilenofieldsdefined'] = 'Es wurden keine Felder definiert';
$string['profilerequired'] = 'Ist dieses Feld notwendig?';
$string['profileroles'] = 'Rollen im Profil anzeigen';
$string['profilesforenrolledusersonly'] = 'Profilzugriff nur für eingetragene Nutzer/innen';
$string['profileshortname'] = 'Kurzbezeichnung (muss eindeutig sein)';
$string['profileshortnamenotunique'] = 'Diese Kurzbezeichnung wird bereits benutzt';
$string['profilesignup'] = 'Auf der Anmeldeseite zeigen?';
$string['profilespecificsettings'] = 'Weitere Einstellungen';
$string['profilevisible'] = 'Für wen ist dieses Feld sichtbar?';
$string['profilevisibleall'] = 'Sichtbar für alle';
$string['profilevisible_help'] = '<h2>Sichtbarkeit von Profilfeldern</h2>

<p>Jedem Einstellungsfeld kann eine von drei Sichtbarkeitseinstellungen gegeben werden: unsichtbar, alle und Nutzer/in. Die Einstellung "unsichtbar" wird normalerweise vom Administrator gesetzt, der private Aufzeichnungen über die Nutzer/innen notieren möchte. Die Einstellung "Nutzer/in" wird für ein Feld ausgewählt, das personenbezogene Daten enthält. Für alle anderen Informationen kann die Einstellung "alle" benutzt werden.</p>';
$string['profilevisiblenone'] = 'Nicht sichtbar';
$string['profilevisibleprivate'] = 'Sichtbar für Teilnehmer/innen';
$string['profiling'] = 'Analyse';
$string['profilingallowall'] = 'Kontinuierliche Analyse';
$string['profilingallowall_help'] = 'Wenn diese Option aktiviert ist, können Sie jederzeit den Parameter PROFILEALL überall benutzen (PGC), um die Analyse für alle ausgeführten Scripts einzuschalten. Analog dazu können Sie den Parameter PROFILEALLSTOP verwenden, um alles zu beenden.';
$string['profilingallowme'] = 'Selektive Analyse';
$string['profilingallowme_help'] = 'Wenn diese Option aktiviert ist, können Sie jederzeit den Parameter PROFILEME überall benutzen (PGC), um die Analyse für das ausgewählte Script einzuschalten. Analog dazu können Sie den Parameter DONTPROFILEME verwenden, um die Analyse zu unterbinden.';
$string['profilingautofrec'] = 'Automatische Analyse';
$string['profilingautofrec_help'] = 'Mit dieser Einstellung werden mehrere Einträge automatisch vorgenommen (zufällig auf der Basis der angegebenen Häufigkeit - 1 bis xxx). Protokolle werden zur weiteren Analyse gespeichert. Beachten Sie, dass dieser Analysetyp die Einstellungen include/exclude verwendet. Setzen Sie die Einstellung auf 0, um die automatische Analyse zu deaktivieren.';
$string['profilingenabled'] = 'Analyse aktivieren';
$string['profilingenabled_help'] = 'Wenn diese Option aktiviert ist, wird die Analyse von Scripts für die Website eingeschaltet. Sie können die Analysedurchführung mit weiteren Einstellungen festlegen.';
$string['profilingexcluded'] = 'Analyse ausschließen';
$string['profilingexcluded_help'] = 'Liste von URLs (Komma getrennt,wwwroot wird übersprungen,erreichbar), die bei der Profilerstellung ausgeschlossen werden.';
$string['profilingincluded'] = 'Diese Scripts analysieren';
$string['profilingincluded_help'] = 'Liste von URLs (Komma getrennt,wwwroot wird übersprungen,erreichbar), die bei der Profilerstellung automatisch verwandt werden. Beispiele: /index.php, /course/view.php. Akzeptiert wird auch * Wildcard an jeder Stelle. Beispiele: /mod/forum/*, /mod/*/view.php.';
$string['profilinglifetime'] = 'Analysedurchgänge behalten';
$string['profilinglifetime_help'] = 'Legen Sie den Zeitraum fest, über den Sie ältere Analysedurchgänge behalten möchten. Ältere Durchgänge werden periodisch gelöscht. Beachten Sie, dass keiner der Durchgänge als Referenz markiert werden kann.';
$string['protectusernames'] = 'Anmeldenamen schützen';
$string['proxybypass'] = 'Proxy für diese Server nicht verwenden';
$string['proxyhost'] = 'Proxy-Server';
$string['proxypassword'] = 'Proxy-Kennwort';
$string['proxyport'] = 'Proxy-Port';
$string['proxytype'] = 'Proxy-Typ';
$string['proxyuser'] = 'Proxy-Anmeldename';
$string['purgecaches'] = 'Cache löschen';
$string['purgecachesconfirm'] = '<p>Zur Leistungsoptimierung werden JavaScripts, Designs, Sprachdateien, gefilterte Texte, RSS Feeds und viele andere Daten in einem Cache zwischengespeichert. </p>
<p>Wenn Sie den Cache löschen, müssen alle zwischengespeicherten Daten erneuert und im Browser neu geladen werden. Auf diese Weise sehen Sie anschließend wirklich die aktuellen Werte und Darstellungen. Beim Löschen des Caches gehen keine Daten verloren, aber die Website könnte anfangs wesentlich langsamer reagieren.</p>';
$string['purgecachesfinished'] = 'Cache wurde gelöscht';
$string['qtypedeletefiles'] = 'Alle Daten, die mit dem Fragetyp \'{$a->qtype}\' verbunden sind, wurden aus der Datenbank gelöscht. Um die Löschung abzuschließen (und eine automatische Wiederinstallation des Fragetyps zu verhindern), sollten Sie jetzt noch das Verzeichnis \'{$a->directory}\' von Ihrem Server entfernen.';
$string['qtyperqpwillberemoved'] = 'Während des Updates wird der Fragetyp RQP entfernt. Da Sie diesen Fragetyp nicht benutzen, sollten Sie keinerlei Probleme bekommen.';
$string['qtyperqpwillberemovedanyway'] = 'Während des Updates wird der Fragetyp RQP entfernt. Sie haben einige RQP Fragen in Ihrer Datenbank, die nicht mehr funktionieren werden, falls Sie nicht den dafür notwendigen Code vor der Fortsetzung dieses Updates installieren. http://moodle.org/mod/data/view.php?d=13&rid=797';
$string['quarantinedir'] = 'Quarantäne- Verzeichnis';
$string['question'] = 'Fragen';
$string['questioncwqpfscheck'] = 'Im Test sind eine oder mehrere \'Zufallsfragen\' so konfiguriert, dass
Fragen aus einem Mix von freigegebenen und nichtfreigegebenen Fragenkategorien ausgewählt werden sollen. Lesen Sie dazu bitte den <a href="{$a->reporturl}"> ausführlicheren Bericht</a> und die
<a href="{$a->docsurl}"> Moodle Dokumentation</a>.';
$string['questioncwqpfsok'] = 'Gut. Keine der \'Zufallsfragen\' in Ihren Tests ist so konfiguriert, dass
Fragen aus einem Mix von freigegebenen und nicht freigegebenen Fragenkategorien ausgewählt werden könnten.';
$string['questiontype'] = 'Fragetyp';
$string['questiontypes'] = 'Fragetypen';
$string['rcache'] = 'Cache-Speicher';
$string['rcachettl'] = 'Cache-Speicher TTL';
$string['recaptchaprivatekey'] = 'ReCaptcha: Private Key';
$string['recaptchapublickey'] = 'ReCaptcha: Public Key';
$string['registration'] = 'Registrierung';
$string['releasenoteslink'] = 'Weitere Informationen über diese Version finden Sie online: <a target="_blank" href="{$a}">Versionsinformation</a>';
$string['remotelangnotavailable'] = 'Moodle kann keine Verbindung zu download.moodle.org herstellen, um die Sprachpakete automatisch zu installieren. Laden Sie bitte die gewünschten Sprachpakete herunter, kopieren sie in das Verzeichnis {$a} und entpacken sie dort manuell.';
$string['renameerrors'] = 'Fehler beim Umbenennen';
$string['requiredentrieschanged'] = '<strong>WICHTIG - UNBEDINGT LESEN<br />Die Warnung wird ausschließlich bei dieser Aktualisierung gezeigt!</strong><br />
Infolge einer Fehlerkorrektur wird sich das Verhalten von Datenbankaktivitäten ändern, die die Einstellungen \'Required entries\' und \'Required entries before viewing settings\' nutzen.

Weitere Erklärungen entnehmen Sie bitte hier <a href="http://moodle.org/mod/forum/discuss.php?d=110928" target="_blank">the database module forum</a>. Zusätzliche Informationen zum beabsichtigten Verhalten: <a href="http://docs.moodle.org/en/Adding/editing_a_database#Required_entries" target="_blank">Moodle Docs</a>.
<br/><br/>Diese Änderung betrifft die folgenden Datenbanken in Ihrem System . Bitte sichern Sie die nachfolgende Liste und prüfen Sie nach der Aktualisierung, ob alle Aktivitäten noch wie beabsichtigt funktionieren.<br/><strong>{$a->text}</strong><br/>';
$string['requiredtemplate'] = 'Erforderlich. Geben Sie hier die Vorlagestruktur ein (%l = Nachname, %f = Vorname, %u = Anmeldename). In der Hilfedatei finden Sie weitere Details und Beispiele.';
$string['requiremodintro'] = 'Beschreibung notwendig';
$string['requires'] = 'Erfordernisse';
$string['restrictbydefault'] = 'Module standardmäßig einschränken';
$string['restrictmodulesfor'] = 'Module einschränken für';
$string['reverseproxy'] = 'Reverse Proxy';
$string['riskconfig'] = 'Nutzer/innen könnten Einstellungen für die Website und das Erscheinungsbild verändern.';
$string['riskconfigshort'] = 'Konfigurationsrisiko';
$string['riskdataloss'] = 'Nutzer/innen könnten große Mengen von Inhalten und Informationen zerstören';
$string['riskdatalossshort'] = 'Risiko des Datenverlusts';
$string['riskmanagetrust'] = 'Nutzer/innen könnten die Vertrauenseinstellungen anderer Nutzer/innen verändern.';
$string['riskmanagetrustshort'] = 'Vertrauenseinstellungen verwalten';
$string['riskpersonal'] = 'Nutzer/innen könnten Zugang zu persönlichen Informationen anderer Nutzer/innen erhalten.';
$string['riskpersonalshort'] = 'Datenschutzrisiko';
$string['riskspam'] = 'Nutzer/innen könnten Spam-Mails an andere  Nutzer/innen oder externe Adressen senden.';
$string['riskspamshort'] = 'Spam-Gefahr';
$string['riskxss'] = 'Nutzer/innen könnten Dateien und Texte einfügen, die Cross-Site-Scripting (XSS) ermöglichen.';
$string['riskxssshort'] = 'XSS-Gefahr';
$string['roleswithexceptions'] = '{$a->roles}, mit {$a->exceptions}';
$string['rowpreviewnum'] = 'Vorschau für Zeilen';
$string['rssglobaldisabled'] = 'Auf Serverebene deaktiviert';
$string['runclamavonupload'] = 'ClamAV auf hochgeladene Dateien anwenden';
$string['save'] = 'Sichern';
$string['savechanges'] = 'Änderungen sichern';
$string['search'] = 'Suchen';
$string['searchinsettings'] = 'In den Einstellungen suchen';
$string['searchresults'] = 'Suchergebnisse';
$string['sectionerror'] = 'Bereichsfehler!';
$string['secureforms'] = 'Erweiterte Formularsicherheit benutzen';
$string['security'] = 'Sicherheit';
$string['server'] = 'Server';
$string['serverchecks'] = 'Server-Überprüfung';
$string['serverlimit'] = 'Server-Grenze';
$string['sessionautostartwarning'] = '<p> Schwerwiegender Konfigurationsfehler entdeckt. Bitte Server Administrator informieren.</p><p>Für eine korrekte Funktionsweise ist eine Änderung von PHP-Einstellung für Moodle erforderlich. </p><p><code>session.auto_start</code> muss auf <code>off</code> gesetzt werden.</p><p>Die Einstellung erfolgt in der <code>php.ini</code>-Datei, in der <br /> Apache/IIS Konfiguration oder der <code>.htaccess</code>-Datei auf dem Server.</p>';
$string['sessioncookie'] = 'Cookie-Prefix';
$string['sessioncookiedomain'] = 'Cookie-Domain';
$string['sessioncookiepath'] = 'Cookie-Pfad';
$string['sessionhandling'] = 'Sitzungsinformation';
$string['sessiontimeout'] = 'Zeitüberschreitung';
$string['settingfileuploads'] = 'Datei-Upload ist für die normale Nutzung nötig - bitte aktivieren Sie dies in den PHP-Einstellungen.';
$string['settingmemorylimit'] = 'Unzureichende Speicherzuweisung - bitte setzen Sie eine höhere Speichergrenze memory_limit in den PHP-Einstellungen.';
$string['settingsafemode'] = 'Moodle ist nicht vollständig kompatibel mit dem Safe Mode. Bitten Sie Ihren Server-Administrator, diesen Modus auszuschalten. Rechnen Sie mit verschiedenen Problemen, falls Sie Moodle mit eingeschaltetem Safe Mode installieren.';
$string['showcommentscount'] = 'Kommentarzähler anzeigen';
$string['showdetails'] = 'Details anzeigen';
$string['simpletest'] = 'Unittests';
$string['simplexmlrequired'] = 'Die PHP-Extension SimpleXML wird benötigt.';
$string['sitelangchanged'] = 'Die Spracheinstellungen für die Website wurden erfolgreich geändert.';
$string['sitemailcharset'] = 'E-Mail-Zeichensatz';
$string['sitemaintenance'] = 'Wartungsmodus: Die Website ist momentan nicht verfügbar!';
$string['sitemaintenancemode'] = 'Wartungsmodus';
$string['sitemaintenanceoff'] = 'Der Wartungsmodus wurde beendet. Die Website ist wieder verfügbar.';
$string['sitemaintenanceon'] = 'Die Website ist momentan im Wartungsmodus. Die Anmeldung ist ausschließlich für Administrator/innen möglich.';
$string['sitemaintenancewarning'] = 'Die Website ist momentan im Wartungsmodus. Die Anmeldung ist ausschließlich für Administrator/innen möglich. <br /><a href="maintenance.php"> Wartungsmodus beenden </a>.';
$string['sitemaintenancewarning2'] = 'Die Website ist momentan im Wartungsmodus. Die Anmeldung ist ausschließlich für Administrator/innen möglich. <br /><a href="{$a}"> Wartungsmodus beenden </a>.';
$string['sitepolicies'] = 'Website-Rechte';
$string['sitepolicy'] = 'URL zur Datenschutzinformation';
$string['sitepolicyguest'] = 'URL zur Datenschutzinformation für Gäste';
$string['sitepolicyguest_help'] = 'Wenn Sie eine Einwilligungserklärung verwenden, die alle Gäste vor der Nutzung der Website akzeptieren müssen, können Sie hier die URL angeben. Diese Einstellung kann jede öffentliche URL enthalten. Probleme könnte es mit der Option \'Anmeldung notwendig\' geben, weil nicht angemeldete Personen keinen Zugriff auf Dateien der Website haben.';
$string['sitepolicy_help'] = 'Wenn Sie eine Einwilligungungserklärung verwenden, die alle Personen vor der Nutzung der Website akzeptieren müssen, können Sie hier die URL angeben. Diese Einstellung kann jede öffentliche URL enthalten.';
$string['sitesectionhelp'] = 'Mit dieser Option wird ein Textabschnitt auf der Startseite angezeigt.';
$string['slasharguments'] = 'Slash-Parameter benutzen';
$string['smartpix'] = 'Suche in den Bildern';
$string['smtphosts'] = 'SMTP-Server';
$string['smtpmaxbulk'] = 'SMTP-Begrenzung';
$string['smtppass'] = 'SMTP-Kennwort';
$string['smtpuser'] = 'SMTP-Anmeldename';
$string['soaprecommended'] = 'Die PHP-Extension soap sollte für Webservices und einige Zusatzmodule installiert sein.';
$string['spellengine'] = 'Rechtschreibprüfung';
$string['splrequired'] = 'Die PHP-Extension SPL wird benötigt.';
$string['stats'] = 'Statistiken';
$string['statsfirstrun'] = 'Maximale Verarbeitungsdauer';
$string['statsmaxruntime'] = 'Maximale Laufzeit';
$string['statsruntimedays'] = 'Tage für Berechnung';
$string['statsruntimestart'] = 'Ausführung um';
$string['statsuserthreshold'] = 'Schwelle für die Nutzerzahl';
$string['stickyblocks'] = 'Feste Blöcke';
$string['stickyblockscourseview'] = 'Kursseite';
$string['stickyblocksduplicatenotice'] = 'Wenn Sie einen Block hier hinzufügen, so steht eine Kopie auf jeder einzelnen Seite zur Verfügung.<br />Der unveränderliche Block lässt sich nicht bearbeiten und nicht verschieben. Ein Duplikat des Blocks können Sie jedoch verändern und an einem beliebigen Platz ablegen.';
$string['stickyblocksmymoodle'] = 'Meine Startseite';
$string['stickyblockspagetype'] = 'Seitentyp zum Konfigurieren';
$string['strictformsrequired'] = 'Strenge Prüfung der Pflichtfelder';
$string['stripalltitletags'] = 'HTML-Tags aus allen Aktivitätsnamen entfernen';
$string['supportemail'] = 'Support-Mail';
$string['supportname'] = 'Support-Name';
$string['supportpage'] = 'Support-Seite';
$string['switchlang'] = 'Verzeichnis wechseln';
$string['systempaths'] = 'Systempfade';
$string['tablenosave'] = 'Änderungen in der obigen Tabelle werden automatisch gesichert.';
$string['tablesnosave'] = 'Änderungen in den obigen Tabellen werden automatisch gesichert.';
$string['tabselectedtofront'] = 'Tabellen mit Tabs: Soll die Reihe mit dem aktiven Tabulator im Vordergrund platziert werden?';
$string['tabselectedtofronttext'] = 'Bringe die ausgewählte Reihe in den Vordergrund';
$string['themedesignermode'] = 'Modus zur Designbearbeitung';
$string['themelist'] = 'Designliste';
$string['themeresetcaches'] = 'Design-Cache löschen';
$string['themeselector'] = 'Design wählen';
$string['themesettings'] = 'Einstellungen';
$string['therewereerrors'] = 'Es gibt Fehler in Ihren Daten';
$string['timezone'] = 'Zeitzone';
$string['timezoneforced'] = 'Vom Administrator festgelegt';
$string['timezoneisforcedto'] = 'Für alle Nutzer/innen festgelegt';
$string['timezonenotforced'] = 'Eigene Zeitzone wählbar';
$string['tokenizerrecommended'] = 'Die PHP-Extension Tokenizer sollte zur Verbesserung der Netzwerkfunktionalität installiert sein.';
$string['unattendedoperation'] = 'Automatischer Ablauf';
$string['unbookmarkthispage'] = 'Lesezeichen zu dieser Seite entfernen';
$string['unicoderecommended'] = 'Es wird empfohlen, alle Daten im Format Unicode UTF-8 zu speichern. Neuinstallationen sollten mit Datenbanken vorgenommen werden, die als Standardzeichensatz UTF-8 benutzen. Wenn Sie ein Upgrade durchführen, sollten Sie die UTF-8-Migration starten (Admin-Seite).';
$string['unicoderequired'] = 'Es ist notwendig, alle Daten im Format Unicode UTF-8 zu speichern. Neuinstallationen müssen mit Datenbanken vorgenommen werden, die als Standardzeichensatz UTF-8 benutzen. Wenn Sie ein Upgrade durchführen, sollten Sie die UTF-8-Migration starten (Admin-Seite).';
$string['unicodeupgradenotice'] = 'In Moodle 1.6 wurden alle Sprachdateien nach UTF-8 migriert. Um das Upgrade Ihrer Site zu vervollständigen, müssen alle Einträge in der Datenbank mit Hilfe des Migrationsskripts konvertiert werden. <a href="utfdbmigrate.php">Klicken Sie hier, um  die Migration zu starten</a>!';
$string['uninstall'] = 'Sprachpaket deinstallieren';
$string['uninstallconfirm'] = 'Möchten Sie das Sprachpaket {$a} wirklich deinstallieren?';
$string['uninstallplugin'] = 'Deinstallieren';
$string['uninstallqtype'] = 'Diesen Fragetyp deinstallieren';
$string['unsupported'] = 'Kein Support';
$string['updateaccounts'] = 'Update bestehender Accounts';
$string['updatecomponent'] = 'Komponente aktualisieren';
$string['updatelangs'] = 'Sprachpakete aktualisieren';
$string['updatetimezones'] = 'Zeitzonen';
$string['upgrade197notice'] = '<p>Moodle 1.9.7 enthält neue Schutzmaßnahmen für die Nutzerdaten Ihrer Website, speziell bei der Kennwortverschlüsselung und bei der Speicherung von Nutzerdaten innerhalb von Kurssicherungen. Aus diesem Grund könnten sich einige Einstellungen und Rechte bezüglich der Kurssicherung geändert haben.<br /><br />Weitere Details finden Sie in den <a href="http://docs.moodle.org/dev/Moodle_1.9.7_release_notes" target="_blank">Moodle 1.9.7 Versionsinformationen</a>.</p>';
$string['upgrade197noticesubject'] = 'Sicherheitshinweise zur Aktualisierung auf Moodle 1.9.7';
$string['upgrade197salt'] = 'Zur Risikominimierung von Kennwortdiebstahl wird dringend geraten, mit dem zusätzlichen Parameter "passwordsaltmain" einen Zufallstext in die Datei config.php einzutragen. Lesen Sie bitte die <a href="{$a}" target="_blank">Dokumentation zur Kennwortverschlüsselung</a>.';
$string['upgradeerror'] = 'Unbekannter Fehler beim Upgrade von {$a->plugin} zu Version {$a->version}. Fortsetzung unmöglich.';
$string['upgradeforumread'] = 'Ab Moodle 1.5 können Sie Forenbeiträge als gelesen/ungelesen markieren.<br />Für diese Funktion müssen die Datenbanktabellen aktualisiert werden. <a href="{$a}">Tabellen jetzt aktualisieren</a>.';
$string['upgradeforumreadinfo'] = 'Mit einer neuen Funktion in Moodle 1.5 können Forenbeiträge als gelesen/ungelesen markiert werden. Um diese Funktion zu verwenden, müssen die Datenbanktabellen aktualisiert werden. Je nach Größe der Datenbank kann dieser Vorgang längere Zeit (u.U. mehrere Stunden) erfordern. Führen Sie diesen Vorgang am besten in Zeiten mit wenigen Zugriffen aus. Die Website funktioniert während der Umstellung weiter. Die Nutzer/innen bemerken davon nichts. Wenn Sie den Vorgang einmal gestartet haben, darf er nicht unterbrochen werden. Lassen Sie das Browserfenster dabei offen. Sollten Sie das Browserfenster versehentlich schließen, können Sie den Prozess neu starten. <br />Wollen Sie nun starten?';
$string['upgradelogs'] = 'Für die vollständige Funktionsfähigkeit müssen die alten Logdaten aktualisiert werden. <a href="{$a}">Weitere Informationen</a>';
$string['upgradelogsinfo'] = 'Die Art und Weise, in der Logdaten gespeichert werden, wurde verändert. Damit Sie Ihre alten Logdaten mit den Einzelaktivitäten einsehen können, müssen die alten Logdaten aktualisiert werden. Je nachdem, wie viele Daten auf Ihrer Seite gespeichert sind, kann dieser Vorgang eine längere Zeit beanspruchen (u.U. mehrere Stunden). Der Vorgang beansprucht die Datenbank bei umfangreichen Seiten stark. Wenn Sie den Vorgang einmal gestartet haben, müssen Sie ihn ohne Unterbrechung abschließen lassen. Das Browserfenster darf in dieser Zeit nicht geschlossen und die Internetverbindung nicht unterbrochen werden. Der Zugriff auf Ihre Website durch andere Anwender ist nicht beeinträchtigt. <br /><br />Wollen Sie nun Ihre Logdaten aktualisieren?';
$string['upgradesettings'] = 'Neue Einstellungen';
$string['upgradesettingsintro'] = 'Die folgenden Optionen wurden bei der letzten Aktualisierung hinzugefügt. Ändern Sie (falls nötig) die standardmäßigen Vorgaben und sichern Sie die Einstellungen.';
$string['upgradestart'] = 'Aktualisierung';
$string['upgradesure'] = 'Die Moodle-Dateien wurden verändert. Ihre Moodle-Installation wird auf die Version <strong>{$a}</strong> aktualisiert. Nach der Aktualisierung können Sie nicht zu einer früheren Version zurückkehren.</p>
<p>Sind Sie sicher, dass Sie das Update ausführen wollen?</p>';
$string['upgradetimedout'] = 'Die Aktualisierung wurde wegen Zeitüberschreitung abgebrochen. Bitte starten Sie den Vorgang noch einmal.';
$string['upgradingdata'] = 'Daten werden aktualisiert.';
$string['upgradinglogs'] = 'Logdaten werden aktualisiert.';
$string['upgradingversion'] = 'Aktualisierung auf neue Version';
$string['uploadpicture_baduserfield'] = 'Die angegebene Nutzereigenschaft ist ungültig. Bitte versuchen Sie es noch einmal.';
$string['uploadpicture_cannotmovezip'] = 'Die ZIP-Datei kann nicht in das temporäre Verzeichnis verschoben werden.';
$string['uploadpicture_cannotprocessdir'] = 'Die entzippten Dateien können nicht verarbeitet werden.';
$string['uploadpicture_cannotsave'] = 'Das Nutzerbild für {$a} kann nicht gespeichert werden. Prüfen Sie die ursprüngliche Bilddatei.';
$string['uploadpicture_cannotunzip'] = 'Die Bilddateien können nicht entpackt werden.';
$string['uploadpicture_invalidfilename'] = 'Die Bilddatei {$a} enthält ungültige Zeichen im Namen und wird nicht benutzt.';
$string['uploadpicture_overwrite'] = 'Vorhandene Nutzerbilder überschreiben?';
$string['uploadpictures'] = 'Nutzerbilder hochladen';
$string['uploadpictures_help'] = '<h2>Nutzerbilder gepackt hochladen</h2>

<p>Nutzerbilder können als gezipptes Paket mit mehreren Dateien hochgeladen werden. Moodle kann dann die darin enthaltenen Dateien den einzelnen Nutzern als Portrait zuordnen. Die Bilddateien müssen dazu in geeigneter Weise benannt sein <i>gewählte Nutzerattribut-Erweiterung</i>. Wenn Sie als Nutzerattribut den Nutzernammen gewählt haben und dieser lautet nutzer1234, dann muss die Bilddatei nutzer1234.jpg heißen.</p>
<p>zulässige Bilddateitypen sind gif, jpg und png.</p>
<p>Groß- und Kleinschreibung bei den Dateinamen wird nicht berücksichtigt.</p>';
$string['uploadpicture_userfield'] = 'Nutzereigenschaft, die fürdie Zuordnung der Nutzerbilder verwandt werden soll:';
$string['uploadpicture_usernotfound'] = 'Nutzer/in mit \'{$a->userfield}\'-Wert von \'{$a->uservalue}\' existiert nicht. Wird übersprungen.';
$string['uploadpicture_userskipped'] = 'Nutzerbild {$a} exitiert bereits und wird nicht überschrieben.';
$string['uploadpicture_userupdated'] = 'Nutzerbild {$a} aktualisiert';
$string['uploadusers'] = 'Nutzerliste hochladen';
$string['uploadusers_help'] = '<h2>Nutzerliste hochladen</h2>

<p>Nutzer/innen können als Textdatei hochgeladen (und optional auch in Kurse eingeschrieben) werden.

<h3>Felder in der Textdatei</h3>
<p>Wenn Sie eine große Nutzerzahl importieren wollen, müssen Sie die Textdatei folgendermaßen aufbauen:</p>
<ul>
<li>Jede Zeile der Datei enthält genau einen Datensatz</li>
<li>Jeder Datensatz besteht aus einer Reihe von Datenfeldern, die durch Kommas (oder andere Trennzeichen) getrennt sind</li>
<li>Der erste Datensatz der Datei enthält eine Liste der benutzten Feldnamen und legt die Struktur der restlichen Zeilen fest.
<blockquote>
<p><strong>Erforderliche Datenfeldnamen:</strong> Diese Datenfeldnamen müssen in der ersten Zeile eingetragen und in den folgenden Zeilen für jede/n Nutzer/in definiert werden.</p>
<p><code>firstname, lastname</code> beim Einfügen neuer Datensätze oder <code>username</code> beim Updaten bestehender Datensätze.</p>
<p><strong>Optionale Datenfeldnamen:</strong> Jedes dieser Datenfelder ist optional. Wenn ein Datenfeld vorkommt (Datenfeldname im ersten Datensatz und zugehörige Werte in den folgenden Datensätzen für die einzelnen Nutzer/innen), werden diese Werte verwendet. Wenn ein Datenfeld nicht vorkommt, werden für diese Datenfelder Standardwerte verwendet, die die Moodle Adminstration bei der Konfiguration der Website festlegt.</p>
<p> <code>institution, department, city, country, lang, auth, ajax, timezone, idnumber, icq, phone1, phone2, address, url, description, mailformat, maildisplay, htmleditor, autosubscribe, emailstop</code></p>

<p><strong>Individuell angelegte Profilfelder:</strong> xxxx ist der Titel eines selbst angelegtes Profilfeldes</p>
<p><code>profile_field_xxxx</code></p>
<p><strong>Spezielle Feldnamen, die zur Änderung von Nutzernamen oder zum Löschen von Nutzern verwandt werden (s.u.)</strong></p>
<p><code>deleted, oldusername</code></p>
      <p><strong>Datenfeldnamen, die die Einschreibung in Kurse und Gruppen sowie die Rollenzuweisung steuern (optional): </strong> Für Kurse (Datenfeldnamen: course1, course2, etc.) werden die Kurzbezeichnungen der Kurse verwendet - wenn die Kurse existieren, werden die Nutzer/innen automatisch in die Kurse eingeschrieben. Für Gruppen (Datenfeldnamen: group1, group2, etc.) werden die Gruppennamen verwendet. Für Rollen verwenden Sie die Rollen-ID (Datenfeldnamen: type1 / role1, type2 / role2, etc.). Gruppen werden den zugehörigen Kursen über die Datenfeldnamen zugeordnet: group1 zu course1, group2 zu course2, etc. Dasselbe gilt für die Rollen: type1 / role1 gehört zu course1, type2 / role2 gehört zu course2, etc.n Der Wert 1 steht für die Standardrolle von Nutzern in Kursen (meist Teilnehmer/in), der Wert 2 für die Rolle Trainer/in und der Wert 3 für die Rolle "Trainer/in ohne Editierrecht. Sie können auch das role-Feld verwenden. Hier kann die Kurzbezeichnung der Rolle oder die id-Nummer der Rolle eingetragen werden,die zugewiesen werden soll. Die Teilnehmer können zugleich auch den Gruppen in Kursen zugeordnet werden. Auch die Gruppen werden durch ihren Namen oder die id-Nummer identifiziert. (Wichtig: Gruppen mit Nummern als Bezeichnung werden nicht unterstützt. Außerdem kann die Teilnahmedauer in Tagen eingetragen werden</p>
      <p><code>course1, group1, type1, role1, enrolperiod1, course2, group2, type2, role2, etc.</code></p>
    </blockquote>
    </li>

<li>Wenn in den Daten für die einzelnen Nutzer/innen Kommas vorkommen (z.B. im Passwort), verwenden Sie die Codierung , - das Skript wird diese dann automatisch in ein Komma umwandeln.</li>
<li>Für Boolesche Felder verwenden Sie 0 für falsch und 1 für richtig/wahr.</li>
  </ul>

<h3>Beispiel für eine gültige Import-Datei</h3>
<p><code>username, password, firstname, lastname, email, lang, idnumber, maildisplay, course1, group1, type1, enrolperiod1<br />
jonest, verysecret, Tom, Jones, jonest@someplace.edu, en, 3663737, 1, Intro101, Section 1, 1, 30<br />
reznort, somesecret, Trent, Reznor, reznort@someplace.edu, en_us, 6736733, 0, Advanced202, Section 3, 3, 90
</code></p>

<h3>Vorlagen</h3>
<p>Standardwerte werden als Vorlagen verarbeitet, wobei folgende Codierung erlaubt ist:</p>
<ul>
<li><code>%l</code> - wird ersetzt durch den Nachnamen</li>
<li><code>%f</code> - wird ersetzt durch den Vornamen</li>
<li><code>%u</code> - wird ersetzt durch den Anmeldenamen</li>
<li><code>%%</code> - wird ersetzt durch %</li>
</ul>
<p>Zwischen dem Prozentzeichen (%) und dem Buchstaben (l, f oder u) sind folgende Zeichen erlaubt:</p>
<ul>
<li>Minuszeichen (-) - die Information, die durch den Buchstaben (l, f oder u) spezifiziert ist, wird umgewandelt in Kleinschreibung</li>
<li>Pluszeichen (+) - die Information, die durch den Buchstaben (l, f oder u) spezifiziert ist, wird umgewandelt in Großschreibung</li>
<li>Tilde-Zeichen (~) - Der Textinhalt wird in Groß-/Kleinschreibung gewandelt (erster Buchstabe groß)</li>
<li>Eine Dezimalzahl - die Information, die durch den Buchstaben (l, f oder u) spezifiziert ist, wird auf die angegebene Länge gekürzt</li>
</ul>

<p>Das folgende Beispiel zeigt einige Vorlagen und welche Werte sich daraus ergeben. Im Beispiel ist der Vorname John und der Nachname Doe:</p>
<ul>
<li>%l%f = DoeJohn</li>
<li>%l%1f = DoeJ</li>
<li>%-l%+f = doeJOHN</li>
<li>%-f_%-l = john_doe</li>
<li>http://www.example.com/~%u/ = http://www.example.com/~jdoe/ (wenn der Anmeldename jdoe oder %-1f%-l ist)</li>
</ul>
<p>Vorlagen werden nur für Standardwerte verarbeitet, nicht für Werte, die explizit in der Import-Datei angegeben sind.</p>
<p>Um korrekte Anmeldenamen zu generieren, wird der Anmeldename immer in Kleinschreibung umgewandelt. Darüberhinaus gilt: Wenn die Einstellung "Sonderzeichen in Anmeldenammen zulassen" ("extendedusernamechars") auf der Website-Rechte-Seite nicht aktiviert ist, werden alle Sonderzeichen (alle Zeichen, die keine Buchstaben, Ziffern, Punkte und Unterstriche sind) im Anmeldenamen entfernt.

Beispiel: Bei einem Nutzer mit Vornamen John Jr. und Nachnamen Doe ergibt sich aus der Vorlage %-f_%-l der Anmeldename john jr._doe, wenn die Einstellung "extendedusernamechars" aktiviert ist, und johnjr.doe, wenn "extendedusernamechars" nicht aktiviert ist.</p>
<p>Wenn die Einstellung "Neue Handhabung bei doppeltem Anmeldenamen" auf "Zähler hinzufügen" gesetzt ist, wird an doppelte Anmeldenamen, die von der Vorlage generiert werden, ein automatischer Zähler angehängt. Wenn z.B. die Import-Datei die Nutzer/innen John Doe, Jane Doe und Jenny Doe ohne explizite Angabe von Anmeldenamen enthält, dann ist der Standardanmeldename %-1f%-l, und wenn die Einstellung "Neue Handhabung bei doppeltem Anmeldenamen" auf "Zähler hinzufügen" gesetzt ist, dann ergeben sich die Anmeldenamen jdoe, jdoe2 and jdoe3.
</p>
<h3>Bestehende Nutzerprofile aktualisieren</h3>

<p>Standardmäßig geht Moodle davon aus, dass Sie ausschließlich neue Nutzerprofile anlegen möchten. D.h. es werden standardmäßig alle Datensätze übersprungen, die Anmeldenamen enthalten, die bereits im System vorhanden sind. Wenn Sie die Einstellung "Update bestehender Accounts" auf "Ja" setzen, dann werden existierende Nutzerprofile in der Datenbank aktualisiert.</p>

<p>Beim Aktualisieren von bereits bestehenden Nutzerprofilen können ebenfalls die Anmeldenamen geändert werden. Setzen Sie dazu die Option "Umbenennen zulassen" auf "Ja" und fügen Sie in Ihre Import-Datei ein Datenfeld <code>oldusername</code> für den alten Anmeldenamen ein.</p>

<p><b>Achtung:</b> Alle Fehler, die beim Aktualisieren bestehender Nutzerprofile auftreten, können sich sehr negativ auswirken. Seien Sie bitte unbedingt vorsichtig beim Benutzen dieser Update-Funktionen!</p>

<h3>Löschen von Nutzer/innen</h3>
<p>Wenn die Import-Datei ein Datenfeld <code>deleted</code> enthält, werden Nutzer/innen gelöscht, bei denen der entsprechende Wert in der Import-Datei auf 1 gesetzt ist. In diesem Fall können alle anderen Werte weggelassen werden außer den Werten für <code>username</code>.</p>
<p>Das Löschen von alten Nutzerprofilen und das Anlegen neuer Nutzerprofile kann mit ein und derselben Import-Datei geschehen. Z.B. wird mit der folgenden Import-Datei ein neuer Nutzer Tom Jones angelegt und der alte Nutzer reznort gelöscht:
<p><code>username, firstname, lastname, deleted<br />
jonest, Tom, Jones, 0<br />
reznort, , , 1
</code></p>';
$string['uploaduserspreview'] = 'Vorschau Nutzer-Upload';
$string['uploadusersresult'] = 'Ergebnisse Nutzer-Upload';
$string['upwards'] = 'aufwärts';
$string['useblogassociations'] = 'Blogverbund erlauben';
$string['useexternalyui'] = 'YUI Libraries online';
$string['usehtmleditor'] = 'HTML-Editor benutzen';
$string['user'] = 'Nutzer/in';
$string['useraccountupdated'] = 'Nutzer/in aktualisiert';
$string['useraccountuptodate'] = 'Nutzer/in aktuell';
$string['userbulk'] = 'Nutzerverwaltung (Bulk)';
$string['userdeleted'] = 'Nutzer/in gelöscht';
$string['userlist'] = 'Nutzerliste anzeigen';
$string['userpolicies'] = 'Nutzereigenschaften';
$string['userpreference'] = 'Nutzereinstellungen';
$string['userquota'] = 'Nutzerquota';
$string['userrenamed'] = 'Nutzer/in umbenannt';
$string['users'] = 'Nutzer/innen';
$string['userscreated'] = 'Nutzer/innen angelegt';
$string['usersdeleted'] = 'Nutzer/innen gelöscht';
$string['usersrenamed'] = 'Nutzer/innen umbenannt';
$string['usersskipped'] = 'Übersprungene Nutzer';
$string['usersupdated'] = 'Nutzer/innen aktualisiert';
$string['usersweakpassword'] = 'Nutzer/innen mit \'schwachem\' Kennwort';
$string['usetags'] = 'Schlagwörter aktivieren';
$string['uubulk'] = 'Für Bulkprozess auswählen';
$string['uubulkall'] = 'Alle Nutzer/innen';
$string['uubulknew'] = 'Neue Nutzer/innen';
$string['uubulkupdated'] = 'Aktualisierte Nutzer/innen';
$string['uucsvline'] = 'CSV-Zeile';
$string['uulegacy1role'] = '(Original Student) typeN=1';
$string['uulegacy2role'] = '(Original Teacher) typeN=2';
$string['uulegacy3role'] = '(Original Non-editing teacher) typeN=3';
$string['uunoemailduplicates'] = 'Doppelte E-Mail-Adressen verhindern';
$string['uuoptype'] = 'Upload Typ';
$string['uuoptype_addinc'] = 'Alle hinzufügen, bei Bedarf einen Zähler beim Anmeldenamen anhängen';
$string['uuoptype_addnew'] = 'Neue hinzufügen, vorhandene überspringen';
$string['uuoptype_addupdate'] = 'Neue hinzufügen, vorhandene aktualisieren';
$string['uuoptype_update'] = 'Nur vorhandene aktualisieren';
$string['uupasswordcron'] = 'Erstellt in Cron';
$string['uupasswordnew'] = 'Neues Kennwort';
$string['uupasswordold'] = 'Existierendes Kennwort';
$string['uustandardusernames'] = 'Anmeldenamen standardisieren';
$string['uuupdateall'] = 'Überschreiben mit Dateiinhalten und Standardwerten';
$string['uuupdatefromfile'] = 'Überschreiben mit Standardwerten';
$string['uuupdatemissing'] = 'Fehlende Werte aus Datei und Standardwerten übernehmen';
$string['uuupdatetype'] = 'Vorhandene Nutzerdetails';
$string['uuusernametemplate'] = 'Vorlage für Anmeldenamen';
$string['validateerror'] = 'Dieser Wert war ungültig:';
$string['verifychangedemail'] = 'E-Mail-Domains bei Änderung prüfen';
$string['warningcurrentsetting'] = 'Aktueller Wert ist ungültig: {$a}';
$string['webproxy'] = 'Web-Proxy';
$string['webproxyinfo'] = 'Füllen Sie die folgenden Optionen aus, falls Ihr Moodle-Server das Internet nicht direkt erreichen kann. Ein Internetzugang ist notwendig, um Updates, Sprachpakete, RSS-Feeds, Zeitzonen-Daten usw. laden zu können. Die PHP-Extension cURL wird dringend empfohlen!';
$string['xmlrpcrecommended'] = 'Die PHP-Extension xmlrpc ist für die Hub-Kommunikation notwendig, außerdem für die Webservices und das Moodle-Network sinnvoll.';
$string['xmlstrictheaders'] = 'XML strict Header';
$string['yuicomboloading'] = 'YUI Combo Cache';
$string['ziprequired'] = 'Die PHP-Extension Zip ist notwendig. Die alten Pakete infoZip und PclZip werden nicht mehr benutzt.';
