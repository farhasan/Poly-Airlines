<?php
include '../dbh.php';

$name = $_POST['name'];
$email = $_POST['email']; 
$password = $_POST['password'];
$building_number = $_POST['building_number'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$phone_number = $_POST['phone_number'];
$passport_number = $_POST['passport_number'];
$passport_expiration = $_POST['passport_expiration'];
$passport_country = $_POST['passport_country'];
$date_of_birth = $_POST['date_of_birth'];

$hashed = md5($password);


$sql = "INSERT INTO customer (email, name, password, building_number, street, city, state, phone_number, passport_number, passport_expiration, passport_country, date_of_birth)
VALUES ('$email', '$name', '$hashed', '$building_number', '$street', '$city', '$state', '$phone_number', '$passport_number', '$passport_expiration', '$passport_country', '$date_of_birth')";


$result = mysqli_query($conn, $sql);

header("Location: ../index.php")
?>