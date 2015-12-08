# Datei handling

Eineige Addons müssen eigene Dateien installieren, dass können unter anderem Module, Templates und Aktionen sein für das [Developer-](http://www.redaxo.org/de/download/addons/?addon_id=338&searchtxt=developer&cat_id=-1) und [Sync-Addon](http://www.redaxo.org/de/download/addons/?addon_id=1258&searchtxt=sync&cat_id=-1).

## rex_dir

Die Klasse rex_dir hilft besonders dabei ganze Verzeichnisse mit Unterverzeichnissen und Dateien zu kopieren

Datei `install.php`

```
$fooBar = $this->getPath('foo'); // addon/foo/
if (is_dir($fooBar)) {
  if (!rex_dir::copy($fooBar, rex_path::media())) { // ROOT/media/
    throw new rex_functional_exception($this->i18n('install_cant_copy_files'));
  }
}
```