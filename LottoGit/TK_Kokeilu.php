<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<!-- resposiivisuusasetus */ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Välilehden otsikko ja ikoni -->
	<title>TK Kokeilu</title>
</head>
<body>
<?php
    $serverinimi = "localhost";
    $tietokantaNimi = "np45898_Pyorat";
    $knimi = "np45898_Pyoraguru";
    $ssana = "Pyoria_Tanne1";

		$conn = mysqli_connect($serverinimi, $knimi, $ssana, $tietokantaNimi);


		if (!$conn) {
			die("Yhteys epäonnistui: " . mysqli_connect_error());
		}
		else echo "Jee, yhteys muodostettu!";
		mysqli_close($conn);
?>
</body>
</html>
