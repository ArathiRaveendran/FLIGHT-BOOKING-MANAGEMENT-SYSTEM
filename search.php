<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand">✈ Flight Results</a>
    </div>
</nav>

<div class="container mt-5">

<?php

$from = $_POST['from'] ?? '';
$to = $_POST['to'] ?? '';
$date = $_POST['date'] ?? '';

if ($from == '' || $to == '') {
    echo "<div class='alert alert-danger'>No search data received!</div>";
} else {

    echo "
    <div class='alert alert-success'>
        <b>From:</b> $from <br>
        <b>To:</b> $to <br>
        <b>Date:</b> $date
    </div>
    ";

    echo "
    <table class='table table-bordered'>
        <tr>
            <th>Flight ID</th>
            <th>Flight Name</th>
            <th>From</th>
            <th>To</th>
            <th>Date</th>
        </tr>

        <tr>
            <td>101</td>
            <td>Indigo</td>
            <td>$from</td>
            <td>$to</td>
            <td>$date</td>
        </tr>

        <tr>
            <td>202</td>
            <td>Air India</td>
            <td>$from</td>
            <td>$to</td>
            <td>$date</td>
        </tr>
    </table>
    ";
}

?>

</div>

</body>
</html>