# Templates

Templates dienen in erster Linie dazu, die grundlegende Ausgabe der Redaxo-Seite zu steuern. Um Templates nutzen zu können, muss HTML und ggf. CSS bzw. JS beherrschen. PHP wird an dieser Stelle auch empfohlen um die Templates stärker zu Individualisieren. Wer davon wenig Ahnung hat, kann sich auch auf der Redaxo-Seite fertige Templates anschauen [http://www.redaxo.org/de/download/templates/](http://www.redaxo.org/de/download/templates/).

> Info: Templates sind keine fertigen Design wie von den bekannten Template-Seiten. Sie sind eher so etwas wie die ìndex.php` einer Webseite.

## Erstellen

Ein Template benötigt einen Namen und Quelltext. Damit der Quelltext benutzerfreundliche dargestellt wird, sollte in den Addons das Plugin `customizer` des Addons `be_style` installiert werden. Dadurch wird das Textarea zu einem einfachen Editor. Wer lieber mit Dateien arbeitet, kann dazu das Addon `Developer` installieren. [Addons installieren und verwalten]()

Das erste Template kann gerne `Default` genannt werden. Im Quelltext sollte valides HTML definiert werden, mit einem Doctype, Head- und einem Body-Bereich. Der Aufbau im Body ist beliebig, im weiteren Verlauf der Seite, werden einige Code-Snippets vorgestellt.

### Navigation

In diesem Beispiel wurde eine Kategorie angelegt mit der ID 3, wir wollen an dieser Stelle alle Unterkategorien der Kategorie 3 ausgeben:

![Kategorien ID](../../assets/5.0-Handbuch/templates/categories.png)

```
<?php
  $categories = rex_category::get(3);
  if(!empty($categories)) {
    $categories = $categories->getChildren(1);
    if(!empty($categories)) {
      $categories = array_chunk($categories,3);?>
      <nav>
        <?php foreach($categories as $cKey => $chunk) {?>
        <ul class="nav_block">
          <?php foreach($chunk as $key => $category) {?>
          <li>
            <a href="<?php echo $category->getUrl();?>"><?php echo $category->getName();?></a>
          </li>
          <?php }?>
        </ul>
        <?php }?>
      </nav>
    <?php }
  }
?>
```

### Artikel ausgeben

REX_ARTICLE[] lädt alle Artikel der aktuell ausgegebenen Kategorie:

```
<header>
	<!-- html for header -->
</header>
<main>
	REX_ARTICLE[]
</main>
<footer>
	<!-- html for footer -->
</footer>
```