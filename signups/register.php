<?php
    session_start();
?>

<?php if(isset($_SESSION['customer_email']) or (isset($_SESSION['booking_email'])) or (isset($_SESSION['a_username']))) : ?>
<h3>Log out before registering</h3>

<a href="../index.php">Home</a>

<?php else: ?>

<h1>Registration</h1>

<h3>Customer Registration</h3><br>
<form action="c_signup.php" method="POST">
    <input type="text" name="name" placeholder="Full Name">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="building_number" placeholder="Building Number">
    <input type="text" name="street" placeholder="Street">
    <input type="text" name="city" placeholder="City">
    <input type="text" name="state" placeholder="State">
    <input type="text" name="phone_number" placeholder="Phone Number">
    <input type="text" name="passport_number" placeholder="Passport Number">
    <input type="text" name="passport_expiration" placeholder="Passport Expiration">
    <input type="text" name="passport_country" placeholder="Passport Country">
    <input type="text" name="date_of_birth" placeholder="DOB">
    <button type="submit">Submit</button>
</form>

<br><br><br>
<h3>Booking Agent Registration</h3>
<form action="b_signup.php" method="POST">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="booking_agent_id" placeholder="Agent ID">
    <button type="submit">Submit</button>
</form>

<br><br><br>
<h3>Airline Staff Registration</h3>
<form action="a_signup.php" method="POST">
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="date_of_birth" placeholder="DOB">
    <input type="text" name="airline_name" placeholder="Airline">
    <button type="submit">Submit</button>
</form>

<?php endif; ?>
