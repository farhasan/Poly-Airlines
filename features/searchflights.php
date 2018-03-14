<?php

session_start();

include '../dbh.php';
include 'flights.php';

?>

<h1>Search for an Upcoming Flight</h1>

<h4>Select Departing Airport</h4>

<form action="searchs/d_search_post.php" method="POST">
    <select name= "departure_airport">
<?php
    searchDepartingAirports($conn);
?>    
    </select>
    <button type="submit">Select</button>
</form>

<h4>Select Arriving Airport</h4>

<form action="searchs/a_search_post.php" method="POST">
    <select name= "arrival_airport">
<?php
    searchArrivingAirports($conn);
?>
    </select>
    <button type="submit">Select</button>
</form>

<h4>Select Depart Date/Times</h4>

<form action="searchs/dt_search_post.php" method="POST">
    <select name= "departure_time">
<?php
    searchDepartDates($conn);
?>
    </select>
    <button type="submit">Select</button>
</form>

<a href="../index.php">Home</a>




