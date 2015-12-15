# Bootstrap

Da Redaxo auf Bootstrap im Backend setzt, sind viele der Bootstrap-Features auch in den Backend-Modulen und Seiten verfügbar.

Alle Features die Bootstrap 3.3.5 mitbringt, werden auch in Redaxo unterstützt. Redaxo setzt zudem auf Sass, Bootstrap 4 wird voraussichtlich ebenfalls mit Sass arbeiten, daher wird der Umstieg in Zukunft nicht allzu schwer sein.

## Tabs

Beispiel-Seite: [http://getbootstrap.com/javascript/#tabs-examples](http://getbootstrap.com/javascript/#tabs-examples)

```
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">Home!</div>
    <div role="tabpanel" class="tab-pane" id="profile">Profile!</div>
    <div role="tabpanel" class="tab-pane" id="messages">Messages!</div>
    <div role="tabpanel" class="tab-pane" id="settings">Settings!</div>
  </div>

</div>
```

 