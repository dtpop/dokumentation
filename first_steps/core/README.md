# Standardfunktionen von Redaxo

## Import / Export

###Backup

Unter dem Navigationspunkt `Im-/Export` können Sie wählen, ob sie die Datenbank oder Ihre Dateien sichern wollen und ob diese auf dem Server gespeichert oder heruntergeladen werden sollen. Bei einer Speicherung auf dem Server sollte sichergestellt werden, dass ausreichend Speicherplatz auf dem Server vorhanden ist, da es sonst zu Problemen mit der Webseite führen kann.

Sichern Sie Ihre Daten an einem sicheren Ort auf Ihrer Festplatte oder einer Cloud wie Dropbox, Google Drive, etc.

###Backup importieren

Ihre gesicherten Daten lassen sich jeder Zeit wieder einspielen. Wählen Sie unter dem Navigationspunkt `Im-/Export` den Reiter `Importieren`. Wenn Ihre Daten lokal auf Ihrem Rechner liegen, können Sie sie hier hochladen, indem Sie einen der `Datei auswählen` Buttons klicken. Bitte Achten Sie darauf dass der Datenbankimport eine `.sql`-Datei benötigt.

Liegen Ihre Sicherungen auf dem Server, müssen sie zuerst noch den Untermenüpunkt `Vom Server laden` wählen. Hier können Sie die von Ihnen erstellten Sicherungen wieder einspielen.

###Demo nachträglich importieren

Falls Sie während der Installation keine Demo-Inhalte installiert haben, können Sie diese nachträglich installieren. Dazu klicken Sie im Administrationsbereich auf den Navigaitonspunkt `Im-/Edxport`, dann über dem Inhalt auf den Reiter `Import` und schlussendlich auf den Punkt `Vom Server laden`. Hier können sie Beispielsdateien und Inhalte Importieren.  

## Formulare

## Sprachen (Platzhalter)

Auf einigen Seiten kann es vorkommen, dass Inhalte nicht editierbar sind, aber statisch in verschiedenen Sprachen ausgegeben werden sollen. Dazu können unter dem Navigationspunkt `Platzhalter` Platzhalter definieren die dann im Inhalt ersetzt werden.

In Redaxo4 war es noch üblich, diese Platzhalter mit zwei oder drei Rauten zu markieren: z.B. ##FirstName## wurde ersetzt mit Vorname, Firstname oder prénom - falls der Platzhalter FirstName definiert wurde.

In Redaxo5 kann dieses Muster übernommen werden, standardmäßig sind zwei geschweifte Klammern vor und nach dem Begriff eingestellt. Als Endkunde bekommen Sie im Normalfall einen Satz Platzhalter, die auf der ganzen Seite von einem Entwickler oder einer Agentur eingesetzt wurden. Sie müssen diese Begriffe nun nur noch Ihr wünschen anpassen. 

## Dateiverwaltung (Medienpool)