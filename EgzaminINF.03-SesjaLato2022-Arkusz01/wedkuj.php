<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styl_1.css">
	<title>Wędkowanie</title>
</head>

<body>
	<?php
	$db = new mysqli(
		'localhost',
		'root',
		'',
		'wedkowanie'
	);

	?>

	<header>
		<h1>Portal dla wędkarzy</h1>
	</header>

	<main>
		<div id="left">
			<div id="list">
				<h3>Ryby zamieszkujące rzeki</h3>
				<ol>
					<?php
					$q = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM `ryby` INNER JOIN `lowisko` ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3;";

					$result = $db->query($q);
					while ($row = $result->fetch_assoc()) {
						echo "<li>";
						echo $row["nazwa"] . " pływa w rzece " . $row["akwen"] . " , " . $row["wojewodztwo"];
						echo "</li>";
					}
					?>


					<!-- <li>Lorem ipsum dolor sit amet consectetur </li>
					<li>Lorem ipsum dolor sit amet.</li> -->
				</ol>
			</div>
			<div id="table">
				<h3>Ryby drapieżne naszych wód</h3>

				<table>
					<tr>
						<th>L.p.</th>
						<th>Gatunek</th>
						<th>Występowanie</th>
					</tr>
					<?php
					$q1 = "SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE  styl_zycia = 1;";

					$r1 = $db->query($q1);
					while ($row1 = $r1->fetch_assoc()) {
						echo
							"<tr>"
							. "<td>" . $row1["id"] . "</td>"
							. "<td>" . $row1["nazwa"] . "</td>"
							. "<td>" . $row1["wystepowanie"] . "</td>"
							. "</tr>";
					}

					?>
				</table>

			</div>
		</div>
		<div id="right">
			<img id="rightImg" src="ryba1.jpg" alt="Sum">
			<br>
			<a href="kwerendy.txt">Pobierz kwerendy</a>
		</div>
	</main>
	<footer>
		<p>Stronę wykonał: 0417152062</p>
	</footer>
	<?php
	$db->close();
	?>
</body>

</html>