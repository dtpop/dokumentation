# API

Ein Addon kann für den öffentlichen Zugriff eine API zur verfügung stellen. Dazu benötigt das Addon eine Klasse deren Namen mit `rex_api_` beginnt.

Diese API kann zum Beispiel wichtig bei Daten wie Event-Kalendern und News sein, Benutzer von außerhalb können dann mit der API auf diese Daten zugreifen.

## API Aufrufen

Ein simpler Aufruf ohne weitere Parameter, benötigt lediglich den Namen des API-Aufrufes: `index.php?rex-api-call=event_calendar`. Es ist aber oft erforderlich, dem Benutzer mehr Rechte bzw. Handlungsmöglichkeiten zu bieten. Dazu können einfach weitere Parameter angehängt werden: `index.php?rex-api-call=event_calendar&function=getEvents&sort=id-desc&min-date=TIMESTAMP`.

> Die Parameter sind frei wählbar und haben genau die Funktion, die der Entwickler ihnen zuweist.

## Beispiel Event-Kalender

Die API benötigt mindestens die Methode `execute()`, denn diese wird bei einem Aufruf von Redaxo benutzt. Aus der Methode `execute()` heraus kann dann anhand der URL-Parameter jede beliebige weitere Methode oder Klasse aufgerufen werden.

```
class rex_api_event_calendar extends rex_api_function {

	// Pflicht-Methode
	public function execute() {
		// Code goes here 
		$message = 'erfolgreich ausgeführt!';
		
        $result = new rex_api_result(true, $message);
        return $result;
	}
}
```

## Weitere Möglichkeiten

Da Redaxo nicht zwangsläufig als CMS für Webseiten genutzt werden muss, kann es durchaus auch als Datenbank verwendet werden. Hat der Kunde den Wunsch Events, Nachrichten, Produkte, oder Datenlisten wie Geburtstage, Termine, Logs, Ferien- und Feiertage oder hat Informationen für seine Filialen, können diese leicht in Redaxo gepflegt werden und von Filialen und externen Benutzer via API abgerufen werden.

- Download-Archive
- Termine
- Kalender
- News-Archive
- Data-Storage