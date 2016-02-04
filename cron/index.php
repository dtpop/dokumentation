<?php
  $books = [
    '5.0'=>['manual','advanced'],
    // '4.6'=>['manual','advanced']
  ];
?>
<h1>Gitbook wählen</h1>
<ul>
  <?php foreach($books as $version => $types) {?>
  <?php foreach($types as $type) {?>
  <li><a href="index.php?version=<?php echo $version;?>&amp;type=<?php echo $type;?>"><?php echo $version;?> <?php echo $type;?></a></li>
  <?php }}?>
</ul>
<?php
if(!empty($_GET['version']) && in_array($_GET['type'],($Book = $books[$_GET['version']]))) {?>
<h2>Cron wird ausgeführt!</h2>
<p>Es kann bis zu 5 Minuten dauern, bis die Daten aktualisiert wurden.</p>
<p>Diese Seite darf <b>nicht</b> geschlossen werden, bevor die Ausgabe erscheint!</p><?php 
  putenv('HOME=/kunden/421935_79771');

  putenv('BOOK_VERSION='.$_GET['version']);
  putenv('BOOK_TYPE='.$_GET['type']);
  exec('./create.sh',$result);
?>
<h3>Cron wurde ausgeführt</h3>
<br><br>
<pre style="width:80%;padding:10px;max-height:500px;overflow-y:scroll;background:#eee;border: 1px solid #ccc;"><?php print_r($result);?></pre>
<?php }?>
