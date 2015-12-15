# Module

Module werden bei REDAXO gebraucht, um die Artikel mit Inhalt zu füllen.

Module bestehen normalerweise aus zwei Teilen, einem Eingabe- und einem Ausgabebereich. Der Redakteur, der eine Seite bearbeitet, sieht nur den Eingabebereich. Im Ausgabeteil wird festgelegt, wie die Eingaben des Redakteurs im Frontend angezeigt werden sollen. Hier können die Eingaben bearbeitet, ergänzt und formatiert werden.

## Bootstrap

Für besondere Features wie Tabs, Slider oder Alerts, lese bitte in der [Kategorie Bootstrap](../bootstrap/README.md) weiter.

## Demo

Wenn Du zum Beispiel im Backend der Demo auf “Module” klicken, bekommst Du die nebenstehende Liste angezeigt.

Das Modul “Headline” ermöglicht die Eingabe eines Textes, der auf der Seite als Überschrift formatiert wird. Mit Hilfe des Moduls “Bildergalerie” gibt der Redakteur eine Auswahl von Bildern vor, die in einer Bildergalerie angezeigt werden. Das Modul “Text [textile]” verwendet das Redaxo-AddOn “Textile”, das in Kapitel 3.4.7 Textile beschrieben wird.

Bei einer “blanko”-Installation von REDAXO ist die Liste der Module leer. Das heißt, Du musst die Module, die Du brauchst, entweder selbst erstellen oder fertige Module aus der Demo oder dem Downloadbereich in Deine installierte leere Version kopieren.

## Speichern & Lesen

In einem Modul kann man nicht direkt auf die Datenbank-Inhalte zugreifen, die Inhalte werden über sogenannte [REX_VARS](../rex_vars/README.md) zugänglich.

### Speichern

In den Modlen gibt es zwei Funktionen die es oft zu unterscheiden gilt: Hinzufügen und Aktualisieren. Im Modus Hinzufügen gibt es noch keine Daten aus der Datenbank, um Notices zu verhindern, solltest du an dieser Stelle nicht versuchen Datenbank-Daten in eine PHP-Variable zu laden.

Auch wichtig ist, dass Daten nach dem Speichern nicht zwangsläufig durch SQL erreichbar sind. Ggf. muss an dieser Stelle mit den `POST`-Daten gearbeitet werden.

### Auslesen

<table width="100%">
	<tr>
		<th>Variable</th>
		<th>Optionen</th>
		<th>Beschreibung</th>
	</tr>
	<tr>
		<td width="170px"valign="top">REX_VALUE[1-20]</td>
		<td width="170px">
			id=1-20<br>
			output=php | html<br>
		</td>
		<td valign="top">Liefert die Informationen die mit REX_INPUT_VALUE[1-20] abgespeichert wurde.</td>
	</tr>
	<tr>
		<td valign="top">REX_MEDIA[1-10]</td>
		<td>
			id=1-10<br>
			widget=1
		</td>
		<td valign="top">Liefert die Informationen die mit REX_MEDIA[1-10] abgespeichert wurde.</td>
	</tr>
	<tr>
		<td valign="top">REX_LINK[1-10]</td>
		<td>
			id=1-10<br>
			widget=1
		</td>
		<td valign="top">Liefert die Informationen die mit REX_LINK[1-10] abgespeichert wurde.</td>
	</tr>
	<tr>
		<td valign="top">REX_MEDIALIST[1-10]</td>
		<td>
			id=1-10<br>
			widget=1
		</td>
		<td valign="top">Liefert die Informationen die mit REX_MEDIALIST[1-10] abgespeichert wurde.</td>
	</tr>
	<tr>
		<td valign="top">REX_LINKLIST[1-10]</td>
		<td>
			id=1-10<br>
			widget=1
		</td>
		<td valign="top">Liefert die Informationen die mit REX_LINKLIST[1-10] abgespeichert wurde.</td>
	</tr>
</table>