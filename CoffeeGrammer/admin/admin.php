<?php
require_once '../php/reservation.php';

// Ambil data reservasi dari database
$reservation = new Reservation();
$reservations = $reservation->getAllReservations();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - CoffeeGrammer</title>
    <link rel="icon" href="../image/favicon-logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
    <h1>Data Reservasi Customer</h1>
    <table border="1">
        <tr>
            <th>Reservation ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Reservation Date</th>
            <th>Message</th>
            <th>Created Date</th>
            <th>Delete Data</th>
        </tr>
        <?php foreach ($reservations as $res) : ?>
            <tr>
                <td><?= $res['reservation_id']; ?></td>
                <td><?= $res['name']; ?></td>
                <td><?= $res['email']; ?></td>
                <td><?= $res['phone_number']; ?></td>
                <td><?= $res['reservation_date']; ?></td>
                <td><?= $res['message']; ?></td>
                <td><?= $res['created_date']; ?></td>
                <td><a class="delete-button" href="../php/delete_reservation.php?id=<?= $res['reservation_id']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
