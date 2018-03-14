<h1>Log In</h1>

<?php
    session_start();
?>

<?php if(isset($_SESSION['customer_email']) or (isset($_SESSION['booking_email'])) or (isset($_SESSION['a_username']))) : ?>
<h3>You're already logged in!</h3>

<a href="../index.php">Home</a>

<?php else: ?>

<h3>Customer Login</h3><br>
<form action="c_login.php" method="POST">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

<br><br><br>
<h3>Booking Agent Login</h3>
<form action="b_login.php" method="POST">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

<br><br><br>
<h3>Airline Staff Login</h3>
<form action="a_login.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

<?php endif; ?>