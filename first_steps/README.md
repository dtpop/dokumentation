# Erste Schritte

Dieser Bereich erfordert, dass Sie Redaxo erfolgreich installiert haben. In diesem Kapitel wird erklärt, wie der Administrationsbereich kurz Backend grundlegend funktioniert. Wie Sie Seiten verwalten und Inhalte pflegen. Bitte beachten Sie dabei, dass Redaxo sehr flexibel ist und es schlussendlich auf den Entwickler ankommt, wie die Inhalte gepflegt werden könne.

## Was muss ich tun

Nach einer frischen Installation ohne Demo, ist meist nicht sofort ersichtlich, wie ein Benutzer vorgehen muss, um aus Redaxo ein nutzbares CMS zu erstellen. Tatsächlich bietet Redaxo viele nützliche Funktionen, aber diese müssen zu beginn erst einmal in Form gebracht werden. 

### Schritt 1: Artikel

Im ersten Schritt sollten zwei Artikel angelegt werden, Start und 404 Fehler. 

### Schritt 2: Einstellungen

Öffne nun die Einstellungen, in dem du auf System in der Seitennavigation klickst. Hier musst du - falls noch nicht in der Installation geschehen - alle Felder angeben. Für Start– und Fehlerartikel gibt bitte die beiden in Schritt 1 erstellten Artikel an. Klicke dazu auf das Symbol direkt neben dem Eingabefeld. Es öffnet sich ein Popup in welchem die Artikel gewählt werden können.

#### Schritt 2.1: Sprachen

Wird die Webseite mehrsprachig, klicke nun oben auf den Reiter "Sprachen". Mit einem klick auf das Plus können nun weitere Sprachen angelegt werden. Der Code wird schlussendlich in der URL verwendet. Weiteres zur URL später.

Lege eine neue Sprache an. Für Codes sollten zweistellige Sprachcodes genutzt werden: English = en und Deutsch = de. Falls eine Seite für Deutschland und für die Schweiz entwickelt werden, können Codes auch wie folgt definiert werden:

```
Deutschland = de_de
Schweiz = de_ch
Österreich = de_at
```

Das macht vor allem Sinn, wenn ein Unternehmen international vertreten ist und pro Land unterschiedliche Seiten und Inhalte publizieren möchte bzw. muss.

#### Schritt 2.2: Systemlog

Der Systemlog ist überwiegend nur für Entwickler geeignet. Hier werden Fehler aufgelistet, die zur Laufzeit aufgetreten sind. Warnungen werden Gelb hinterlegt und sind nicht so gravierend wenn es um den Ablauf der Webseite geht. Trotzdem sollten diese Fehlermeldungen verhindert werden. Nötigenfalls sollte hier ein fachkundiger Entwickler befragt werden.

Sollten rot hinterlegte Meldungen erscheinen, so sind schwere Fehler aufgetreten, die den Ablauf der Seite unterbrochen haben. An dieser Stelle sollte unbedingt herausgefunden werden, wo der Fehler liegt und wann er auftritt. Hierzu bitte unbedingt einen Entwickler fragen, falls der Fehler unklar sein sollte.

### Schritt 3: Template erstellen

Bitte öffne nun die Templates in der Seitennavigation. Mit einem Klick auf das Plus können neue Templates erstellt werden. Was genau Templates sind und wie sie funktionieren, kannst du hier lesen: [Redaxo Templates](templates/README.md).

### Schritt 4: Module erstellen

Module stellen die Schnittstelle zwischen der Datenbank und dem Benutzer dar. Im Backend werden sie als Formular ausgegeben, in welchem der Benutzer Daten und Inhalte eingeben kann - insofern das nötig ist. Im Frontend geben Module dann den Inhalt formatiert aus. Mit einem Klick auf das Plus, können Module erstellt werden. Wie genau Module funktionieren kannst du hier lesen: [Redaxo Module](modules/README.md).

### Schritt 5: Addons installieren

Addons helfen den Benutzern die Funktion ihrer Webseite über den Funktionsumfang von Redaxo hinaus zu erweitern. Dabei gibt es unterschiedliche Funktionsbereiche wie SEO, Events, Less/Sass-Support, Modulsammlungen und Social Media Inhalte laden. Wie Addons funktionieren kannst du hier lesen: [Addons installieren](addons/README.md).

### Schritt 6: Kategorien anlegen

Kategorien können in Redaxo als Seiten angesehen werden, da man sie beliebig tief verschachteln kann. Jede Kategorie kann mehrere Artikel besitzen, die theoretisch auch mit in die Navigation einfließen können. An diesem Punkt gibt es viele Ansätze und man sollte seine eigene Best Praxis finden. Hier gibt es eine Liste mit Workflows: [Workflows](http://book.redaxo.org/5.0/advanced/workflows/index.html). 