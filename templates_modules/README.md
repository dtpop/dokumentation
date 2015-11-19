# Templates und Module

In Redaxo wird Markup in die Datenbank gespeichert. Mit dem Addon [Developer](http://www.redaxo.org/de/download/addons/?addon_id=338&searchtxt=&cat_id=-1) können diese Markups in Dateien zur besseren Verarbeitung ausgelagert werden. Wichtig ist, dass man im Backend angemeldet sein muss, damit Änderungen in den Dateien wirksam werden.

{% include "SUMMARY.md" %}

## Templates

Unter `Templates` können neue Templates angelegt werden. Ein Template ist so zu sagen die Startdatei bzw. `index.html`. Mit Hilfe eines Templates wird das Layout einer Seite (eines Artikels) festgelegt. Hier wird die generelle Struktur des Artikels einschließlich der Navigation definiert. Metatags, Stylesheets und Javascript können eingebunden werden.

Alle Artikel, denen ein bestimmtes Template zugewiesen wird, erhalten dadurch ein einheitliches Layout. Der artikelspezifische Inhalt wird jeweils über die Funktion $this->getArticle() oder die globale Variable REX_ARTICLE[] eingefügt.

Es können Templates erstellt werden, die in den Artikeln selektiert werden sollen, oder welche, die in andere Templates eingebunden werden sollen.

## Module

Module werden bei REDAXO gebraucht, um die Artikel mit Inhalt zu füllen.

Module bestehen normalerweise aus zwei Teilen, einem Eingabe- und einem Ausgabebereich. Der Redakteur, der eine Seite bearbeitet, sieht nur den Eingabebereich. Im Ausgabeteil wird festgelegt, wie die Eingaben des Redakteurs im Frontend angezeigt werden sollen. Hier können die Eingaben bearbeitet, ergänzt und formatiert werden.

Wenn Sie zum Beispiel im Backend der Demo auf “Module” klicken, bekommen Sie die nebenstehende Liste angezeigt.

Das Modul “Headline” ermöglicht die Eingabe eines Textes, der auf der Seite als Überschrift formatiert wird. Mit Hilfe des Moduls “Bildergalerie” gibt der Redakteur eine Auswahl von Bildern vor, die in einer Bildergalerie angezeigt werden. Das Modul “Text [textile]” verwendet das Redaxo-AddOn “Textile”, das in Kapitel 3.4.7 Textile beschrieben wird.

Für die Speicherung der verschiedenen Inhalte werden REDAXO-eigene Variablen verwendet (s. Kapitel 3.2.2 Redaxo-Variablen).

Bei einer “blanko”-Installation von REDAXO ist die Liste der Module leer. Das heißt, Sie müssen die Module, die Sie brauchen, entweder selbst erstellen oder fertige Module aus der Demo oder dem Downloadbereich in Ihre installierte leere Version kopieren.