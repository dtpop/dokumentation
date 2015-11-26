# Package YML

Die Standardkonfigurationen werden in die Datei package.yml gelagert. Die Sprache für dieses Format ist YML was so viel wie `Why a Markup Language` bedeutet. YML wurde von XML inspiriert, verzichtet allerdings auf Markup und arbeitet mit Einrückung.

Die Datei package.yml bildet die Basis eines jeden Addons. Tatsächlich braucht es nicht mehr als folgendes Code-Schnippsel um ein funktionsloses aber lauffähiges Addon zu entwickeln:

##Grundsätzlicher Aufbau

```
package: AddonName
version: 'x.x.x'
author: Max Mustermann
supportpage: www.redaxo.org/de/forum/
```

## Voraussetzungen

Damit ein Addon bzw. ein Plugin keine Fehlermeldungen zeigt, weil Teile der benötigten Software (Addons, PHP-Version,...) nicht installiert sind, definiert man in der `package.yml` Abhängigkeiten. Dieser Block wird einfach unter den Standardpart.


```
package: AddonName
version: 'x.x.x'
author: Max Mustermann
supportpage: www.redaxo.org/de/forum/


requires:
  php:
    php: >= 5.5
    extensions: [zlib]
  packages:
    structure: >= 5.0-alpha7
  plugins:  
    be_style: >= 5.0-alpha7
```

## Einstellungen

Addons benötigen Einstellungen, diese können hier definiert werden. Als Beispiel wird die Konfiguration im Core verwendet:

```
load: early
system_plugins: [redaxo]
compile: 0
```

##Optionen

<table width="100%">
    <tr>
        <th>Option</th>
        <th>Beschreibung</th>
    </tr>
    <tr>
		<td>package</td><td>(Beschreibung ausstehend)</td>
	</tr>
    <tr>
		<td>version</td><td>(Beschreibung ausstehend)</td>
	</tr>
    <tr>
		<td>author</td><td>(Beschreibung ausstehend)</td>
	</tr>
	<tr>
		<td>supportpage</td><td>(Beschreibung ausstehend)</td>
	</tr>
	<tr>
		<td>requires</td><td>(Beschreibung ausstehend)</td>
	</tr>
	<tr>
		<td>requires / php</td><td>(Beschreibung ausstehend)</td>
	</tr>
	<tr>
		<td>requires / packages</td><td>(Beschreibung ausstehend)</td>
	</tr>
	<tr>
		<td>requires / plugins</td><td>(Beschreibung ausstehend)</td>
	</tr>
	<tr>
		<td>load</td><td>(Beschreibung ausstehend)</td>
	</tr>
	<tr>
		<td>system_plugins</td><td>(Beschreibung ausstehend)</td>
	</tr>
	<tr>
		<td>compile</td><td>(Beschreibung ausstehend)</td>
	</tr>
</table>