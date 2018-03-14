<?php

session_start();

include '../../dbh.php';


$airport_name = $_POST['airport_name']; 
$airport_city = $_POST['airport_city'];

$sql = "INSERT INTO airport (airport_name, airport_city) VALUES ('$airport_name', '$airport_city')";

$result = mysqli_query($conn, $sql);

header("Location: ../allairports.php")
?>