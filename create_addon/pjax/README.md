# PJAX

Github: https://github.com/defunkt/jquery-pjax

## jQuery

Im Backend wird jQuery und eine benutzerdefinierte Version von jQuery UI verwendet. Die Inhalte der Seiten werden oft via PJAX geladen, an dieser Stelle würde die Ready-Funktion nicht greifen. PJAX liefert aber ein ähnliches Ready-Event:

```
$(document).on('ready pjax:success',function(){
    // Code goes here
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