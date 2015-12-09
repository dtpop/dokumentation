# Meta-Felder

Wenn ein Addon neue Meta-Felder benötigt, können diese bei der Installation mit der Funktion `rex_metainfo_add_field` hinzugefügt werden:

## Funktion
```
rex_metainfo_add_field($title, $name, $priority, $attributes, $type, $default, $params = null, $validate = null, $restrictions = '')
```

## Beispiel

```
rex_metainfo_add_field('Nicht in der Copyrightliste ausgeben', 'med_no_copyright_out', '3','','5','','','','');
```