<?php
include '../dbh.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username']; 
$password = $_POST['password'];
$date_of_birth = $_POST['date_of_birth'];
$airline_name = $_POST['airline_name'];

$hashed = md5($password);

$sql = "INSERT INTO airline_staff (username, password, first_name, last_name, date_of_birth, airline_name) VALUES ('$username', '$hashed', '$first_name', '$last_name', '$date_of_birth', '$airline_name')";

$result = mysqli_query($conn, $sql);

header("Location: ../index.php")
?>