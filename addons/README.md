# Addons

Redaxo bleibt seinem Motto `Flexibel und Einfach` treu und liefert von Haus aus, das nötigste um eine einfache Webseite von Null auf zu erstellen. Um komplexere Systeme zu entwickeln empfiehlt es sich, über den mitgelieferten `Installer` nach Addons oder im Addon-Verzeichnis von Redaxo nach Addons zu suchen die die benötigten extra Funktionen zur Verfügung stellen.

Sollten Sie kein passendes Addon finden, ist es auch relativ einfach möglich, eigene Addons zu entwickeln. Die Voraussetzungen hierfür sind allerdings fundierte Fachkenntnisse und Erfahrungen mit Sprachen wie [HTML](https://wiki.selfhtml.org/wiki/HTML/), [CSS](http://www.css4you.de/), [Javascript](https://wiki.selfhtml.org/wiki/JavaScript) und vor allem [PHP](https://www.php.net/).

In den folgenden Kapiteln, erfahren Sie wie die Struktur eines Addons aussieht und auf welchen Konventionen Sie achten müssen, um ein lauffähiges Addon zu programmieren.

## API

API-Dokumentation finden sie hier: http://www.redaxo.org/docs/master/

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

###Assets

Assets ist der neue Files-Ordner aus Redaxo4. Alle Dateien aus diesem Verzeichnis, speichert Redaxo in `ROOT/assets/addons/ADDON_NAME/`. Von dort aus können sie bequem geladen werden. [Siehe Assets](addons/assets/README.md).

###Fragments

Fragmente sind PHP-Dateien die an verschiedenen Stellen im Code wiederverwendet werden können. Bei einfachen Addons reicht es ein Fragment einfach in das `fragments`-Verzeichnis zu speichern, es sollten aber logisch benannte Unterverzeichnisse erstellt werden. [Siehe Fragmente](addons/fragments/README.md).

###Lang

In lang werden die Sprachdateien mit der Endung .lang gespeichert. Mögliche Namen könnten sein `de_de.lang` oder auch `en_en.lang`. [Siehe Sprachdateien](addons/languages/README.md).