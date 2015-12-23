# PJAX

Github: https://github.com/defunkt/jquery-pjax

## jQuery

Im Backend wird jQuery und eine benutzerdefinierte Version von jQuery UI verwendet. Die Inhalte der Seiten werden oft via PJAX geladen, an dieser Stelle würde die Ready-Funktion nicht greifen. REDAXO liefert aber ein ähnliches Ready-Event:

```
$(document).on('rex:ready', function (event, container) {
    // Code goes here
    // container.find('.my_class').click(function () {
    //     
    // });
});
```

## Package.yml

In der Datei `package.yml` kann für jede Seite und Unterseite pjax aktiviert werden.

```
page:
	pjax: true
	subpages:
		foo: {pjax: true, title: translate:foo}
		bar: {pjax: false, title: translate:bar}
```

## Parameter

@todo parameter `data-pjax="true"`

## Externe Scripte laden

Scripte die in der Rückgabe von PJAX geladen werden über `document.write` müssen speziell behandelt werden. Im Fall von Google Maps darf man das Script nicht mehrfach laden. Das heißt es muss vorab geprüft werden, ob `var google` bereits geladen worden ist.

Google und Youtube als Beispiel, rufen jeweils eine javascript Funktion auf, sobald die API geladen wurde. Diese kann als `ready` Funktion genutzt werden. Für Google kann diese Funktion Definiert werden, Youtube hingegen ruft einfach die Funktion `onYouTubeIframeAPIReady()` auf. Genaueres solltest Du in der Dokumentation der jeweiligen Library finden

### Beispiel

```
function loadScript(src){
  var script = document.createElement("script");
  script.type = "text/javascript";
  document.getElementsByTagName("head")[0].appendChild(script);
  script.src = src;
}

// load all libraries: &libraries=places
// setup callback when API is loaded: callback=initialize
if(typeof google === "undefined") {
  loadScript('http://maps.googleapis.com/maps/api/js?v=3&sensor=false&libraries=places&callback=initialize');
} else {

	// call initialize manually
	$(document).on('ready pjax:success',function(){
  		if(typeof google !== "undefined")
    		initialize();
		});
	}
	
}
```

Da dieser Vorgang auch beim Speichern nochmal ausgeführt wird, gibt es unweigerlich eine Fehlermeldung, da das Google-Maps-Element nicht existiert:

```
function initialize(){

  var MapElement = document.getElementById("map_canvas");

  if(MapElement === null)
    return;
    
  // Run your Maps-Code
}
```
