<?php
$conn = mysqli_connect("localhost","root","","journey","3307");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully";
?>