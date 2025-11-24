<?php
$conn = mysqli_connect(
	localhost,
	root,
	wedkarstwo
);

if ($conn->connect_error) {
	die("conn faile" . $conn->connect_error);
}
$q = "INSERT INTO `zawody_wedkarskie` (`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (NULL, '2', '4', '2021-09-28', ' Andrzej Nowak');";
// зміні для повончення

$lowisko = $_POST['lowisko'];
$date = $_POST['data'];
$sedzia = $_POST["sedzia"];





$conn->close();
?>