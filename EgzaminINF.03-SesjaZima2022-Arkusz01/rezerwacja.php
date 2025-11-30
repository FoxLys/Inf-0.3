<?php

echo "Dodano rezerwację do bazy";

$conn = mysqli_connect(
	'localhost',
	'root',
	'',
	'baza'
);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$date = $_POST['date'];
$people = $_POST['people'];
$telefon = $_POST['telefon'];

$q = "INSERT INTO `rezerwacje`(`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, 1 , '$date' , '$people' , '$telefon')";

mysqli_query($conn, $q);

mysqli_close($conn);
?>