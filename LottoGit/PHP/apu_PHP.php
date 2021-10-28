<?php
require_once("aB.php");
$tiedosto = file("PHP/Muuttujat.txt");
$serverinimi = PALVELIN;
$knimi = KAYTTAJA;
$ssana = SSANA;
$hashays = SIEMEN;
$tkanta = chop($tiedosto[0]);
?>
