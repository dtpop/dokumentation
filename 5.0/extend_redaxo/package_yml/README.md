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
