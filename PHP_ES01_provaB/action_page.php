<!DOCTYPE html>
<html>

	<head>
	 <title>Pagina Riservata</title>
	</head>

	<body>
		<h3>Area Riservata!</h3>
		<?php
			$Nome = $_POST["Nome"]; //dentro le parentesi ci va quello che c'è nell'attributo name
			//$Cognome = $_POST["Cognome"];
		//	$Email = $_POST["Email"];
			$Psw = $_POST["Psw"];

			echo "<p>Benvenuto " . $Nome . " " . $Psw . " nell'area riservata del tuo sito</p>";
		?>

	</body>

</html>
