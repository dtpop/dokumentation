# PJAX

Github: https://github.com/defunkt/jquery-pjax

##jQuery

Im Backend wird jQuery und eine benutzerdefinierte Version von jQuery UI verwendet. Die Inhalte der Seiten werden oft via PJAX geladen, an dieser Stelle würde die Ready-Funktion nicht greifen. PJAX liefert aber ein ähnliches Ready-Event:

```
$(document).on('ready pjax:success',function(){
    // Code goes here
});
```