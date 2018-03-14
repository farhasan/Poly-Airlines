<?php

session_start();

include '../dbh.php';


$email = $_POST['email']; 
$password = $_POST['password'];

$hashed = md5($password);

$sql = "SELECT * FROM booking_agent WHERE email='$email' AND password='$hashed'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) 
{
    header("Location: login_error.php");
}
else 
{
    $_SESSION['booking_agent_id'] = $row['booking_agent_id'];
    header("Location: logged_in.php");
}

?>