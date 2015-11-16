# Sprachen

Die Sprachen werden in Redaxo im Addon-Verzeichnis `lang` abgelegt. Dabei musst ein Länder-Code wie `de_de` oder `en_en` verwendet werden. Die Dateiendung lautet `.lang`.

Die Syntax der Sprachdateien erinnert an .htaccess-Dateien. Rauten werden als Kommentare ignoriert vom Sprach-Parser

```
# Addon: addon_name
#---------------

# Addon-Eintrag und Addon-Titel
addon_name_title = Seitentitel für das Addon
addon_name_menu_link = Link in der Navigation

```

Es gibt unterschiedliche Möglichkeiten um auf die Sprachvariablen eines Adens zuzugreifen.

##translate:string in der package.yml

In einem Addon selbst, ist es nicht nötig den ganzen Sprach-Strang zu notieren, `translate:title` verweist automatisch auf `addon_name_title`. Bei Sprach-Strings aus anderen Addons ist es erforderlich den kompletten String anzugeben.
 
```
title: 'translate:title'
title: 'translate:ein_anderes_addon_title'
```


##Mit rex_i18n

```
<?php
  echo rex_i18n::msg('addon_name_title');
?>
```