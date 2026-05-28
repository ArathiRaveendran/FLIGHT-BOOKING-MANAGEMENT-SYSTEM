<?php

$conn = mysqli_connect("localhost","root","","journey","3307");

$sql = "SELECT 
tickets.ticket_id,
passengers.first_name,
passengers.last_name,
flights.Flightnameno,
flights.departure_city,
flights.arrival_city,
tickets.price

FROM tickets

JOIN passengers
ON tickets.passenger_id = passengers.passenger_id

JOIN flights
ON tickets.flight_id = flights.flight_id";

$result = mysqli_query($conn,$sql);

echo "<h2>Ticket Details</h2>";

echo "<table border='1'>";

echo "<tr>
<th>Ticket ID</th>
<th>Passenger Name</th>
<th>Flight</th>
<th>Departure</th>
<th>Arrival</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";

    echo "<td>".$row['ticket_id']."</td>";

    echo "<td>".
    $row['first_name']." ".
    $row['last_name'].
    "</td>";

    echo "<td>".$row['Flightnameno']."</td>";

    echo "<td>".$row['departure_city']."</td>";

    echo "<td>".$row['arrival_city']."</td>";

    echo "<td>".$row['price']."</td>";

    echo "</tr>";
}

echo "</table>";

?>