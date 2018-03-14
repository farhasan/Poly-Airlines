<?php
    session_start();
?>

<?php if(isset($_SESSION['a_username'])) : ?>
<h1>Change Flight Status</h1>

<form action="cfs.php" method="POST">
    <input type="text" name="airline_name" placeholder="Airline">
    <input type="text" name="flight_num" placeholder="Flight Number">
    <input type="text" name="status" placeholder="Status">
    <button type="submit">Submit</button>
</form>

<?php else: ?>
<h3>You must be an Airline Staff to add an airport</h3>
<a href="../../logins/login.php">Login</a>
<?php endif; ?>
