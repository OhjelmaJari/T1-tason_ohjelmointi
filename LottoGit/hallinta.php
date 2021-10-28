<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- resposiivisuusasetus */ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Otsikko ja ikoni -->
	<title>LG Hallinta</title>
	<link rel="icon" href="Kuvat/favicon.ico"/>
	<!-- Viitteet CSS -tiedostoihin -->
	<link rel="stylesheet" type="text/css" href="CSS/Muotoilut.css">
	<link rel="stylesheet" type="text/css" href="css/Valikko.css">
	<!-- Viite pääotsikon fonttiin -->
	<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
</head>
<body>
	<header>
	<!-- Kuva otsikon edessä  -->
	<img src="Kuvat/Rahaa.png" class="kuva1" width="10%"></img>
		LG:n hallinta
	</header>
	</BR></BR>
	<div>
		Valitse seuraavista hallinnallisista toimista:
		</BR></BR>
		<table id="tekeminen">
			<tr>
				<td>
					Luo taulut Asiakkaat, AS_lottorivit ja arvotut tietokantaan.
				</td>
				<form method="post">
					<td>
						<input type="submit" value="Luo taulut" name="luoTaulut"></input></br>
					</td>
				</form>
			</tr>
			<tr colspan=2>
				<td>
					Asiakkaat: <div id="LT1"></div>
					AS_Lottorivit: <div id="LT2"></div>
					Arvotut: <div id="LT3"></div>
				</td>
			</tr>
			<tr>
				<td>
					Luo esimerkkitaulujen sisällöt tietokantaan.
				</td>
				<form method="post">
					<td>
						<input type="submit" value="Luo esimerkit" name="luoEsimerkit"></input></br>
					</td>
				</form>
			</tr>
			<tr colspan=2>
				<td>
					Asiakkaat: <div id="LE1"></div>
					AS_Lottorivit: <div id="LE2"></div>
					Arvotut: <div id="LE3"></div>
				</td>
			</tr>
			<tr>
				<td>
					Poista taulut Asiakkaat, AS_lottorivit ja arvotut tietokannasta.
					Huomaa, että nyös niiden sisältö poistetaan.
				</td>
				<form method="post">
					<td>
						<input type="submit" value="Poista taulut" name="poistaTaulut"></input></br>
					</td>
				</form>
			</tr>
			<tr colspan=2>
				<td>
					<div id="PT">&nbsp;</div>
				</td>
			</tr>
			<tr>
				<td>
					Tuo arvotut rivit tiedostosta tietokantaan. Varmista, että tiedosto on järjestelmässä.
				</td>
				<form method="post">
					<td>
						<input type="submit" value="Tuo arvotut rivit" name="tuoRivitTiedostosta"></input></br>
					</td>
				</form>
			</tr>
			<tr colspan=2>
				<td>
					<div id="TR">&nbsp;</div>
				</td>
			</tr>
		</table>
	</div>
	<?php
		require_once "PHP/PHP_TietokannanLuontiKoodit.php";
	?>
</body>
