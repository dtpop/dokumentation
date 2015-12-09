# Weiteres

## Debug

Um eine Abfrage zu debuggen, kann man mit $sql->setDebug(); arbeiten. In Redaxo4 wurde dazu noch $sql->setdebug = true; verwendet:

```
$sql = rex_sql::factory();
$sql->setDebug();
$sql->setTable(rex::getTablePrefix().'foo_bar'); // rex_foo_bar
$sql->setWhere(['id'=>'2']);
$sql->select();
```

## Daten als Array ausgeben

```
$result = rex_sql::factory()
	->setTable(rex::getTablePrefix().'foo_bar')
	->setWhere(['id'=>'2'])
	->select()
	->getArray();
echo '<pre>'.print_r($result,1).'</pre>';
```

## Query direkt eingeben

```
$result = rex_sql::factory()
	->setQuery("SELECT * FROM ".rex::getTablePrefix()."foo_bar WHERE foo = bar")
	->getArray(); // als Array ausgeben
echo '<pre>'.print_r($result,1).'</pre>';
```
