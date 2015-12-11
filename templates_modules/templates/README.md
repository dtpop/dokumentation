# Templates erstellen

In diesem Beispiel, wird vorausgesetzt, dass alle Assets wie CSS-, JS- und Hintergrundbilder in `/assets/default/css|js|img` liegen.

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