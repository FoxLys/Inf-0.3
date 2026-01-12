<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styl.css">
	<title>Sklep dla uczniów</title>
</head>
<!-- сonnection to  php  -->
<?php
$conn = new mysqli(
	'localhost',
	'root',
	'',
	'sklep'
);
?>

<body>
	<header>
		<h1>Dzisiejsze promocje naszego sklepu</h1>
	</header>
	<main>
		<section id="left">
			<h2>Taniej o 30%</h2>
			<ul>
				<!-- <script></script> -->
				<?php
				$sql = "SELECT nazwa FROM `towary` WHERE promocja = 1;";

				$result = $conn->query($sql);
				while ($row = $result->fetch_array()) {
					echo '<li>' . $row['nazwa'] . '</li>';
				}
				?>
			</ul>
		</section>
		<section id="mid">
			<h2>Sprawdź cenę</h2>
			<form method="POST">
				<select name="range" id="range">
					<option value="Gumka do mazania">Gumka do mazania</option>
					<option value="Cienkopis">Cienkopis</option>
					<option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
					<option value="Markery 4 szt.">Markery 4 szt.</option>
				</select>
				<!-- script 2 -->
				<input type="submit" value="SPRAWDŹ">
			</form>
			<p id="sctypt2">
				<?php
				if (isset($_POST['range'])) {

					$nazwa = $_POST['range'];

					$sql1 = "SELECT `cena` FROM `towary` WHERE nazwa LIKE '$nazwa'";

					$result1 = $conn->query($sql1);

					if ($row1 = $result1->fetch_assoc()) {
						echo "cena regularna: " . $row1['cena'] . "<br>";
						$cenaPromo = $row1['cena'] * 0.7;
						echo "cena w promocji 30%: " . $cenaPromo;
					} else {
						echo "Nie znaleziono produktu w bazie!";
					}
				}
				?>
			</p>
		</section>
		<aside id="right">
			<h2>Kontakt</h2>
			<p>e-mail:<a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
			<img src="promocja.png" alt="promocja">
		</aside>
	</main>
	<footer>
		<h4>Autor strony: 132151516516</h4>
	</footer>
	<?php
	$conn->close();
	?>
</body>

</html>