<?php
    session_start();
    include '../dbh.php';
    include 'flights.php';
?>

<?php if(isset($_SESSION['customer_email'])) : 
    echo "<h1>My Flights<h1>";
    
    $c_email = $_SESSION['customer_email'];
    getCustomerPurchases($conn, $c_email);
    
    echo '<a href="../../index.php">Home</a>';
?>


<?php elseif(isset($_SESSION['booking_agent_id'])) :
    echo "<h1>My Flights</h1>";
    
    $b_id = $_SESSION['booking_agent_id'];

    getBookingPurchases($conn, $b_id);
    
    echo '<a href="../../index.php">Home</a><br>';

?>

<?php elseif(isset($_SESSION['a_username'])) :
    echo "<h1>My Flights</h1>";
    
    $a_username = $_SESSION['a_username'];
    getAirlineFlights($conn, $a_username);
    
    echo '<a href="../../index.php">Home</a><br>';

?>

<?php else: ?>

<h3>You need to be logged in to view your flights!</h3>
<a href="../logins/login.php">Login</a>

<?php endif; ?>