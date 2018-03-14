<?php
include '../dbh.php';

$email = $_POST['email']; 
$password = $_POST['password'];
$booking_agent_id = $_POST['booking_agent_id'];

$hashed = md5($password);

$sql = "INSERT INTO booking_agent (email, password, booking_agent_id)
VALUES ('$email', '$hashed', '$booking_agent_id')";


$result = mysqli_query($conn, $sql);

header("Location: ../index.php")
?>