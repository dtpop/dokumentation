# OUTPUT_FILTER


## Beispiel

HTML-Quellcode im Backend manipulieren. 

```
if (rex::isBackend()) { // Backend
  rex_extension::register('OUTPUT_FILTER',function(rex_extension_point $ep){
    $suchmuster = array ('<h4 class="rex-nav-main-title">AddOns</h4>');
    $ersetzen = array ('<h4 class="rex-nav-main-title">Hallo</h4>');
    $ep->setSubject(str_replace($suchmuster, $ersetzen, $ep->getSubject()));
  });
}
```

## Pjax soll die URL nicht ändern

Wenn in der Datei `package.yml` pjax:true ist, ändert PJAX auch die URL. Die URL wird nicht geändert, wenn data-pjax-no-history auf 1 gesetzt wird:

```
if(rex_get('page') == 'structure') {
  rex_extension::register('OUTPUT_FILTER', function($ep) {
    $Subject = str_replace('data-pjax-container="#rex-js-page-main"','data-pjax-container="#rex-js-page-main" data-pjax-no-history="1"',$ep->getSubject());
    return $Subject;
  });
}
```