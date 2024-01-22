<?php
require_once 'reservation.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $reservation_id = $_GET['id'];
    $reservation = new Reservation();

    if ($reservation->deleteReservation($reservation_id)) {
        echo "Data reservasi berhasil dihapus!";
        header("Location: http://localhost/CoffeeGrammer-main/CoffeeGrammer/admin/admin.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menghapus data reservasi.";
    }
}
