<?php
$conn = mysqli_connect("localhost","root","","journey","3307");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ticket Booking</title>

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
            width: 40%;
            margin: auto;
            margin-top: 40px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        label {
            font-weight: bold;
        }

        select, input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #1e88e5;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #1565c0;
        }
    </style>
</head>

<body>

<div class="header">
    🎟 Ticket Booking System
</div>

<div class="container">

    <div class="card">

        <form action="ticket_insert.php" method="post">

            <label>Passenger</label>
            <select name="passenger_id" required>

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

            <label>Flight</label>
            <select name="flight_id" required>

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

            <label>Price</label>
            <input type="text" name="price" placeholder="Enter ticket price" required>

            <button type="submit">Generate Ticket</button>

        </form>

    </div>

</div>

</body>

</html>