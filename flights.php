<?php
$conn = mysqli_connect("localhost","root","","journey","3307");

$sql = "SELECT * FROM flights";
$result = mysqli_query($conn, $sql);

echo "<h2>Flight Details</h2>";
echo "<table border='1'>";
echo "<tr>
<th>Flight ID</th>
<th>Flight Name No</th>
<th>Departure City</th>
<th>Arrival City</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['flight_id']."</td>";
    echo "<td>".$row['flightnameno']."</td>";
    echo "<td>".$row['departure_city']."</td>";
    echo "<td>".$row['arrival_city']."</td>";
    echo "</tr>";
}

echo "</table>";
?>