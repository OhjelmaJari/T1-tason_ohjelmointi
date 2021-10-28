<?php
function KirjaaOhjeet(){
  $Tiedosto = file("PHP/Ohje.txt");
  foreach($Tiedosto as $val => $Ohjeteksti) {
    echo $Ohjeteksti . "<BR>";
  }
}
?>
