# Formulare

Im Backend können Formulare entweder selbst geschrieben werden mit einfachem HTML und PHP oder mit den Addons `YForm` und `Form`. Es ist zu empfehlen `XForm` zu verwenden, da es ein fester Bestandteil des Core ist, allerdings kann auch `YForm` genutzt werden, das hat aber den Nachteil, dass die Benutzer jedes Mal `YFrom` vorher installieren müssen.

Wenn ihr ein Don entwickelt, kann es schnell passieren, dass andere Entwickler eure Backend-Formulare bzw. Seiten um weitere Eingabefelder erweitern möchten. Mit einem selbstgebauten Formular wird das schwierig und wäre nur möglich, wenn ihr euer Formular mittels [Extension Points](../extension_points/0.README.md) erweiterbar macht. 

Die Formular-Klassen bieten von Haus aus `extension points`, die es ermöglichen, Formulare zu erweitern.

Eine Möglichkeit wäre es, in eurem Addon die aktuelle Seite abzufragen. Wolltest du nun die Einstellungen erweitern, müsstest du als erstes Prüfen, ob bereits `extension points` existieren, oder ob eine Formular-Klasse genutzt wurde. Falls eine Klasse verwendet wurde, kannst du wie folgt vorgehen:

##YForm

```
// YForm
if(rex_get('page','string') === 'system/settings') {
	// EP YFORM_GENERATE übergibt im Subject die Instanz des Formulars
}

```

## Extension Points

Manche Seiten wie `Struktur` bieten entsprechend `extension points` an, suche einfach mit deinem Editor nach den `extension points` aus diesem Beispiel im `structure`-Addon:


```
// Beispiel aus Metainfo

$catHandler = new rex_metainfo_category_handler();

rex_extension::register('CAT_FORM_ADD', [$catHandler, 'extendForm']);
rex_extension::register('CAT_FORM_EDIT', [$catHandler, 'extendForm']);

rex_extension::register('CAT_ADDED', [$catHandler, 'extendForm']);
rex_extension::register('CAT_UPDATED', [$catHandler, 'extendForm']);

rex_extension::register('CAT_FORM_BUTTONS', [$catHandler, 'renderToggleButton']);
```