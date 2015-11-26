# Seiten und Unterseiten

In Redaxo gibt es drei Ebenen in denen Navigationspunkte erscheinen können. Der erste Punkt[1] ist die Navigation, die wir in Hauptmenü, Addons und selbstdefinierte Bereiche unterscheiden. Der zweite Punkt[2] sind die Tabs, die man über dem Addon-Inhalt sieht, wenn man in der Navigation einen Punkt wählt. Darunter findet man Punkt Drei[3], dass sind sogenannte Subpages.

![Redaxo Navigations](../../assets/create_addon/pages/redaxo_pages.png)

## Navigationslink

In der Navigation haben wir von Haus aus zwei Sektionen. Hauptmenü und Addons. Alle Seiten die wir in einem Addon - nicht in einem Plugin - als Page definieren, landen unter Addons. Geben wir der Seite aber einen Block z.B. System, erscheint der Eintrag im Hauptmenü:

### Addon-Link

```
page:
  title: 'translate:title'  
  prio: 1
  perm: slice_ui[]
  icon: rex-icon rex-icon-copy
```

<table width="100%">
    <tr>
        <th>Option</th>
        <th>Beschreibung</th>
    </tr>
    <tr>
		<td>title</td><td>Wird in der Navigation als Titel verwendet. Siehe [Sprachen](create_addon/languages/README.md)</td>
	</tr>
	<tr>
		<td>prio</td><td>Definiert die Sortierung in einem Navigationsblock.</td>
	</tr>
	<tr>
		<td>perm</td><td>Diese Benutzerrechte müssen gegen sein. Siehe [Benutzer und Rollen](create_addon/user_rolls/permission.md)</td>
	</tr>
	<tr>
		<td>icon</td><td>Fügt eine CSS-Klasse hinzu. Das Icon wird über FontAwesome geladen. Ggf. muss das Icon noch in einer eigenen CSS-Datei definiert werden.</td>
	</tr>
</table>