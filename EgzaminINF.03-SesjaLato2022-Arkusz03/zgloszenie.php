<?php
$conn = mysqli_connect(
	'localhost',
	'root',
	'',
	'wedkarstwo'
);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$lowisko = $_POST['lowisko'];
$date = $_POST['data'];
$sedzia = $_POST["sedzia"];

$q = "INSERT INTO `zawody_wedkarskie` (`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`)
VALUES (NULL, 0, $lowisko, '$date', $sedzia);
";
mysqli_query($conn, $q);




mysqli_close($conn);
?>