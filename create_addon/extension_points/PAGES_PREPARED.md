#PAGES_PREPARED

Als Beispiel laden wir statt `/structure/pages/index.php` jetzt `/meinAddon/pages/index.php`.

```
rex_extension::register('PAGES_PREPARED',function($ep) {
  if (rex_be_controller::getCurrentPage() == 'structure') {
    $Page = rex_be_controller::getCurrentPageObject();
    $Page->setSubPath($this->getPath('pages/index.php'));
  }
});
```