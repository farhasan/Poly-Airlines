<?php
session_start();

include '../dbh.php';
?>

<?php if(isset($_SESSION['a_username'])) : ?>

<h1>Airplane List</h1>

<?php
$sql = "SELECT * FROM airplane";
$result = mysqli_query($conn, $sql);
    
while($row = mysqli_fetch_assoc($result))
{
    echo "<h4>Airline: ", $row['airline_name'], "<br>Airplane_ID: ", $row['airplane_id'], "<br>Seats: ", $row['seats'], "</h4>";
}
;
?>

<a href="../index.php">Home</a>

<?php else: ?>
<h3>You must be an Airline Staff to add an airplane</h3>
<a href="../../logins/login.php">Login</a>
<?php endif; ?>


