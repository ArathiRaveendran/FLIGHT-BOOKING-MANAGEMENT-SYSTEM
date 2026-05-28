<?php
$conn = mysqli_connect("localhost","root","","journey","3307");

$departure = $_POST['departure_city'];
$arrival = $_POST['arrival_city'];

$sql = "SELECT * FROM flights 
        WHERE departure_city='$departure' 
        AND arrival_city='$arrival'";

$result = mysqli_query($conn,$sql);

echo "<h2>Search Results</h2>";
echo "<table border='1'>";

echo "<tr>
<th>Flight ID</th>
<th>Flight Name</th>
<th>Departure City</th>
<th>Arrival City</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['flight_id']."</td>";
    echo "<td>".$row['Flightnameno']."</td>";
    echo "<td>".$row['departure_city']."</td>";
    echo "<td>".$row['arrival_city']."</td>";
    echo "<td>".$row['departure_date']."</td>";
    echo "</tr>";
}

echo "</table>";
?>