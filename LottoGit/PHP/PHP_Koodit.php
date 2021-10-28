<?php

if(!empty($_POST) {
    if(array_key_exists('luoTaulut', $_POST)) {
      luoTaulut();
    }

    if(array_key_exists('esimerkit', $_POST)) {
      luoEsimerkit();
    }

    if(array_key_exists('tuoRivitTiedostosta', $_POST)) {
      tuoRivitTiedostosta();
    }

    if(array_key_exists('poistaTaulut', $_POST)) {
      poistaTaulut();
    }

    if(array_key_exists('uusiHemmo', $_POST)) {
      uusiAsiakas();
    }

    if(array_key_exists('lueHemmo', $_POST)) {
      lueAsiakas();
    }

    if(array_key_exists('poistaHemmo', $_POST)) {
      poistaAsiakas();
    }

    if(array_key_exists('tulostaHemmo', $_POST)) {
      tulostaAsiakas();
    }

    if(array_key_exists('muutaHemmo', $_POST)) {
      muutaAsiakas();
    }

    if(array_key_exists('uusiAsRivi', $_POST)) {
      uusiAsRivi();
    }

    if(array_key_exists('lueAsRivi', $_POST)) {
      lueAsRivit();
    }

    if(array_key_exists('poistaAsRivi', $_POST)) {
      poistaAsRivi();
    }

    if(array_key_exists('tulostaAsRivit', $_POST)) {
      tulostaAsRivit();
    }

    if(array_key_exists('lueRivit', $_POST)) {
      lueRivit();
    }

    if(array_key_exists('uusiRivi', $_POST)) {
      uusiRivi();
    }
}

function luoLogiErottaja() {
  /* Luodaan muuttuja logia varten */
  $Result = "------------------------------------- \n";
  $mydate = getdate();
  $Aika = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]  $mydate[hours]:$mydate[minutes]";
  $Result +=  $Aika . " \n";
  $Result += "------------------------------------- \n";
  return $Result;
}

