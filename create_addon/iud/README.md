# Install, update, delete

Wird ein Addon installiert, aktualisiert oder deinstalliert, werden je nach Aktion ein oder zwei Dateien ausgeführt.

## Install

Die Datei `install.php` wird direkt bei der Installation ausgeführt. Sie eignet vor allem um Tabellen zu erweitern, Dateien und Verzeichnisse zu kopieren und Variablen zu setzen bzw. zurückzusetzen.

Zusätzlich wird die Datei `install.sql` ausgeführt und installiert. Sollten Fehler im SQL-Code sein, wird die Installation mit einer Fehlermeldung unterbrochen.

## Uninstall

Die Datei `uninstall.php` wird ausgeführt wenn ein Addon deinstalliert wird. Sie eignet vor allem um Felder aus der Datenbank zu entfernen die zusätzlich hinzugefügt worden sind. Zudem können Dateien und Verzeichnisse bei bedarf gelöscht und Variablen und Einstellungen zurückgesetzt werden.

Zusätzlich wird die Datei `uninstall.sql` ausgeführt. Sollten Fehler im SQL-Code sein, wird die Installation mit einer Fehlermeldung unterbrochen. Hier können Tabellen wieder entfernt werden.

## Update

Die Datei `update.php` wird aufgerufen, sobald ein Addon aktualisiert wird. Hier kann die Datenbank oder das Dateisystem aktualisiert werden.

## Dateien und Verzeichnisse

Dateien und Verzeichnisse können in Redaxo5 ganz leicht kopiert und an anderer Stelle eingefügt werden. Wichtig ist dabei, dass alle Unterordner und Dateien kopiert werden.

Beispiel aus dem Addon `assets`. Die Dateien werden für den späteren Gebrauch in das Media-Verzeichnis kopiert.

```
$media = $this->getPath('media');
if (is_dir($media) && !is_dir(rex_path::media('assets/'))) {
  if (!rex_dir::copy($media, rex_path::media())) {
    throw new rex_functional_exception($this->i18n('install_cant_copy_files'));
  }
}
```

## SQL-Dateien und Variablen

In den SQL-Dateien stehen folgende Variablen zur Verfügung, mit denen die Installation verfeinert werden kann:

<table width="100%">
    <tr>
        <th>Variable</th>
        <th>Beschreibung</th>
    </tr>
	<tr>
		<td>%USER%</td><td>Liefert den Login-Namen des Users, dieser Wert ist im Setup nicht vorhanden.</td>
	</tr>
	<tr>
		<td>%TIME%</td><td>Aktueller Timestamp (php: time())</td>
	</tr>
	<tr>
		<td>%TABLE_PREFIX%</td><td>Ersatz für $REX['TABLE_PREFIX'] und wird standardmäßig durch rex_ ersetzt</td>
	</tr>
	<tr>
		<td>%TEMP_PREFIX%</td><td>Wird standartmäßig durch tmp_ ersetzt</td>
	</tr>
</table>


### Install

```
CREATE TABLE IF NOT EXISTS `%TABLE_PREFIX%table_name` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `visible` tinyint(1) NOT NULL,
 `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `query` varchar(100) NOT NULL,
 PRIMARY KEY (`id`), KEY `created_time` (`created_time`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
```

### Uninstall

```
DROP TABLE IF EXISTS `%TABLE_PREFIX%table_name`;
```