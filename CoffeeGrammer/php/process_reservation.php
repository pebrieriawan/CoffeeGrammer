<?php
require_once 'reservation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $date = $_POST["date"];
    $message = $_POST["message"];

    $reservation = new Reservation();

    if ($reservation->submitReservation($name, $email, $number, $date, $message)) {
        echo "Form berhasil dikirim!";
        // Redirect ke halaman utama setelah formulir berhasil dikirim
        header("Location: http://localhost/CoffeeGrammer-main/CoffeeGrammer");
        exit();
    } else {
        echo "Terjadi kesalahan saat mengirim form.";
    }
}
?>
