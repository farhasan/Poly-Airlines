<?php

session_start();

include '../../dbh.php';
?>

<?php

$email = $_POST['email']; 
$sql = "SELECT * FROM customer WHERE email='$email'";

$result = mysqli_query($conn, $sql);

echo "<h3>Customer Info: ", $email, "</h3>";

while($row = mysqli_fetch_assoc($result))
    {
        echo "<h4>", $row['email'], "<br>", $row['name'], "<br>", $row['building_number'], " ", $row['street'], ", ", $row['city'], " ", $row['state'], "<br>Phone Number: ", $row['phone_number'], "<br>Passport Number: ", $row['passport_number'], ", Passport Expiration: ", $row['passport_expiration'], ", Passport Country: ", $row['passport_country'], "<br>DOB: ", $row['date_of_birth'], "<br><br></h4>";
    }
    ;
?>

<a href="../customer_info.php">Back to Customer Info</a>