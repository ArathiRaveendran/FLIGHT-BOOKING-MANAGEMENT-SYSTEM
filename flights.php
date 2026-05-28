<?php
$conn = mysqli_connect("localhost","root","","journey","3307");

$sql = "SELECT * FROM flights";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Flight Details</title>

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
    ✈ Flight Details
</div>

<div class="container">

<div class="card">

<?php
echo "<table>";

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

</div>

</div>

</body>

</html>