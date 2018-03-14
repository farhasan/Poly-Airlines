<?php

session_start();

include '../../dbh.php';


$airline_name = $_POST['airline_name']; 
$airplane_id = $_POST['airplane_id'];
$seats = $_POST['seats'];


$sql1 = "INSERT INTO airline (airline_name) VALUES ('$airline_name')";
$sql2 = "INSERT INTO airplane (airline_name, airplane_id, seats) VALUES ('$airline_name', '$airplane_id', '$seats')";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);

header("Location: ../allplanes.php")
?>