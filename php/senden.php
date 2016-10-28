<?php
$empfaenger = "tsreg@djaykay.net"; //Hier die E-Mail
$absendername = "Kontaktformular";
$absendermail = $_POST['email'];
$betreff = "Neue Anfrage";
$text = "
     Vorname: ".$_POST['vorname']."\n
     Nachname: ".$_POST['nachname']."\n
     E-Mail: ".$_POST['email']."\n
     Nachricht: ".$_POST['nachricht']."\n";
mail($empfaenger, $betreff, $text, "From: $absendername <$absendermail>");

echo(<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
  <span class="sr-only">Success!</span>
<strong>Deine Registrierung wurde versendet!</strong><br>
Bis dein Account freigeschaltet wird, kann es ein wenig dauern!</p>
</div>);
?>