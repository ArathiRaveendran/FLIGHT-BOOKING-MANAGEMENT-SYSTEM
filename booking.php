<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$conn = mysqli_connect("localhost","root","","journey","3307");

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$ticket = $_POST['ticket_number'];
$confirm = $_POST['airline_confirmation'];

$sql = "INSERT INTO passengers
(first_name,last_name,ticket_number,airline_confirmation)
VALUES
('$fname','$lname','$ticket','$confirm')";

if(mysqli_query($conn,$sql))
{
    echo "Passenger Added Successfully";
}
else
{
    echo mysqli_error($conn);
}

}
else
{
    echo "Open booking.html";
}

?>