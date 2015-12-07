# Rex Vars

Im Quelltext gibt es zwei Möglichkeiten Daten aus einer Datenbank oder von einem Addon zu bekommen. Die eine ist mit PHP und entsprechenden Methoden die zur Verfügung stehen. Die zweite Möglichkeit ist der Einsatz von sogenannten `REX_VARS`. REX_VARS werden von Redaxo in Inhalte umgewandelt.

Neben einer Reihe vordefinierter Standardvariablen, kann jedes Addon weitere Variablen zur Verfügung stellen.

## Eigene Variablen

Um eine Variable zu erstellen, benötigt Redaxo im lib-Verzeichnis des Addons oder Plugins eine Klasse deren Namen mit `rex_var_` beginnt und die von `rex_var` erbt.

### Beispiel-Code

```
<?php

class rex_var_lorem extends rex_var {
  
  protected function getOutput() {
    return self::quote('Lorem Ipsum!');
  }
}
```

Mit dem oben gezeigten Code, können wir nun die Variable `REX_LOREM[]` verwenden. Die Methode `getOutput();` liefert uns schlussendlich den gewünschten Inhalt als ausführbaren Code. Um einfach nur Text bzw. HTML-Code auszugeben, muss dieser mit der vererbten Methode `self::quote();` als String maskiert werden.

Um ein nutzbares Array auszugeben, kann man das Array mit [var_export](http://php.net/manual/de/function.var-export.php) zurückgegeben werden.

## Standard Variablen

<table width="100%">
    <tr>
        <th>Variable</th>
        <th>Beschreibung</th>
    </tr>
	<tr>
		<td>REX_ARTICLE_ID</td><td>Liefert die Artikel ID des aktuell geladenen Artikels.</td>
	</tr>
	<tr>
		<td>REX_SLICE_ID</td><td>Liefert die Slice/Modul ID des aktuell gezeigten Slices/Ausgabe-Modules.</td>
	</tr>
	<tr>
		<td>REX_MODULE_ID</td><td>Liefert die ID des Modules.</td>
	</tr>
	<tr>
		<td>REX_CLANG_ID</td><td>Liefert die ID der aktuell ausgegebenen Sprache</td>
	</tr>
	<tr>
		<td>REX_CATEGORY_ID</td><td>Liefert die Kategorie ID der angezeigten Seite.</td>
	</tr>
	<tr>
		<td>REX_TEMPLATE_ID</td><td>Liefert die ID des Templates, welches für die aktuelle Ausgabe verwendet wird.</td>
	</tr>
</table>

## Standard Variablen im Backend

<table width="100%">
    <tr>
        <th>Variable</th>
        <th>Beschreibung</th>
    </tr>
	<tr>
		<td>REX_USER_ID</td><td>Liefert die Benutzer ID des angemeldeten Benutzers.</td>
	</tr>
	<tr>
		<td>REX_USER_LOGIN</td><td>Liefert den Login-Namen des angemeldeten Benutzers.</td>
	</tr>
</table>