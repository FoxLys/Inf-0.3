<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styl9.css">
	<title>Poznaj Europę</title>
</head>

<body>
	<?php
	$conn = mysqli_connect(
		"localhost",
		"root",
		"",
		"podroze"
	);
	if (mysqli_connect_errno()) {
		echo "faile conn" . mysqli_connect_error();
		exit();
	}
	?>

	<header>
		<h1>BIURO PODRÓŻY</h1>
	</header>

	<main>
		<div id="left">
			<h2>Promocje</h2>
			<table>
				<tr>
					<td>Warszawa</td>
					<td>od 600 zł
					</td>
				</tr>
				<tr>
					<td>Wenecja</td>
					<td>od 1200 zł</td>
				</tr>
				<tr>
					<td>Paryż</td>
					<td>od 1200 zł</td>
				</tr>
			</table>
		</div>
		<div id="middle">
			<h2>W tym roku jedziemy do...</h2>

			<!-- script 1  -->

			<?php
			$sql = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY `zdjecia`.`podpis` ASC;";

			$result = $conn->query($sql);
			while ($row = $result->fetch_assoc()) {
				echo '<img src="' . $row["nazwaPliku"] . '" alt="' . $row["podpis"] . '" title=" ' . $row["podpis"] . ' ">';
			}
			;
			?>

		</div>

		<div id="right">
			<h2>Kontakt</h2>
			<a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
			<p>telefon: 444555666</p>
		</div>

		<div id="dane">
			<h3>W poprzednich latach byliśmy...</h3>
			<ol>
				<!-- script 2  -->
				<?php
				$sql1 = "SELECT `cel`, `dataWyjazdu` FROM wycieczki WHERE dostepna = '0';";
				$result1 = $conn->query($sql1);
				while ($row = $result1->fetch_assoc()) {
					echo '<li>Dnia ' . $row['dataWyjazdu'] . ' pojechaliśmy do ' . $row['cel'] . '</li>';
				}
				?>
			</ol>
		</div>
	</main>

	<footer>
		<p>Stronę wykonał:1112223334455</p>
	</footer>

	<?php
	$conn->close();
	?>
</body>

</html>