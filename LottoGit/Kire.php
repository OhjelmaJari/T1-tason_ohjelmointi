<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- resposiivisuusasetus */ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Otsikko ja ikoni -->
	<title>Lottogeneraattori</title>
	<link rel="icon" href="Kuvat/favicon.ico"/>
	<!-- Viitteet CSS -tiedostoihin -->
	<link rel="stylesheet" type="text/css" href="CSS/Muotoilut.css">
	<link rel="stylesheet" type="text/css" href="CSS/Valikko.css">
		<!-- Linkit JavaScript -tiedostoihin -->
		<script src="js/Kayttaja.js"/></script>
	  <!-- <script src="js/popoverit.js"></script> -->
	<!-- Viite pääotsikon fonttiin -->
	<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
</head>
<body>
	<header>
	<!-- Kuva otsikon edessä  -->
	<img src="Kuvat/Rahaa.png" class="kuva1" width="10%"></img>
		Lottogeneraattori
	</header>
	<!-- Responsiivinen valikko -->
	<div class="header">
	  <a href="#default" class="logo">&nbsp;</a>
	  <div class="header-right">
	    <a href="index.php">Koti</a>
	    <a class="active" href="Kire.php">Kirjaudu/Rekisteröidy</a>
	    <a href="Ohjeet.php">Ohjeet</a>
	  </div>
	</div>
	<!-- Lomake tietojen syöttöön -->
	<div class="lahjoitus">
		<form method="get" name="k-tiedot" action="" class="lahjoitus" onsubmit="return Tallenna()">
			<label for="ktunnus">Käyttäjätunnus</label><br />
			<input type="text" name="ktunnus" /><br />
			<label for="ssana">Salasana:</label><br />
			<input type="password" name="ssana" /><br /><br />
			<input type="submit" value="Tallenna">
		</form>
		<br />
		<p>Kirjoita käyttäjätunnuksesi ja salasanasi.</p>
		<p>Jollei käyttäjätunnusta ole rekisterissä, se luodaan ja salasanaksi rekisteröidään antamasi salasana.</p>
		<p>Sinulle ilmoitetaan, jos käyttäjä jo on olemassa, mutta salasana on väärä. Tässä tapauksessa
			voit korjata joko salasanaa tai käyttäjätunnusta.</p>
		<p>Unohtunutta salasanaa ei voi palauttaa, vaan käyttäjä on luotava uudelleen. Tällöin keksi uudet käyttäjätiedot ja yritä
			niillä uudelleen.</p>
	</div>
</body>
</html>
