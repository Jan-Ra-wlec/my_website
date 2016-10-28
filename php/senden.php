<?php
$empfaenger = "webmaster@beispiel.de"; //Hier die E-Mail
$absendername = "Kontaktformular";
$absendermail = $_POST['email'];
$betreff = "Neue Anfrage";
$text = "
     Vorname: ".$_POST['vorname']."\n
     Nachname: ".$_POST['nachname']."\n
     E-Mail: ".$_POST['email']."\n
     Nachricht: ".$_POST['nachricht']."\n";
mail($empfaenger, $betreff, $text, "From: $absendername <$absendermail>");

echo("Das Formular wurde erfolgreich versendet");
?>