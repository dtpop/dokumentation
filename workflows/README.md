#Workflows

Um es Einsteigern zu erleichtern hier ein Workflow. Wer mit einem anderen Workflow gute Erfahrungen gemacht hat, darf uns diesen gerne zukommen lassen. Wir werden die Workflows dann als Menü hier auflisten oder ggf. Anmerkungen weiter unten notieren.

##Ordner und Dateien

Assets wie CSS, Javascript und Bilder für das Design können prinzipiell überall geladen werden. Die Pfade zu den CSS- Und JS-Dateien müssen dann entsprechen in den Templates definiert werden. Für Redaxo 5 würde dahingehend das Addon Assets entwickelt, mit dem dieser Vorgang erheblich erleichtert werden kann.

Im Root-Verzeichnis liegt das Verzeichnis `assets`. Hier liegen standardmäßig die Verzeichnisse `core` und `addons`. Diese Verzeichnisse sollten nicht berührt werden. Lege hier nun folgende Struktur an:

- default/
	- css
		- basic.css
		- normalize.css
	- js
		- basic.js
		- jquery.version.js
	- img
		- favicon.ico
		- apple-touch-icon.png
	- fonts
		- helvetica.woff
	- what_ever

> Info: lege nur Verzeichnisse an, die du wirklich benötigst! Dateinamen können beliebig gewählt werden. Der Verzeichnisname `default` ist für den Abschnitt `Backend` wichtig. 


### Assets Addon

Das Assets-Addon benötigt lediglich die Pfadangabe `/assets/default`, danach werden alle CSS-, Less-, Sass- und JS- Dateien gesucht und angezeigt. Jede Datei ist einzeln konfigurierbar.

Weitere hier: [https://github.com/factorylabs/redaxo_assets](https://github.com/factorylabs/redaxo_assets)

## Templates & Module

Templates und Module können im Backend gepflegt werden, oder als Dateien mit dem Modul Developer [https://github.com/gharlan/redaxo_developer](https://github.com/gharlan/redaxo_developer)

Im Backend empfiehlt es sich das Plugin `customizer` von `be_styles` zu aktivieren, damit die Textareas zu einem einfachen Code-Editor werden.

Developer speichert die Templates und Module als Dateien ab unter `/redaxo/data/addons/developer/`, wenn der Benutzer eingeloggt ist, werden die Änderungen in der Datenbank und im Cache übernommen.


##Backend

###Struktur / Navigation

In Redaxo können Kategorien und Artikel angelegt werden. Es empfiehlt sich hier als erstes eine Kategorie mit dem Domain-Namen zu erstellen. Für den Fall das im Laufe der Zeit eine weitere Domain angelegt werden soll. In Kombination mit dem Addon yrewrite können mehrere Domains sinnvoll verwaltet werden.


#### Kategorien

Die folgende Struktur ist zeigt einen Flow der einige Probleme schon vorweg behebt. Die IDs werden automatisch von Redaxo erstellt und sind hier in Klammern beispielhaft dargestellt. Wichtig ist, wenn wir im Template die Hauptnavigation ausgeben wollen, müssen wir lediglich alle Kind-Elemente der Kategorie `main (ID 3)` ausgeben. 

Mit diesem Scheme [https://github.com/factorylabs/redaxo_yrewrite_fdl](https://github.com/factorylabs/redaxo_yrewrite_fdl) kann man Kategorien aus der URL ausschließen.

- www.domain1.tld (ID 1)
	- main (ID 3)
		- Home (ID 6)
		- Über uns (ID 7)
		- Anfahrt (ID 8)
	- meta (ID 4)
		- News (ID 9)
		- Kontakt (ID 10)
		- Sitemap (ID 11)
	- footer (ID 5)
		- Impressum (ID 12)
		- AGB (ID 13)
		- Kontakt (ID 14)
- www.domain2.tld (ID 2)
	- main
	- meta
	- footer

##Redaxo schnell nutzen

Damit nicht immer jede Webseite von Null an aufgebaut werden muss, kann eine Standardinstallation auf den eigenen Servern aufgebaut werden. Diese Installation enthält sämtliche Einstellungen die man am Anfang benötigt und eine Reihe von Standardmodulen. Einträgen etc.

Beim nächsten Projekt, reicht es die Datenbank zu duplizieren und die Standardinstallation auf den neuen FTP-Server zu kopieren. Danach muss man nur noch die Datenbank-Verbindung anpassen und schon kann es los gehen. Diesen Schritt kann man ggf. durch ein Installation-Script sparen.

##Anmerkungen


> Sioweb: Auch wenn nur eine Domain benötigt wird, sollte die Domain als Kategorie angelegt werden
	