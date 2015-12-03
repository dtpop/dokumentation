# Config vs. Property

In R5 gibt es zwei Möglichkeiten, Daten für ein Addon zu speichern, die Erste (Config) Speichert in die Datenbank und die Zweite (Property) sind eher flüchtige Informationen, die als Ersatz für die `$REX` Variable aus Redaxo 4 dienen.


## Boot.php

In der Datei `boot.php` kann wie folgt vorgegangen werden:

```
$this->setConfig('key','value');
$this->getConfig('key');

$this->setProperty('key','value');
$this->getProperty('key','value');
```

## Klasse / Addon

Die Konfiguration eines Addons kann in einer Klasse wie folgt Ausgelesen werden: 

```
class foo {
	public function bar() {
		$addon = rex_addon::get('AddonName');
		
		$addon->setConfig('key','value');
		$addon->getConfig('key');

		$addon->setProperty('key','value');
		$addon->getProperty('key','value');
	}
}
```

## Klasse / Plugin

Die Konfiguration eines Plugins kann in einer Klasse wie folgt Ausgelesen werden: 

```
class foo {
	public function bar() {
		$plugin = rex_plugin::get('AddonName','PluginName');
		
		$plugin->setConfig('key','value');
		$plugin->getConfig('key');

		$plugin->setProperty('key','value');
		$plugin->getProperty('key','value');
	}
}
```