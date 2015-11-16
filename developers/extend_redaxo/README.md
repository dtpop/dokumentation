# Addons

Redaxo bleibt seinem Motto `Flexibel und Einfach` treu und liefert von Haus aus, das nötigste um eine einfache Webseite von Null auf zu erstellen. Um komplexere Systeme zu entwickeln empfiehlt es sich, über den mitgelieferten `Installer` nach Addons oder im Addon-Verzeichnis von Redaxo nach Addons zu suchen die die benötigten extra Funktionen zur Verfügung stellen.

Sollten Sie kein passendes Addon finden, ist es auch relativ einfach möglich, eigene Addons zu entwickeln. Die Voraussetzungen hierfür sind allerdings fundierte Fachkenntnisse und Erfahrungen mit Sprachen wie [HTML](https://wiki.selfhtml.org/wiki/HTML/), [CSS](http://www.css4you.de/), [Javascript](https://wiki.selfhtml.org/wiki/JavaScript) und vor allem [PHP](https://www.php.net/).

In den folgenden Kapiteln, erfahren Sie wie die Struktur eines Addons aussieht und auf welchen Konventionen Sie achten müssen, um ein lauffähiges Addon zu programmieren.

## API

API-Dokumentation finden sie hier: http://www.redaxo.org/docs/master/

##Änderungen von Redaxo4 zu Redaxo5

In Redaxo5 werden die benötigten Klassen automatisch geladen und müssen nicht mehr mit `<?php ìnclude "datei.inc.php";?>` eingebunden werden. Außer dem, fällt in allen Dateien der `.inc`-Zusatz weg. Der Ordner `files`wurde in `assets` und `classes` in `lib` umbenannt.

## Struktur

Folgende Struktur sollte ein Addon besitzen:

* /assets/
* /fragments/
* /lang/
* /lib/
* /pages/
* /plugins/
* package.yml
* boot.php
* help.php
* install.php
* uninstall.php
* update.php

###Dateien

####package.yml

[Siehe Package YML](addons/package_yml/README.md)

###boot.php

Boot.php ist ein Ersatz für die Datei config.inc.php aus Redaxo4. Sie steuert den gesamten Aufruf des Addons und kann dazu verwendet werden Assets einzubinden und Konfigurationen zu überschreiben. 

> **Achtung:** Alle Konfigurationen sollten soweit möglich in der Datei package.yml gespeichert werden!

###help.php

Der Inhalt dieser Datei wird ausgegeben, wenn im Addon-Tab von Redaxo die Hilfe eines Addons oder Plugins aufgerufen wird. Hier kann der Benutzer vorab erfahren, welche Funktionen diese Addon zur Verfügung stellt und wie man es benutzt. (Wird leider zu oft vernachlässigt)

###install.php

Diese Datei wird bei der Installation aufgerufen. Es können SQL-Befehle ausgeführt werden und Konfigurationen zurückgesetzt bzw. definiert werden, die bei der Installation schon benötigt werden.

###uninstall.php

Diese Datei wird bei der Deinstallation aufgerufen. Es können SQL-Befehle ausgeführt werden und Konfigurationen zurückgesetzt werden, die nach dem Deinstallieren des Addons nicht weiter benötigt werden.

###update.php

@todo

###Verzeichnisse

####Assets

Assets ist der neue Files-Ordner aus Redaxo4. Alle Dateien aus diesem Verzeichnis, speichert Redaxo in `ROOT/assets/addons/ADDON_NAME/`. Von dort aus können sie bequem geladen werden. [Siehe Assets](addons/assets/README.md).

####Fragments

Fragmente sind PHP-Dateien die an verschiedenen Stellen im Code wiederverwendet werden können. Bei einfachen Addons reicht es ein Fragment einfach in das `fragments`-Verzeichnis zu speichern, es sollten aber logisch benannte Unterverzeichnisse erstellt werden. [Siehe Fragmente](addons/fragments/README.md).

####Lang

In lang werden die Sprachdateien mit der Endung .lang gespeichert. Mögliche Namen könnten sein `de_de.lang` oder auch `en_en.lang`. [Siehe Sprachdateien](addons/languages/README.md).

####Lib

Lib ist der ehemalige `classes`-Ordner. Hier werden alle Klassen gespeichert die später von Redaxo automatisch geladen werden sollen. In Redaxo4 war es noch notwendig, PHP-Dateien manuell hinzuzufügen, Redaxo5 verwendet hierfür einen Autoloader.

####Pages

####Plugins

[Siehe Plugins](addons/plugins/README.md)

###Sonstige Verzeichnisse

Es ist natürlich erlaubt weiterhin eigene Verzeichnisse hinzuzufügen. In dem Addon `be_styles` wurde das Verzeichniss `sass` hinzugefügt. Für externe Tools wie Bootstrap, sollte das Verzeichnis `vendor`verwendet werden.

####Vendoren

Laden Sie den Vendor herunter. In unserem Beispiel verwenden wird [LessPHP von Github](https://github.com/oyejorge/less.php). Erstellen Sie im `vendor`-Verzeichnis Ihres Addons das Verzeichnis `lessphp` und verschieben den entpackten Inhalt aus dem LessPHP-File von Github.

Redaxo wird den neuen Vendor nun automatisch laden. Der Less-Parser kann nun mit `<?php new Less_Parser( /* settings */ );?>` verwendet werden.