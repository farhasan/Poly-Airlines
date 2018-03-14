<?php

function getTotalCommission($conn, $b_id)
{
    $sql1 = "SELECT price FROM ticket NATURAL JOIN (purchases NATURAL JOIN flight) WHERE booking_agent_id='$b_id'";
    $result1 = mysqli_query($conn, $sql1);
    
    while($row = mysqli_fetch_assoc($result1))
    {
        echo "<h4>Price of Total Ticket Sales: ", $row['price'], "</h4>";
    }
    
    $sql2 = "SELECT (SUM(price) * 0.1) AS total_commission FROM ticket NATURAL JOIN (purchases NATURAL JOIN flight) WHERE booking_agent_id='$b_id'";
    $result2 = mysqli_query($conn, $sql2);
    
    while($row = mysqli_fetch_assoc($result2))
    {
        echo "<h4>Total Commission Earned: ", $row['total_commission'], "</h4>";
    }
}

function getTopTicketsAgents($conn)
{
    $sql1 = "select booking_agent_id,count(booking_agent_id) as ticket_count from purchases natural join booking_agent group by booking_agent_id order by ticket_count desc limit 5; ";
    $result1 = mysqli_query($conn, $sql1);
    
    while($row = mysqli_fetch_assoc($result1))
    {
        echo "<h4>Agent ID: ", $row['booking_agent_id'], "<br>Tickets Sold: ", $row['ticket_count'], "</h4>";
    }
}

function getTopComAgents($conn)
{
    $sql1 = "SELECT booking_agent_id, (SUM(price) * 0.1) AS total_commission FROM ticket NATURAL JOIN (purchases NATURAL JOIN flight) WHERE booking_agent_id !='NULL' ORDER BY total_commission DESC LIMIT 5;";
    $result1 = mysqli_query($conn, $sql1);
    
    while($row = mysqli_fetch_assoc($result1))
    {
        echo "<h4>Agent ID: ", $row['booking_agent_id'], "<br>Total Commission: ", $row['total_commission'], "</h4>";
    }
}

?>