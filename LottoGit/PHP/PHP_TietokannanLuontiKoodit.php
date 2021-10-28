<?php

if(!empty($_POST) && array_key_exists('luoTaulut', $_POST)) {
      luoTaulut();
    }

if(!empty($_POST) && array_key_exists('luoEsimerkit', $_POST)) {
      luoEsimerkit();
    }

if(!empty($_POST) && array_key_exists('tuoRivitTiedostosta', $_POST)) {
      tuoRivitTiedostosta();
    }

if(!empty($_POST) && array_key_exists('poistaTaulut', $_POST)) {
      poistaTaulut();
    }

function luoTaulut() {
  require_once "apu_PHP.php";
  /* Luodaan yhteys palvelimeen */
  $con = new mysqli($serverinimi, $knimi, $ssana);
  /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
  if ($con->connect_error) {
    $Result = "------------------------------------- \n";
    $Result .= "Tietokantaan ei saa yhteyttä... \n";
    $Result .= 'Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error() . '\n';
    // yhteys suljetaan
    mysqli_close($con);
    /* Tyhjennetään posti */
    if (!empty($_POST)) unset($_POST);
    // Merkitään logiin
    $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
    fwrite($myfile,$Result);
    fclose($myfile);
    /* Tyhjennetään posti */
    if (!empty($_POST)) unset($_POST);
    die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  /* Luodaan muuttuja logia varten */
  $Result = "------------------------------------- \n";
  $mydate = getdate();
  $Aika = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]  $mydate[hours]:$mydate[minutes]";
  $Result .=  $Aika . " \n";
  $Result .= "------------------------------------- \n";
  /* Valitaan tietokanta käyttöön */
  $vastaus = mysqli_select_db($con, $tkanta);

  /* luodaan tyhjät taulut */

  /* taulu 1 - Asiakastiedot */
  $Result .= "Luodaan tyhjää taulua 1 (Asiakkaat) ... \n";
  $kysely = "
  CREATE TABLE IF NOT EXISTS Asiakkaat (
  Asiakas_ID INT NOT NULL AUTO_INCREMENT,
  AS_tunnus VARCHAR(20) NOT NULL,
  AS_salasana VARCHAR(40) NOT NULL,
  PRIMARY KEY (Asiakas_ID))
  ENGINE = InnoDB;
  ";
  // Suoritetaan SQL-kysely
  if(!$vastaus = mysqli_query($con, $kysely)) {
    echo('Jotain meni pieleen tietueen Asiakkaat luomisessa.\n
    Tarkasta, onko tietokantapalvelin päällä ja yhteys kunnossa.');
    echo('Kysely = ' . $kysely . ', virheviesti ' . $con -> error);
  }
  else {
    $Result .= "... OK. \n";
    echo('<script>
      document.getElementById("LT1").innerHTML = " -> Ok";
    </script>');
  }

  /* taulu 2 - AS_Lottorivit */
  $Result .= "Luodaan tyhjää taulua 2 (AS_lottorivit) ... \n";
  $kysely = "
  CREATE TABLE IF NOT EXISTS AS_lottorivit (
    AsRivi_ID INT NOT NULL AUTO_INCREMENT,
    As_Rivi VARCHAR(20),
    As_Voittoko BOOLEAN,
    As_PVM DATE,
    PRIMARY KEY (AsRivi_ID)
  )
  ENGINE = InnoDB;
  ";
  // Suoritetaan SQL-kysely
  if(!$vastaus = mysqli_query($con, $kysely)) {
    echo('Jotain meni pieleen tietueen As_LottoRivit luomisessa.\n
    Tarkasta, onko tietokantapalvelin päällä ja yhteys kunnossa.');
    echo('Kysely = ' . $kysely . ', virheviesti ' . $con -> error);}
  else {
    $Result .= "... OK. \n";
    echo('<script type="text/javascript">
      document.getElementById("LT2").innerHTML = " -> Ok";
    </script>');
  }

  /* taulu 3 - Arvotut rivit */
  $Result .= "Luodaan tyhjää taulua 3 (Arvotut) ...\n";
  $kysely = "
  CREATE TABLE IF NOT EXISTS Arvotut (
    Nro_ID INT NOT NULL AUTO_INCREMENT,
    Numerot VARCHAR(30),
    PRIMARY KEY (Nro_ID))
  ENGINE = InnoDB;
  ";

  /* Suoritetaan SQL-kysely */
  if(!$vastaus = mysqli_query($con, $kysely)) {
    echo('Kysely = ' . $kysely . ', virheviesti ' . $con -> error);
    echo('Jotain meni pieleen tietueen Arvotut luomisessa.\n
    Tarkasta, onko tietokantapalvelin päällä ja yhteys kunnossa.');
  }
  else {
    $Result .= "... OK. \n";
    echo('<script>
      document.getElementById("LT3").innerHTML = " -> Ok";
    </script>');
  }
  // yhteys suljetaan
  mysqli_close($con);
  /* Tyhjennetään posti */
  if (!empty($_POST)) unset($_POST);
  // Merkitään logiin
  $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
  fwrite($myfile,$Result);
  fclose($myfile);
}

function luoEsimerkit() {
  require_once "apu_PHP.php";
  /* Luodaan yhteys palvelimeen */
  $con = new mysqli($serverinimi, $knimi, $ssana);
  /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
  if ($con->connect_error) {
    $Result = "------------------------------------- \n";
    $Result .= "Tietokantaan ei saa yhteyttä... \n";
    $Result .= 'Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error() . '\n';
    // yhteys suljetaan
    mysqli_close($con);
    // Merkitään logiin
    $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
    fwrite($myfile,$Result);
    fclose($myfile);
    /* Tyhjennetään posti */
    if (!empty($_POST)) unset($_POST);
    die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  /* Valitaan tietokanta käyttöön */
  $vastaus = mysqli_select_db($con, $tkanta);
  /* Luodaan esimerkkitiedot Asiakkaat -tauluun */
  $kysely1 = "
  INSERT INTO Asiakkaat (AS_tunnus, AS_salasana) VALUES
  ('jk_sivun_luoja', '123abc_1'),
  ('sivun_tarkastaja', '123abc_1'),
  ('Uuno Turhapuro', 'UunonRivit_1');
  ";

  /* Luodaan esimerkkitiedot As_LottoRivit -tauluun */
  $kysely2 = "
  INSERT INTO As_LottoRivit (As_Rivi,As_Voittoko,As_PVM) VALUES
  ('7,9,13,18,21,24,31',0,'2020-09-01'),
  ('4,11,14,23,24,35,38',1,'2020-09-12'),
  ('1,3,11,13,22,26,34',0,'2020-09-15'),
  ('6,10,13,14,17,22,35',1,'2020-09-20'),
  ('5,16,23,26,28,34,37',0,'2020-09-20');
  ";

  /* Luodaan esimerkkitiedot arvotut -tauluun */
  $kysely3 = "
  INSERT INTO Arvotut (Numerot) VALUES
  ('7,9,13,18,21,24,31'),
  ('4,11,14,23,24,35,38'),
  ('1,3,11,13,22,26,34'),
  ('6,10,13,14,17,22,35'),
  ('5,16,23,26,28,34,37');
  ";

  /* Luodaan muuttuja logia varten */
  $Result = "------------------------------------- \n";
  $mydate = getdate();
  $Aika = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]  $mydate[hours]:$mydate[minutes]";
  $Result .=  $Aika . " \n";
  $Result .= "------------------------------------- \n";
  /* Suoritetaan SQL-kyselyt */
  $vastaus = mysqli_query($con, $kysely1);
  if ($con->connect_error) {
      $Result = "------------------------------------- \n";
      $Result .= "Kysely1 ei onnistu: kysely = " . $kysely1 . "\n";
  }
  else {
    echo('<script>
      document.getElementById("LE1").innerHTML = " -> Ok";
    </script>');
  }
  $vastaus = mysqli_query($con, $kysely2);
  if ($con->connect_error) {
      $Result = "------------------------------------- \n";
      $Result .= "Kysely2 ei onnistu: kysely = " . $kysely2 . "\n";
  }
  else {
    echo('<script>
      document.getElementById("LE2").innerHTML = " -> Ok";
    </script>');
  }
  $vastaus = mysqli_query($con, $kysely3);
  if ($con->connect_error) {
      $Result = "------------------------------------- \n";
      $Result .= "Kysely3 ei onnistu: kysely = " . $kysely3 . "\n";
  }
  else {
    echo('<script>
      document.getElementById("LE3").innerHTML = " -> Ok";
    </script>');
  }
  // yhteys suljetaan
  mysqli_close($con);
  // Merkitään logiin
  $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
  fwrite($myfile,$Result);
  fclose($myfile);
  /* Tyhjennetään posti */
  if (!empty($_POST)) unset($_POST);
}

function tuoRivitTiedostosta() {
  /* Luo tiedosto */
  $tiedostoNimi = "PHP/Lottonumerot.txt";
  /* Lue tiedoston sisältö muuttujaan */
  $sisalto = file($tiedostoNimi);
  /* Laske rivien määrä */
  $rivienMaara = count($sisalto);
  /* Avaa tietokanta ja valitse 'arvotut' -tiedosto */
  require_once "PHP/sarja_1.php";
  require_once "apu_PHP.php";
  /* Luodaan yhteys palvelimeen */
  $con = new mysqli($serverinimi, $knimi, $ssana);
  /* Valitaan tietokanta käyttöön */
  $vastaus = mysqli_select_db($con, $tkanta);
  /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
  if ($con->connect_error) {
    die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  else {
    /* nollataan tietokanta */
    $kysely = "DROP TABLE Arvotut;";
    $vastaus = mysqli_query($con, $kysely);
    if(!$vastaus) {
        die('Tauluja ei voitu poistaa: ' . mysql_error());
    }
    else {
     /* luodaan tiedosto uudelleen*/
     $kysely = "
     CREATE TABLE Arvotut (
       Nro_ID INT NOT NULL AUTO_INCREMENT,
       Numerot VARCHAR(30),
       PRIMARY KEY (Nro_ID))
     ENGINE = InnoDB;
     ";
     /* Suoritetaan SQL-kysely */
     if(!$vastaus = mysqli_query($con, $kysely)) {
       echo('Jotain meni pieleen taulun Arvotut luonnissa.\n');
       echo('Kysely = ' . $kysely . ', virhemessu ' . $con -> error);
     }
     else {
       foreach($tiedostoNimi AS $avain => $arvo) {
         $kysely = "INSERT INTO Arvotut (Numerot) VALUES " . $hajotettu[$x] . ";";
         if(!$vastaus = mysqli_query($con, $kysely)) {
           echo('Jotain meni pieleen taulun Arvotut sisällön luomisessa.\n');
           echo('Kysely = ' . $kysely . ', virhemessu ' . $con -> error);
         }
       }
     }
   }
  // yhteys suljetaan
  mysqli_close($con);
  }
}

function poistaTaulut() {
  require_once("apu_PHP.php");
  /* Luodaan muuttuja logia varten */
  $Result = "------------------------------------- \n";
  $mydate = getdate();
  $Aika = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]  $mydate[hours]:$mydate[minutes]";
  $Result .=  $Aika . " \n";
  $Result .= "------------------------------------- \n";
   /* Luodaan yhteys palvelimeen */
   $con = new mysqli($serverinimi, $knimi, $ssana);
   /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
   if ($con->connect_error) {
     $Result = "------------------------------------- \n";
     $Result .= "Tietokantaan ei saa yhteyttä... \n";
     die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
   }
   else {
     /* Valitaan tietokanta käyttöön */
     $vastaus = mysqli_select_db($con, $tkanta);
     $Result .= "Poistetaan kaikki taulut... \n";
     /* Poistetaan taulut */
     $kysely = "DROP TABLE Arvotut, Asiakkaat, As_LottoRivit;";
     // echo($kysely);
     $vastaus = mysqli_query($con, $kysely);
     if(!$vastaus) {
        $Result .= "Tauluja ei voitu poistaa... \n";
        die('Tauluja ei voitu poistaa: ' . mysql_error());
      }
      else {
        $Result .= "... OK \n";
        echo('<script>
          document.getElementById("PT").innerHTML = " -> Ok";
        </script>');
      }
      // yhteys suljetaan
      mysqli_close($con);
      /* Tyhjennetään posti */
      if (!empty($_POST)) unset($_POST);
   }
   // Merkitään logiin
   $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
   fwrite($myfile,$Result);
   fclose($myfile);
}
?>
