<?php

$conn = mysqli_connect("localhost","root","","journey","3307");

$id = $_POST['ticket_id'];

$sql = "DELETE FROM tickets WHERE ticket_id='$id'";

if(mysqli_query($conn,$sql))
{
    echo "Ticket Cancelled Successfully";
}
else
{
    echo mysqli_error($conn);
}

?>