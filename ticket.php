<?php
$conn = mysqli_connect("localhost","root","","journey","3307");
?>

<!DOCTYPE html>
<html>
<body>

<h2>Ticket Booking</h2>

<form action="ticket_insert.php" method="post">

Passenger:
<select name="passenger_id">

<?php
$p = mysqli_query($conn,"SELECT * FROM passengers");

while($row = mysqli_fetch_assoc($p))
{
    echo "<option value='".$row['passenger_id']."'>"
    .$row['first_name']." ".$row['last_name'].
    "</option>";
}
?>

</select>

<br><br>

Flight:
<select name="flight_id">

<?php
$f = mysqli_query($conn,"SELECT * FROM flights");

while($row = mysqli_fetch_assoc($f))
{
    echo "<option value='".$row['flight_id']."'>"
    .$row['flightnameno'].
    "</option>";
}
?>

</select>

<br><br>

Price:
<input type="text" name="price">

<br><br>

<input type="submit" value="Generate Ticket">

</form>

</body>
</html>