<?php

$conn = mysqli_connect("localhost","root","","journey","3307");

$pid = $_POST['passenger_id'];
$fid = $_POST['flight_id'];
$price = $_POST['price'];

$sql = "INSERT INTO tickets
(passenger_id,flight_id,price)
VALUES
('$pid','$fid','$price')";

if(mysqli_query($conn,$sql))
{
    echo "Ticket Generated Successfully";
}
else
{
    echo mysqli_error($conn);
}

?>