<?php

session_start();

include '../../dbh.php';
?>

<?php

$departure_airport = $_POST['departure_airport']; 
$sql = "SELECT * FROM flight WHERE departure_airport = '$departure_airport'";

$result = mysqli_query($conn, $sql);

echo "<h3>Flights Departing at ", $departure_airport, "</h3>";

while($row = mysqli_fetch_assoc($result))
    {
        echo "<h4>", $row['airline_name'], " ", $row['flight_num'], ", From ", $row['departure_airport'], " at ", $row['departure_time'], " to ", $row['arrival_airport'], " at ", $row['arrival_time'], ", $", $row['price'], ", Status: ", $row['status'], "<br><br></h4>";
    }
    ;
?>

<a href="../searchflights.php">Back to Search</a>