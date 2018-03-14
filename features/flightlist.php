<?php
session_start();

include '../dbh.php';
include 'flights.php';
?>

<h1>Flight List</h1>

<?php
getFlights($conn);
?>

<a href="../index.php">Home</a>

