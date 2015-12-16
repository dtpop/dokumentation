# Kategorien & Artikel

> Dieser Artikel ist unvollständig. 

Redaxo unterscheidet zwischen Kategorien und Artikel. Inhalte werden in Artikel gespeichert und Artikel in Kategorien. Kategorien eignen sich am Besten um eine Navigation zu erstellen, wobei Artikel eher als Container dienen.

## Artikel

Die Methoden zum laden weiterer Artikel besitzen meist auch einen Parameter zum ignorieren von Offline-Inhalten.

```
// StartArtikel
$SiteStartArticle   = rex_article::getSiteStartArticle();

// Aktuelle Seiten-ID
$aktuelleArtikelID  = rex_article::getCurrentId();
// $aktuelleArtikelID = REX_ARTICLE_ID;

// 404-Artikel
$NotfoundArticleId  = rex_article::getNotfoundArticleId();
 
// Aktuelle Kategorie
$cat = rex_category::get(REX_CATEGORY_ID);


// Alle Artikel zurückgeben
$articles = $cat ? $cat->getArticles(true) : [];

// Online / Offline?
$artikelStatus    = rex_article::getCurrent()->getValue('status');
//$artikelStatus  = REX_ARTICLE[field='status'];
//$artikelStatus  = $this->getValue("status");
```

## Kategorien

Die Methoden zum laden weiterer Kategorien besitzen meist auch einen Parameter zum ignorieren von Offline-Inhalten.

```
// Aktuelle Kategorie
$cat = rex_category::getCurrent();
// $cat = rex_category::get(REX_CATEGORY_ID);
// $cat = rex_category::get(3);

// Root
$rootCategories = rex_category::getRootCategories();

// Unterkategorien
$subcategories = rex_category::getCurrent()->getChildren();
```

## Meta-Informationen

Meta-Informationen können mit dem Core-Addon `metainfo` erstellt werden. In Redaxo 5 können diese Informationen dann jeweilig in den Artikel, Kategorien und im Medienpool genutzt werden.

### Auslesen

In Redaxo 5 ist es nicht mehr notwendig das Prefix `cat_` oder `art_` zu verwenden, dass Programm weiß woher die Informationen kommen. Der Parameter wird notwendig, sobald Artikel und Kategorie einen gleichnamigen Wert aufweisen.

```
$Category = rex_category::getCurrent()->getValue('metafeld');
$Article = rex_article::getCurrent()->getValue('metafeld');
```