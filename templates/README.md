# Templates

Unter `Templates` können neue Templates angelegt werden. Ein Template ist so zu sagen die Startdatei bzw. `index.html`. Mit Hilfe eines Templates wird das Layout einer Seite (eines Artikels) festgelegt. Hier wird die generelle Struktur des Artikels einschließlich der Navigation definiert. Metatags, Stylesheets und Javascript können eingebunden werden.

Alle Artikel, denen ein bestimmtes Template zugewiesen wird, erhalten dadurch ein einheitliches Layout. Der artikelspezifische Inhalt wird jeweils über die Funktion $this->getArticle() oder die globale Variable REX_ARTICLE[] eingefügt.

Es können Templates erstellt werden, die in den Artikeln selektiert werden sollen, oder welche, die in andere Templates eingebunden werden sollen.

## Templates im Dateisystem

### Developer-Addon

Templates, Module und Aktionen können wie in R4 auch mit dem Developer-Addon generiert werden. Das Addon speichert alle Dateien in dem Verzeichnis `/redaxo/data/addons/developer/` ab.

### Sync

@todo

## Head

Für diesen Teil wird das Addon yReqrite benötigt:

```
<head>
    <?php
      $seo = new rex_yrewrite_seo();
      echo $seo->getTitleTag(); // Title-Tag
      echo $seo->getDescriptionTag(); // Meta-Description-Tag
      echo $seo->getRobotsTag(); // Meta-Robots-Tag
    ?>
</head>
```

## Logo einbinden

```
<img src="<?php echo rex_url::assets('default/img/logo.png');?>" alt="*" title="*">
```

## jQuery Einbinden


```
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo rex_url::assets('default/js/lib/jquery-2.1.1.min.js');?>"><\/script>')</script>
```

## Navigation

```
@todo rex_navigation();
```

## Sprachwechsler

```
<ul class="lang">
  <?php foreach(rex_clang::getAll() as $key => $lang) {?>
  <li<?php echo (rex_clang::getCurrentId()===$lang->getId()?' class="active"':'');?>>
    <a target="_self" href="<?php echo rex_getUrl('REX_ARTICLE_ID',$lang->getId());?>" hreflang="<?php echo $lang->getCode();?>">
      <abbr lang="<?php echo $lang->getCode();?>" title="<?php echo ucfirst($lang->getName());?>"><?php echo $lang->getCode();?></abbr>
    </a>
  </li>
  <?php }?>
</ul>
```

1. Alle Sprachen laden: `rex_clang::getAll()`
- Aktive Sprache: `rex_clang::getCurrentId() === $lang->getId();`
- Verlinken