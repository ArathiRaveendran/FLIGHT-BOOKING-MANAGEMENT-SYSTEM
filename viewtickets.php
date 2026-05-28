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

?>

<!DOCTYPE html>
<html>

<head>
    <title>View Tickets</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f6ff;
            margin: 0;
        }

        .header {
            background: #1e88e5;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        .container {
            width: 90%;
            margin: auto;
            margin-top: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background: #1e88e5;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>
</head>

<body>

<div class="header">
    🎟 Ticket Details
</div>

<div class="container">

<div class="card">

<?php

echo "<table>";

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

</div>

</div>

</body>

</html>