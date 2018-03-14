<?php

session_start();

include '../dbh.php';


$username = $_POST['username']; 
$password = $_POST['password'];

$hashed = md5($password);

$sql = "SELECT * FROM airline_staff WHERE username='$username' AND password='$hashed'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) 
{
    header("Location: login_error.php");
}
else 
{
    $_SESSION['a_username'] = $row['username'];
    header("Location: logged_in.php");
}

?>