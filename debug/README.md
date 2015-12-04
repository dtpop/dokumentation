# Debug, Errorhandling

Redaxo5 geht sehr Fortschrittlich mit Fehlern um. Alle Fehler werden gespeichert und auf der Seite `System/Systemlog` ausgegeben und je nach Fehler-Typ eingefärbt. Außerdem lassen sich die Logs einfach am Ende der Liste löschen.

## Fehler nach einem Update

Wenn du Redaxo oder eines der Addons mit Git oder FTP aktualisiert hast, also ohne den Installer, sollte auch unbedingt folgende URL eingetragen werden: `redaxo/index.php?page=system/settings&func=updateassets`. Diese Seite aktualisiert alle Assets (Javascript, Fonts, Styles, …) aller Addons.

## Fehler entdeckt

Wenn du dir nicht erklären kannst, wo der Fehler liegt, hilft es meistens die Addons zu deaktivieren. Am Besten fängt du mit den Addons an, die du zuletzt installiert hast. Tritt der Fehler nicht mehr auf, aktiviere ein Addon nach dem Anderen bis der Fehler wieder auftritt. Melde den Fehler bei seinem Entwickler. 