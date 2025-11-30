<?php

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$conn = mysqli_connect(
	'localhost',
	'root',
	'',
	'wedkarstwo'
);

$lowisko = $_POST['lowisko'];
$date = $_POST['date'];
$sedzia = $_POST['sedzia'];

$q = "INSERT INTO `zawody_wedkarskie` (`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`)
VALUES (NULL, 0, '$lowisko', '$date', '$sedzia');
";
mysqli_query($conn, $q);




mysqli_close($conn);
?>