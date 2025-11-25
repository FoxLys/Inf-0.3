<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="styl3.css" />
	<title>Zawody wędkarskie</title>
</head>

<body>
	<header>
		<div id="headerLeft">
			<h1>Zawody polskich wędkarz</h1>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "wedkarstwo";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $db);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			echo "Connected successfully";
			?>
		</div>
		<div id="headerRight">
			<img id="zdjencie" src="./zawody.jpg" alt="wędkowanie" />
		</div>
	</header>
	<main>
		<h3>Łowiska</h3>
		<ul>
			<li>Zalew Węgrowski</li>
			<li>Zbiornik Bukówka</li>
			<li>Jeziorko Bartbetowskie</li>
			<li>Warta-Obrzycko</li>
		</ul>
		<h3>Dodaj zawody wędkarskie</h3>
		<form id="selector" action="zgloszenie.php" method="post">
			<label for="numer">Łowisko:</label>
			<input type="number" name="lowisko" />
			<br />
			<label for="data">Data:</label>
			<input type="date" name="data" />
			<br />
			<label for="text">Sędzia:</label>
			<input type="text" name="sedzia" />
			<br />
			<input type="reset" value="CZYŚĆ" />
			<input type="submit" value="DODAJ" />
		</form>
	</main>
	<footer>
		<div id="footerLeft">
			<a id="document" href="./kwerendy.txt">Pobierz</a></p>
		</div>
		<div id="footerRight">
			<p>Stronę przygotował: 65106516</p>
		</div>
	</footer>
</body>

</html>