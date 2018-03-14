<?php
    session_start();
?>

<?php if(isset($_SESSION['a_username'])) : ?>
<h1>Add a Flight</h1>

<form action="af.php" method="POST">
    <input type="text" name="airline_name" placeholder="Airline">
    <input type="text" name="flight_num" placeholder="Flight Number">
    <input type="text" name="departure_airport" placeholder="Depart From">
    <input type="text" name="departure_time" placeholder="Depart At">
    <input type="text" name="arrival_airport" placeholder="Arrive To">
    <input type="text" name="arrival_time" placeholder="Arrive At">
    <input type="text" name="price" placeholder="Price">
    <input type="text" name="status" placeholder="Status">
    <input type="text" name="airplane_id" placeholder="Airplane ID">
    <button type="submit">Submit</button>
</form>

<?php else: ?>
<h3>You must be an Airline Staff to add an airport</h3>
<a href="../../logins/login.php">Login</a>
<?php endif; ?>
