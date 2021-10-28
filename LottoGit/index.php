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
	<link rel="stylesheet" type="text/css" href="CSS/Pallot.css">
		<!-- Linkit JavaScript -tiedostoihin -->
		<script src="js/Arvonta.js"></script>
		<script src="js/Tallennus.js"></script>
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
	    <a class="active" href="index.php">Koti</a>
	    <a href="Kire.php">Kirjaudu/Rekisteröidy</a>
	    <a href="Ohjeet.php">Ohjeet</a>
	  </div>
	</div>
	<!-- Lomake tietojen syöttöön ja arvontanappi -->
	<form name="Lottolomake" action="" class="lahjoitus">
		<table border="0" cellpadding="4">
			<tr>
				<td>
					Arvo
					<input class="lahjoitus" type="text" id="NumeroidenMaara" name="NumeroidenMaara" value="7" size="1vw" maxlength="2" onkeypress="onkoEnter(event)" />
					numeroa väliltä 1 - 40
					<p class="riviteksti" id="rivitekstipaikka">&nbsp;</p>
					<p class="virheteksti" id="virhetekstipaikka">&nbsp;</p>
				</td>
			</tr>
				<tr>
					<td>
						<div id="rivi">&nbsp;</div></br>
						<div id="rivi2">&nbsp;</div></br>
						<div id="rivi3">&nbsp;</div></br>
						</br></br>
						<input class="lahjoitus" type="button" value="Arvo numerot" onclick="ArvoLottoRivi()"/><br>
				</td>
			</tr>
		</table>
	</form>
	<footer>
		<p>
		<div class="lahjoitus">
		<h2>Lahjoitus:</h2>
		Sivusto on ilmainen. Jos havaitset sen hyödylliseksi tai haluat muuten
		auttaa sen pitämisessä saatavilla, niin voit lahjoittaa vapaavalintaisen summan
		klikkamalla alla olevaa "Lahjoitus" painiketta.
		Voit myös lähettää sivustosta kommentteja sähköpostiin.
		</p>
		<table id="Lahjoitustaulu">
			<tr>
				<td class="lahjoitusRivi" width=30%>
					<a href="mailto:paras.tekija@gmail.com"><img src="Kuvat/Meilikuva.png" alt="Sähköpostia" style="width:20%;"></a>
				</td>
				<td class="lahjoitusRivi">
					<button class="button button2" onclick="openTab()">Lahjoitus</button>
				</td>
			</tr>
		</table>
		</div>
	</footer>
</body>
</html>
