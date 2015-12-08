# Datenbank

## Standard

### Select

```
$sql = rex_sql::factory();
$sql->setTable(rex::getTablePrefix().'foo_bar'); // rex_foo_bar
$sql->setWhere(['id'=>'2']);
$sql->select();

// Alternative Schreibweise

$sql = rex_sql::factory();
$sql->setTable(rex::getTablePrefix().'foo_bar')
	->setWhere(['id'=>'2'])
	->select();
```

#### Einträge auslesen

```
if($sql->getRows()) { // nicht 0!
	while($sql->hasNext()) {
		echo $sql->getValue('name');
		echo '<br>';
		$sql->next(); // nächster Eintrag laden. 
	}
}
```

#### setWhere

```
// Array Key => Value
$sql->setWhere( [Feld => Wert, Feld2 => Wert2] );

// PDO Keys
$sql->setWhere( "Feld = :Feld AND Feld2 = :feld2 ", [feld => Wert, feld2 => Wert2] );

// SQL-String für komplexe Queries
$sql->setWhere( "Feld = 'Wert' AND Feld2 = 'Wert2'" );
```

### Insert

```
$newPost->setTable(rex::getTablePrefix().'foo_bar'); // rex_foo_bar
$newPost->setValue('Feld1',$Wert1);
$newPost->setValue('Feld2',$Wert2);
$newPost->setValue('Feld3',$Wert3);
$newPost->setValue('Feld4',$Wert4);

try {
  $newPost->insert();
} catch (rex_sql_exception $e) {
  echo rex_view::warning($e->getMessage());
}
```

### Update

```
$newPost->setTable(rex::getTablePrefix().'foo_bar'); // rex_foo_bar
$newPost->setWhere([ 'foo' => 'bar' ]);
$newPost->setValue('Feld1',$Wert1);
$newPost->setValue('Feld2',$Wert2);
$newPost->setValue('Feld3',$Wert3);
$newPost->setValue('Feld4',$Wert4);

try {
  $newPost->update();
} catch (rex_sql_exception $e) {
  echo rex_view::warning($e->getMessage());
}
```

### Delete

```
$newPost->setTable(rex::getTablePrefix().'foo_bar'); // rex_foo_bar
$newPost->setWhere([ 'foo' => 'bar' ]);

try {
  $newPost->delete();
} catch (rex_sql_exception $e) {
  echo rex_view::warning($e->getMessage());
}
```

## Weiteres

@todo