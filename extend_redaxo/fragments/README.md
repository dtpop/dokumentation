# Fragments / Subfragments

Fragmente sind PHP-Dateien, die in einem oder mehrerer Addons wiederverwendet werden können. Dabei kann der Inhalt der Fragmente via definierten Variablen erweitert bzw. gesteuert werden.

Redaxo selbst liefert eine ganze Palette solcher Fragmete auf die ein Addon zugreifen kann. Diese Vorgehensweise ist sehr empfehlenswert, um das Backend einheitlich zu gestalten.

Das folgende Beispiel, zeigt den Aufruf des Fragmentes `sections.php`.

```
$sections = '';
$content = 'Lorem Ipsum Dolor Sit Amet…';

$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', 'Seitentitel - Lorem Ipsum');
$fragment->setVar('body', $content, false);

$sections = $fragment->parse('core/page/section.php');

echo $sections;
```

1. Fragment laden mit `new rex_fragment();`
* Fragment-Variablen setzen (Variablen können dem Fragment entnommen werden)
* Fragment ausgeben `$fragment->parse('pfad/zum/fragment');`

Das Fragment `sections.php` wird sehr oft verwendet in Redaxo