<?php
function getTopCustomer($conn)
{
    $sql1 = "select customer_email, count(customer_email) as ticket_num from purchases group by customer_email order by ticket_num desc limit 1;";
    $result1 = mysqli_query($conn, $sql1);
    
    while($row = mysqli_fetch_assoc($result1))
    {
        echo "<h4>Customer Email: ", $row['customer_email'], "<br>Tickets Bought: ", $row['ticket_num'], "</h4>";
    }
}

function getCustomerInfo($conn)
{
    $sql = "SELECT DISTINCT email FROM customer";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
       echo '<option value="'.$row['email'].'">' .$row['email'].'</option>';
    }
    ;
}

?>