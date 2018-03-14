<?php
    session_start();
?>

<?php if(isset($_SESSION['customer_email'])) : ?>

<h1>Welcome to PolyAir</h1>

<h3>You are logged in as a Customer</h3>

<ul>
    <li><a href="features/flightlist.php">View All Flights</a></li>
    <li><a href="features/searchflights.php">Search for a Flight</a></li>
    <li><a href="features/myflights.php">View Purchased Flights</a></li>
</ul>

<form action="logins/logout.php">
    <button>Log Out</button>
</form>

<?php elseif(isset($_SESSION['booking_agent_id'])) : ?>

<h1>Welcome to PolyAir</h1>

<h3>You are logged in as a Booking Agent</h3>

<ul>
    <li><a href="features/flightlist.php">View All Flights</a></li>
    <li><a href="features/searchflights.php">Search for a Flight</a></li>
    <li><a href="features/myflights.php">View Purchased Flights</a></li>
    <li><a href="features/commission.php">View Commission</a></li>
    <li><a href="features/customer_info.php">View Customer Info</a></li>
</ul>

<form action="logins/logout.php">
    <button>Log Out</button>
</form>

<?php elseif(isset($_SESSION['a_username'])) : ?>

<h1>Welcome to PolyAir</h1>

<h3>You are logged in as an Airline Staff</h3>

<ul>
    <li><a href="features/flightlist.php">View All Flights</a></li>
    <li><a href="features/searchflights.php">Search for a Flight</a></li>
    <li><a href="features/myflights.php">My Flights</a></li>
    <li><a href="features/adds/addairplane.php">Add an Airplane</a></li>
    <li><a href="features/adds/addairport.php">Add an Airport</a></li>
    <li><a href="features/adds/addflight.php">Add a Flight</a></li>
    <li><a href="features/adds/changestatus.php">Change Flight Status</a></li>
    <li><a href="features/agentlist_tickets.php">View Top Agents</a></li>
    <li><a href="features/customer_info.php">View Customer Info</a></li>
</ul>

<form action="logins/logout.php">
    <button>Log Out</button>
</form>

<?php else: ?>

<h1>Welcome to PolyAir</h1>

<ul>
    <li><a href="signups/register.php">Register</a></li>
    <li><a href="logins/login.php">Log In</a></li>
    <li><a href="features/flightlist.php">View All Flights</a></li>
    <li><a href="features/searchflights.php">Search for a Flight</a></li>
</ul>

<?php endif; ?>


