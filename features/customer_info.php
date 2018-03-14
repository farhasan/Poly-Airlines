<?php
session_start();

include '../dbh.php';
include 'cust_funcs.php';
?>

<?php if((isset($_SESSION['a_username'])) or isset($_SESSION['booking_agent_id'])) : ?>

<h1>Customer Info</h1>
<br>
<h3>The Most Frequent Customer</h3>

<?php
getTopCustomer($conn);
?>

<h4>Select a Customer</h4>

<form action="searchs/cust_search.php" method="POST">
    <select name= "customer">
<?php
    getCustomerInfo($conn);
?>
    </select>
    <button type="submit">Select</button>
</form>



<a href="../index.php">Home</a>

<?php else: ?>
<h3>You must be an Airline Staff or a Booking Agent to view customer info</h3>
<a href="../../logins/login.php">Login</a>
<?php endif; ?>
