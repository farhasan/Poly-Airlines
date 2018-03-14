<?php

session_start();

include '../../dbh.php';


$airline_name = $_POST['airline_name']; 
$flight_num = $_POST['flight_num'];
$departure_airport = $_POST['departure_airport'];
$departure_time = $_POST['departure_time'];
$arrival_airport = $_POST['arrival_airport'];
$arrival_time = $_POST['arrival_time'];
$price = $_POST['price'];
$status = $_POST['status'];
$airplane_id = $_POST['airplane_id'];

$sql = "INSERT INTO flight(airline_name, flight_num, departure_airport, departure_time, arrival_airport, arrival_time, price, status, airplane_id)
VALUES ('$airline_name', '$flight_num', '$departure_airport', '$departure_time', '$arrival_airport', '$arrival_time', '$price', '$status', '$airplane_id');" ;

$result = mysqli_query($conn, $sql);

header("Location: ../flightlist.php");
?>