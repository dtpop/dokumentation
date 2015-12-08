# Datenbank

## Select

```
$sql = rex_sql::factory();
$sql->setTable(rex::getTablePrefix().'foo_bar');
$sql->setWhere(['id'=>'2']);
$sql->select();

// Alternative Schreibweise

$sql = rex_sql::factory();
$sql->setTable(rex::getTablePrefix().'foo_bar')
	->setWhere(['id'=>'2'])
	->select();
```

### Einträge auslesen

```
if($sql->getRows()) { // nicht 0!
	while($sql->hasNext()) {
		echo $sql->getValue('name');
		echo '<br>';
		$sql->next(); // nächster Eintrag laden. 
	}
}
```

### setWhere

```
// Array Key => Value
$sql->setWhere( [Feld => Wert, Feld2 => Wert2] );

// PDO Keys
$sql->setWhere( "Feld = :Feld AND Feld2 = :feld2 ", [feld => Wert, feld2 => Wert2] );

// SQL-String für komplexe Queries
$sql->setWhere( "Feld = 'Wert' AND Feld2 = 'Wert2'" );
```