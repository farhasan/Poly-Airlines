<?php
session_start();

include '../dbh.php';
include 'com_funcs.php';
?>

<?php if(isset($_SESSION['a_username'])) : ?>

<h1>Top Booking Agents</h1>
<h3>Based on Commission</h3>

<?php
getTopComAgents($conn);
?>

<a href="agentlist_tickets.php">View Top Ticket Sellers</a>

<a href="../index.php">Home</a>

<?php else: ?>
<h3>You must be an Airline Staff to view top agents</h3>
<a href="../../logins/login.php">Login</a>
<?php endif; ?>
