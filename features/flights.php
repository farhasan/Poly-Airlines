<?php

function getFlights($conn)
{
    $sql = "SELECT * FROM flight";
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<h4>", $row['airline_name'], " ", $row['flight_num'], ", From ", $row['departure_airport'], " at ", $row['departure_time'], " to ", $row['arrival_airport'], " at ", $row['arrival_time'], ", $", $row['price'], ", Status: ", $row['status'], "<br><br></h4>";
    }
    ;
}

function searchDepartingAirports($conn)
{
    $sql = "SELECT DISTINCT departure_airport FROM flight";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
       echo '<option value="'.$row['departure_airport'].'">' .$row['departure_airport'].'</option>';
    }
    ;
}

function searchArrivingAirports($conn)
{
    $sql = "SELECT DISTINCT arrival_airport FROM flight";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<option value="'.$row['arrival_airport'].'">' .$row['arrival_airport'].'</option>';
    }
    ;
}

function searchDepartDates($conn)
{
    $sql = "SELECT DISTINCT departure_time FROM flight";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<option value="'.$row['departure_time'].'">' .$row['departure_time'].'</option>';
    }
    ;
}

function getCustomerPurchases($conn, $c_email)
{
    $sql = "SELECT * FROM purchases WHERE customer_email='$c_email'";
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<h4>Ticket #: ", $row['ticket_id'], "<br>Purchased By: ", $row['customer_email'], "<br>Purchased On ", $row['purchase_date'], "<br><br></h4>";
    }
    ;
}

function getBookingPurchases($conn, $b_id)
{
    $sql = "SELECT * FROM purchases natural join booking_agent WHERE booking_agent_id='$b_id'";
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<h4>Ticket #: ", $row['ticket_id'], "<br>Purchased For: ", $row['customer_email'], "<br>Purchased On ", $row['purchase_date'], "<br><br></h4>";
    }
    ;
}

function getAirlineFlights($conn, $a_username)
{
    $sql = "SELECT * FROM flight NATURAL JOIN airline_staff WHERE username='$a_username'";
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<h4>", $row['airline_name'], " ", $row['flight_num'], ", From ", $row['departure_airport'], " at ", $row['departure_time'], " to ", $row['arrival_airport'], " at ", $row['arrival_time'], ", $", $row['price'], ", Status: ", $row['status'], "<br><br></h4>";
    }
    ;
}

function searchFlights($conn)
{
    $sql = "SELECT * FROM flight";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<option value="'.$row['flight_num'].'">' .$row['airline_name']. '</option>';
    }
    ;
}
?>