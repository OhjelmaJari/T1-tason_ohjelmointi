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
	<link rel="stylesheet" type="text/css" href="CSS/Ohjeet.css">
		<!-- Linkit JavaScript -tiedostoihin -->
		<script src="js/Arvonta.js"></script>
		<!-- <script src="js/popoverit.js"></script>-->
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
	    <a href="Kire.php">Kirjaudu/Rekisteröidy</a>
	    <a class="active" href="Ohjeet.php">Ohjeet</a>
	  </div>
	</div>
	<div class="Ohjeteksti">
		<?php
			include "PHP/PHP_Tekstit.php";
			KirjaaOhjeet();
		?>
	</div>
	<!-- Ohjevalinnat
	<form name="Lottolomake" action="" class="lahjoitus">
		<table border="0" cellpadding="4">
			<tr>
				<input  class="lahjoitus" type="button" value="Arvo numerot" onclick="ArvoLottoRivi()" />
				</td>
			</tr>
		</table>
	</form>-->
</body>
</html>
