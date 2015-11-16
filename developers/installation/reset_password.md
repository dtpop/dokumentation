# Passwort vergessen

Falls Sie Ihr Passwort vergessen haben, müssen Sie dieses in der Datenbank zurücksetzen. Falls Sie in dieser Richtung zu wenig bzw. keine Erfahrung besitzen, wenden Sie sich bitte an Ihren Entwickler oder Hoster.

Suchen Sie die Datenbank die Sie bei der Installation angegeben haben und öffnen die Tabelle `rex_user`. Suchen Sie den Eintrag mit Ihrem Login und bearbeiten diesen. Der Editiervorgang ist von einer phpMyAdmin-Version zur nächsten unterschiedlich möglich.

Ersetzen Sie das kryptische Passwort durch folgende Zeile:

```
$2y$10$j3WXi9dV9ft0osXCj/QfS.XGXYEnCxFEHx8LJ/PbrvjOjbKObrCV2
```

Diese Zeile entspricht dem Passwort `123456789`. Melden Sie sich nun mit Ihrem Benutzernamen an und ändern Ihr Passwort in der Benutzerverwaltung.

> **Wichtig:** Ihr Passwort muss unter allen Umständen geeändert werden, um Fremdzugriffe zu verhindern! Dieses Passwort wird vermutlich als ersten von Dritten getestet, die sich unerlaubt zugriff verschaffen wollen!