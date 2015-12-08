# Addon hochladen

In Redaxo ist es möglich Addons aus Redaxo heraus hochzuladen. Dazu benötigt man als erstes einen Account auf [Redaxo.org](http://www.redaxo.org/de/myredaxo/). Hier kannst du dich [registrieren](http://www.redaxo.org/de/myredaxo/registrierung/).

> Für das Forum musst du dich extra registrieren!

Nach der Anmeldung können neue Addons unter [Meine Addons](http://www.redaxo.org/de/myredaxo/meine-addons/) neue Addons hinzugefügt werden. Fülle die Felder aus, eine Bezeichnung die zu deinem Addon passt. Bitte verwende **nicht** das Prefix `rex_` für dein Addon.

Der AddOn-Key/Ordnername muss zwingend deinem Ordnernamen entsprechen, der in deinem späteren Zip steht.

Fülle die Beschreibungsfelder aus und ggf. eine Beispielseite.

## Neue Version

### Online

Neue Versionen können in diesem Formular hinzugefügt werden, dazu einfach auf `Versionen bearbeiten` klicken. Bei der Erstellung ist darauf zu achten, dass die Versionsnummer der Nummer in der Datei `package.yml` entspricht und zu welchen Redaxo-Versionen dieses Addon installiert werden kann.

### In Redaxo selbst

Der einfachere Weg ist der Upload direkt aus dem CMS über den Installer. Dazu benötigst du einen [API-Key](http://www.redaxo.org/de/myredaxo/mein-api-key/). Diesen kannst du im Installer unter Einstellungen mit deinem Redaxo.org-Login angeben.

Nachdem du das Addon angelegt hast, kannst du im Installer `eigene Addons hochladen`. Dieser Weg ist einfacher, denn der Installer lädt automatisch die neue Version aus der `package.yml` wenn man eine neue Version anlegen will. Außerdem können kleine Änderungen direkt gespeichert und hochgeladen werden.