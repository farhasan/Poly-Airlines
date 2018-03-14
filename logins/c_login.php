<?php

session_start();

include '../dbh.php';


$email = $_POST['email']; 
$password = $_POST['password'];

$hashed = md5($password);

$sql = "SELECT * FROM customer WHERE email='$email' AND password='$hashed'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) 
{
    header("Location: login_error.php");
}
else 
{
    $_SESSION['customer_email'] = $row['email'];
    header("Location: logged_in.php");
}

?>