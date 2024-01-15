<?php
require_once 'db_config.php';

class reservation {
    private $conn;

    public function __construct() {
        global $koneksi;
        $this->conn = $koneksi;
    }

    public function submitReservation($name, $email, $number, $date, $message) {
        $stmt = $this->conn->prepare("INSERT INTO form_reservation (name, email, phone_number, reservation_date, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $number, $date, $message);

        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }
}
?>
