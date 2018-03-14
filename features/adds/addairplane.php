<?php
    session_start();
?>

<?php if(isset($_SESSION['a_username'])) : ?>
<h1>Add an Airplane</h1>

<form action="aa.php" method="POST">
    <input type="text" name="airline_name" placeholder="Airline Name">
    <input type="text" name="airplane_id" placeholder="Airplane ID">
    <input type="text" name="seats" placeholder="Seats">
    <button type="submit">Submit</button>
</form>

<?php else: ?>
<h3>You must be an Airline Staff to add an airplane</h3>
<a href="../../logins/login.php">Login</a>
<?php endif; ?>
