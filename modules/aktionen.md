# Aktionen

Es gibt in der Standardkonfiguration von Redaxo drei Events bzw. Aktionen für Module die automatisch ausgeführt werden.

<table width="100%">
    <tr>
        <th>Aktion</th>
        <th>Beschreibung</th>
    </tr>
	<tr>
		<td>Preview</td><td>Wird vor dem Anzeigen des Moduls ausgeführt.</td>
	</tr>
	<tr>
		<td>Presave</td><td>Wird vor dem Speichern des Moduls ausgeführt.</td>
	</tr>
	<tr>
		<td>Postsave</td><td>Wird nach dem Speichern des Moduls ausgeführt.</td>
	</tr>
</table>

## Aktion erstellen

Es ist wichtig die korrekte Aktion zu verwenden, Presave eignet sich sehr gut um Daten vor dem Speichervorgang zu Manipulieren. Postsave eignet sich um Daten nach dem Speichervorgang weiter zu verarbeiten.

### Events

Es ist ratsam sich ein Event genau auszusuchen, Daten zu manipulieren bzw. zu Formatieren macht für das DELETE-Event in der Regel keinen Sinn.

### Beispiel

@todo