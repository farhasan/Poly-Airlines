<?php

session_start();

include '../../dbh.php';


$airline_name = $_POST['airline_name']; 
$flight_num = $_POST['flight_num'];
$status = $_POST['status'];


$sql = "UPDATE flight SET status='$status' WHERE (airline_name='$airline_name' AND flight_num='$flight_num');" ;

$result = mysqli_query($conn, $sql);

header("Location: ../flightlist.php");
?>