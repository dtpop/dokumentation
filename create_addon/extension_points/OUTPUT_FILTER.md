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