function luoTaulut() {
  /* Luetaan tiedot tiedostoista */
  require_once("apu_PHP.php");
  /* Luodaan yhteys palvelimeen */
  $con = new mysqli($serverinimi, $knimi, $ssana);
  /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
  if ($con->connect_error) {
    $Result = "------------------------------------- \n";
    $Result .= "Tietokantaan ei saa yhteyttä... \n";
    $Result .= 'Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error() . '\n';
    die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  /* jos onnistuu niin luodaan tietokanta ja taulut */
  else {
    /* VAlitaan tietokanta läyttöön */
    $vastaus = mysqli_select_db($con, $tkanta);

    /* luodaan tyhjät taulut */

    /* taulu 1 - Asiakastiedot */
    $Result .= "Luodaan tyhjää taulua 1 (Asiakkaat) ... \n";
    $kysely = "
    CREATE TABLE IF NOT EXISTS Asiakkaat (
    Asiakas_ID INT NOT NULL AUTO_INCREMENT,
    AS_tunnus VARCHAR(20) NOT NULL,
    AS_salasana VARCHAR(20) NOT NULL,
    PRIMARY KEY (Asiakas_ID))
    ENGINE = InnoDB;
    ";
    // Suoritetaan SQL-kysely
    if(!$vastaus = mysqli_query($con, $kysely)) {
      echo('Jotain meni pieleen tietueen Asiakkaat luomisessa.\n
      Tarkasta, onko tietokantapalvelin päällä tai onko taulu (Asiakkaat) jo olemassa,');
      echo('Kysely = ' . $kysely . ', virheviesti ' . $con -> error);
    }
    else {
      $Result .= "... OK. \n";
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
      echo('Taulun AS_lottorivit teko epäonnistui.\n
      Tarkasta, onko tietokantapalvelin päällä tai onko taulu (AS_lottorivit) jo olemassa,');
      echo('Kysely = ' . $kysely . ', virheviesti ' . $con -> error);
    }
    else {
      $Result .= "... OK. \n";
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
      echo('Jotain meni pieleen taulun Arvotut luonnissa.\n
      Tarkasta, onko tietokantapalvelin päällä tai onko taulu (arvotut) jo olemassa,');
      echo('Kysely = ' . $kysely . ', virhemessu ' . $con -> error);
    }
    else {
      $Result .= "... OK. \n";
    }

    // yhteys suljetaan
    mysqli_close($con);
  }
  $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
  fwrite($myfile,$Result);
  fclose($myfile);
  /* Tyhjennetään posti */
  if (!empty($_POST)) unset($_POST);
}

function luoEsimerkit() {
  /* Luetaan tiedot tiedostoista */
  require_once("apu_PHP.php");
  /* Luodaan yhteys palvelimeen */
  $con = new mysqli($serverinimi, $knimi, $ssana);
  /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
  if ($con->connect_error) {
    $Result = "------------------------------------- \n";
    $Result .= "Tietokantaan ei saa yhteyttä... \n";
    die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  /* jos onnistuu niin luodaan esimerkkituotteet */
  else {
    /* Valitaan tietokanta käyttöön */
    $vastaus = mysqli_select_db($con, $tkanta);
    /* Luodaan esimerkkitiedot Asiakkaat -tauluun */
    $kysely1 = "
    INSERT INTO asiakkaat (AS_tunnus, AS_salasana) VALUES
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
    $kysely2 = "
    INSERT INTO arvotut (Numerot) VALUES
    ('7,9,13,18,21,24,31'),
    ('4,11,14,23,24,35,38'),
    ('1,3,11,13,22,26,34'),
    ('6,10,13,14,17,22,35'),
    ('5,16,23,26,28,34,37');
    ";

    /* Suoritetaan SQL-kyselyt */
    $vastaus = mysqli_query($con, $kysely1);
    if ($con->connect_error) {
        $Result = "------------------------------------- \n";
        $Result .= "Kysely1 ei onnistu: kysely = " . $kysely1 . "\n";
      }
    $vastaus = mysqli_query($con, $kysely2);
    if ($con->connect_error) {
        $Result = "------------------------------------- \n";
        $Result .= "Kysely2 ei onnistu: kysely = " . $kysely2 . "\n";
      }
    $vastaus = mysqli_query($con, $kysely3);
    if ($con->connect_error) {
        $Result = "------------------------------------- \n";
        $Result .= "Kysely3 ei onnistu: kysely = " . $kysely3 . "\n";
      }

    // yhteys suljetaan
    mysqli_close($con);
  }
  // Merkitään logiin
  $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
  fwrite($myfile,$Result);
  fclose($myfile);
  /* Tyhjennetään posti */
  if (!empty($_POST)) unset($_POST);
}

function tuoRivitTiedostosta() {
  /* Luo tiedosto */
  $tiedostoNimi = "/PHP/Lottonumerot.txt";
  /* Lue tiedoston sisältö muuttujaan */
  $sisalto = file($tiedostoNimi);
  /* Hajota rivit kahteen taulukon sarakeeseen käyttäen '+' -merkkiä hajotuskohtana */
  $hajotettu = explode("+",$tiedostoNimi);
  /* Laske rivien määrä */
  $rivienMaara = count($sisalto);
  /* Avaa tietokanta ja valitse 'arvotut' -tiedosto */
  require_once("apu_PHP.php");
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
    $kysely = "DROP TABLE arvotut;";
    $vastaus = mysqli_query($con, $kysely);
    if(!$vastaus) {
               die('Tauluja ei voitu poistaa: ' . mysql_error());
     }
     else {
       /* luodaan tiedosto uudelleen*/
       $kysely = "
       CREATE TABLE arvotut (
         Nro_ID INT NOT NULL AUTO_INCREMENT,
         Numerot VARCHAR(30),
         PRIMARY KEY (Nro_ID))
       ENGINE = InnoDB;
       ";
       /* Suoritetaan SQL-kysely */
       if(!$vastaus = mysqli_query($con, $kysely)) {
         echo('Jotain meni pieleen taulun arvotut luonnissa.\n');
         echo('Kysely = ' . $kysely . ', virhemessu ' . $con -> error);
       }
       else {
         for($x=0; $x < $rivienMaara; x++ ) {
           $kysely = "INSERT INTO arvotut (Numerot) VALUES " . $hajotettu[$x] . ";";
           if(!$vastaus = mysqli_query($con, $kysely)) {
             echo('Jotain meni pieleen taulun arvotut sisällön luomisessa.\n');
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
     /* Päivitetään logiin kirjoitettavaa tekstiä */
     $Result .= "Poistetaan kaikki taulut... \n";
     /* Poistetaan taulut */
     $kysely = "DROP TABLE asiakkaat, As_LottoRivit, arvotut;";
     $vastaus = mysqli_query($con, $kysely);
     if(!$vastaus) {
                $Result .= "Tauluja ei voitu poistaa... \n";
                die('Tauluja ei voitu poistaa: ' . mysql_error());
      }
      else {
        $Result .= "... OK \n";
      }
      // yhteys suljetaan
      mysqli_close($con);
   }
   // Merkitään logiin
   $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
   fwrite($myfile,$Result);
   fclose($myfile);
   /* Tyhjennetään posti */
   if (!empty($_POST)) unset($_POST);
}

function lueAsRivit() {
  /* Luetaan tiedot tiedostoista */
  require_once("apu_PHP.php");
   /* Luodaan yhteys palvelimeen */
   $con = new mysqli($serverinimi, $knimi, $ssana);
   /* Valitaan tietokanta käyttöön */
   $vastaus = mysqli_select_db($con, $tkanta);
   /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
   if ($con->connect_error) {
     die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
   }
   else {
     $Result .= "Luodaan arvotut rivit tauluun 'arvotut'.";

     $kysely = "SELECT *
     FROM arvotut;

     /* Suoritetaan SQL-kysely */
     if(!$vastaus = mysqli_query($con, $kysely)) {
       /*echo '<p class="juttu">Haku ei onnistunut</p>';*/
     }
     /* tulostetaan hakutulos */
     else {
         while($p = $vastaus->fetch_assoc()) {

         $tulosta = '<tr><td><img src="'. $p['p_Kuva'] .'" alt="Kuva pizzasta" width="70"></td><td>' . $p['p_Nimi'] . '</td><td> ' .
         $p['p_Kuvaus'] . '</td><td>' . $p['p_Hinta'] . '</td><td><input type="checkbox" name="Tilaa" id="Tilaa">Tilaa</td></tr>';
         echo $tulosta;
       }
     }

     // yhteys suljetaan
     mysqli_close($con);
 }
 // Merkitään logiin
 $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
 fwrite($myfile,$Result);
 fclose($myfile);
 /* Tyhjennetään posti */
 if (!empty($_POST)) unset($_POST);
 return($kysely);
}

function uusiAsiakas() {
  /* Luetaan tiedot tiedostoista */
  require_once("apu_PHP.php");
   /* Luodaan yhteys palvelimeen */
   $con = new mysqli($serverinimi, $knimi, $ssana);
   /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
   if ($con->connect_error) {
     $Result = "------------------------------------- \n";
     $Result .= "Tietokantaan ei saa yhteyttä... \n";
     die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
   }
   /* jos onnistuu niin luodaan uusi käyttäjä */
   else {
    /* Valitaan tietokanta käyttöön */
    $vastaus = mysqli_select_db($con, $tkanta);
    /* alustetaan käyttäjätiedot tietokantaa varten */
    $jatka = true;
    $etunimi = $_POST['enimi'];
    $sukunimi = $_POST['snimi'];
    $losoite = $_POST['losoite'];
    $pnum = $_POST['pnum'];
    $spostios = $_POST['spostios'];
    $ssana1 = $_POST['ssana1'];
    $ssana2 = $_POST['ssana2'];
    if($ssana1 == $ssana2) {
      $ssanaTaulu = $hashays . $ssana1;
    }
    else {
      echo('Salasanat eivät täsmää.');
      $jatka = false;
      $Result .= "Salasanat eivät täsmää. \n";
    }
    $puhno = $_POST['puhno'];
    if($jatka) {
      $kysely = "
      INSERT INTO " . $taulu6  . " (as_enimi, as_snimi, as_lahios,
      as_pnum, as_spostios, as_salasana, as_puhno)
      VALUES
      ('$etunimi', '$sukunimi', '$losoite', '$pnum', '$spostios', '$ssanaTaulu', '$puhno');";
      /* Suoritetaan SQL-kysely */
      if(!$vastaus = mysqli_query($con, $kysely)) {
        echo('Jotain meni pieleen esimerkkien ' . $taulu6 . ' luonnissa.\n');
        echo('Kysely = ' . $kysely . ', virhemessu ' . $con -> error);
      }
    }

    // yhteys suljetaan
    mysqli_close($con);
  }
  // Merkitään logiin
  $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
  fwrite($myfile,$Result);
  fclose($myfile);
  /* Tyhjennetään posti */
  if (!empty($_POST)) unset($_POST);
}

function lueAsiakas() {
  /* Luetaan tiedot tiedostoista */
  require_once("apu_PHP.php");
  /* Luodaan yhteys palvelimeen */
  $con = new mysqli($serverinimi, $knimi, $ssana);
  /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
  if ($con->connect_error) {
    $Result = "------------------------------------- \n";
    $Result .= "Tietokantaan ei saa yhteyttä... \n";
    die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  /* jos onnistuu niin luodaan uusi käyttäjä */
  else {
    /* Valitaan tietokanta käyttöön */
    $vastaus = mysqli_select_db($con, $tkanta);
    /* alustetaan käyttäjätiedot tietokantaa varten */
    $spostios = $_POST['spostios'];
    /* Luodaan kysely */
    $kysely = "
    SELECT as_enimi, as_snimi, as_puhno FROM " . $taulu6  . " WHERE as_spostios = '$spostios';";
    // echo $kysely;
    /* Suoritetaan SQL-kysely */
    if(!$vastaus = mysqli_query($con, $kysely)) {
      echo '<p class="juttu">Haku ei onnistunut</p>';
    }
    /* tulostetaan hakutulos */
    else {
        while($p = $vastaus->fetch_assoc()) {
        $tulosta = 'Nimi = ' . $p['as_enimi'] . ' ' . $p['as_snimi'] . ', puhelinnumero ' . $p['as_puhno'] . '.<BR>';
        echo '<p class="juttu">' . $tulosta . '</p>';
      }
    }

    // yhteys suljetaan
    mysqli_close($con);
  }
  // Merkitään logiin
  $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
  fwrite($myfile,$Result);
  fclose($myfile);
  /* Tyhjennetään posti */
  if (!empty($_POST)) unset($_POST);
}

function poistaAsiakas() {
  /* Luetaan tiedot tiedostoista */
  require_once("apu_PHP.php");
  /* Luodaan yhteys palvelimeen */
  $con = new mysqli($serverinimi, $knimi, $ssana);
  /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
  if ($con->connect_error) {
    $Result = "------------------------------------- \n";
    $Result .= "Tietokantaan ei saa yhteyttä... \n";
    die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  /* jos onnistuu niin luodaan uusi käyttäjä */
  else {
    /* Valitaan tietokanta käyttöön */
    $vastaus = mysqli_select_db($con, $tkanta);
    /* alustetaan käyttäjätiedot tietokantaa varten */
    $spostios = $_POST['spostios'];
    /* Luodaan kysely */
    $kysely = "
    DELETE FROM " . $taulu6  . " WHERE as_spostios = '$spostios';";
    // echo $kysely;
    /* Suoritetaan SQL-kysely */
    if(!$vastaus = mysqli_query($con, $kysely)) {
      echo '<p class="juttu">Poistaminen ei onnistunut</p>';
    }
    /* tulostetaan hakutulos */
    else {
      echo '<p class="juttu">Asiakas poistettu.</p>';
    }

    // yhteys suljetaan
     mysqli_close($con);
 }
 // Merkitään logiin
 $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
 fwrite($myfile,$Result);
 fclose($myfile);
 /* Tyhjennetään posti */
 if (!empty($_POST)) unset($_POST);
}

function uusiTayte() {
  /* Luetaan tiedot tiedostoista */
  require_once("apu_PHP.php");
  /* Luodaan yhteys palvelimeen */
  $con = new mysqli($serverinimi, $knimi, $ssana);
  /* Valitaan tietokanta käyttöön */
  $vastaus = mysqli_select_db($con, $tkanta);
  /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
  if ($con->connect_error) {
    die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  else {
    $Result .= "Lisätään täytteet (" . $taulu2 . ").";
    /* Luodaan täytteet */
    $a = $_POST['Nimi'];
    $b = $_POST['Kuvaus'];
    /* Muodostetaan kysely */
    $kysely = "INSERT INTO " . $taulu2 . " (tayteNimi, tayteKuvaus) VALUES ('$a','$b');";
    // echo $kysely;
    /* Suoritetaan SQL-kysely ja tulostetaan hakutulos */
    if(!$vastaus = mysqli_query($con, $kysely)) {
      echo '<TR><td><p class="juttu">Täytteen lisääminen ei onnistunut</p></td></TR>';
    }
    else {
      echo '<TR><td><br><p class="juttu">Täyte lisätty.</p></td></TR>';
    }
    // yhteys suljetaan
    mysqli_close($con);
 }
 // Merkitään logiin
 $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
 fwrite($myfile,$Result);
 fclose($myfile);
 /* Tyhjennetään posti */
 if (!empty($_POST)) unset($_POST);
}

function poistaTayte($kierros) {
  $kierros = 1;
  if($kierros == 1) {
    /* Luetaan tiedot tiedostoista */
    require_once("apu_PHP.php");
    /* Luodaan yhteys palvelimeen */
    $con = new mysqli($serverinimi, $knimi, $ssana);
    /* Valitaan tietokanta käyttöön */
    $vastaus = mysqli_select_db($con, $tkanta);
    /* Jos ei onnistu annetaan virheilmoitus ja poistutaan */
    if ($con->connect_error) {
      die('Yhteysvirhe: ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }
    else {
      /* tehdään logitiedoston muuttuja */
      $Result.="Luetaan ja tulostetaan täytteet";
      /* Luetaan täytteet tietokannasta */
      $kysely = "SELECT * FROM " . $taulu2 . ";";
      /* Suoritetaan SQL-kysely ja tulostetaan hakutulos */
      if(!$vastaus = mysqli_query($con, $kysely)) {
        echo '<TR><td><p class="juttu">Täytteiden lukeminen ei onnistunut</p></td></TR>';
      }
      echo($kysely);
      $y = 1;
      foreach($kysely as $x => $val) {
        echo($x . " ja " . $val);

        /*echo("<tr><td>" . $x . "</td><td>" . $val .  "</td><td><input type='checkbox' id='t'" . $y .
        " name = 't'" . $y . "</td></tr>";*/
        $y++;
      }
    // yhteys suljetaan
    mysqli_close($con);
    }
    // Merkitään logiin
    $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
    fwrite($myfile,$Result);
    fclose($myfile);
    /* Tyhjennetään posti */
    if (!empty($_POST)) unset($_POST);
  }
  if($kierros == 2) {
    /* tehdään logitiedoston muuttuja */
    $Result.="Poistetaan täytteet";
    /* Valitaan poistettavat täytteet */


  }
  // Merkitään logiin
  $myfile = fopen("PHP/Tietokantatulos.txt", "a") or die("Logitiedoston luonti tai avaaminen ei onnistunut!");
  fwrite($myfile,$Result);
  fclose($myfile);
  /* Tyhjennetään posti */
  if (!empty($_POST)) unset($_POST);
}
?>
