<?php
if(!empty($_POST) && array_key_exists("Kirjaudu", $_POST)) {
    olemassa();
}

if(!empty($_POST) && array_key_exists("uusi", $_POST)) {
    luoUusi();
}

if(!empty($_POST) && array_key_exists("unohtui", $_POST)) {
    unohtui();
}

function olemassa() {
  echo("Klikkasit Kirjaudu");
}

function luoUusi() {
  echo("Klikkasit Luo uusi tunnus");
}

function unohtui() {
  echo("Klikkasit Lähetä");
}
?>
