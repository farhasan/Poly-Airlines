<?php
    session_start();
?>

<?php if(isset($_SESSION['a_username'])) : ?>
<h1>Add an Airport</h1>

<form action="aap.php" method="POST">
    <input type="text" name="airport_name" placeholder="Airport Name">
    <input type="text" name="airport_city" placeholder="City">
    <button type="submit">Submit</button>
</form>

<?php else: ?>
<h3>You must be an Airline Staff to add an airport</h3>
<a href="../../logins/login.php">Login</a>
<?php endif; ?>
