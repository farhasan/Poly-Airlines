<?php

session_start();

include '../dbh.php';
include 'com_funcs.php';
?>

<?php if(isset($_SESSION['booking_agent_id'])) : 
    echo "<h1>View My Commission</h1>";
    
    $b_id = $_SESSION['booking_agent_id'];
    getTotalCommission($conn, $b_id);
    
    echo '<a href="../../index.php">Home</a>';
?>

<?php else: ?>

<h3>You need to be a Booking Agent to view Commission!</h3>
<a href="../logins/login.php">Login</a>

<?php endif; ?>