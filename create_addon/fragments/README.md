# Fragments / Subfragments

## Generell

Fragmente sind PHP-Dateien, die in einem oder mehrerer Addons wiederverwendet werden können. Dabei kann der Inhalt der Fragmente via definierten Variablen erweitert bzw. gesteuert werden.

Redaxo selbst liefert eine ganze Palette solcher Fragmete auf die ein Addon zugreifen kann. Diese Vorgehensweise ist sehr empfehlenswert, um das Backend einheitlich zu gestalten.

Ein Fragment muss im Verzeichnis `/fragments/` des Addons bzw. Plugins liegen.

Das folgende Beispiel, zeigt den Aufruf des Fragmentes `sections.php`.

```
<?php

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

Das Fragment `sections.php` wird sehr oft verwendet in Redaxo. Es ist möglich einen Titel und den Inhalt anzugeben. Das Design der Ausgabe wird zusätzlich durch die Variable `class` definiert. Im wesentlichen sind hier die Klassen `info` und `edit` möglich. `edit` erzeugt einen grünlichen Header mit gelblichen Formular-Body, während `info` einen blauen Header mit weißem Inhaltsbereich erzeugt. Weitere Klassen sind möglich.

### setVar html-Code

`setVar` kann auch HTML-Code übernehmen. Standardmäßig werden aber alle Inputs umgewandelt. Setzt man den dritten Parameter auf false, wird der HTML-Code unverändert weitergereicht.

## Fragment definieren

In einem Fragment können wir mit `$this->getVar('foo);` auf die Werte zugreifen, die wir mit `$fragment->setVar('class', 'info', false);` definiert haben.

```
	<?php
		$title = $this->getVar('title');
		$body = $this->getVar('body');
	?>

	<div class="block">
		<h1><?php echo $title;?></h1>
		<div class="body"><?php echo $body;?></div>
	</div>
```

## Subfragments

Damit auch in Fragmenten möglichst wenig Code wiederholt werden muss, kann man diesen wieder in Subfragmente unterteilen. Subfragmente können auf die selben Variablen zugreifen wie Fragmente. Das kann zum Beispiel für Galerien von Vorteil sein, indem man einen Wrapper definiert und alle Bilder als Subfragmente.

```
	<div class="gallery">
	<?php foreach($this->getVar('images') as $key => $image) {?>
		<?php echo $this->subfragment('gallery/images.php');
	<?php }?>
	</div>

```

In der Datei `images.php` kann man nach wie vor auf `$this->getVar('images');` zugreifen.