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

    public function getAllReservations() {
        $result = $this->conn->query("SELECT * FROM form_reservation");
        $reservations = [];
    
        while ($row = $result->fetch_assoc()) {
            $reservations[] = $row;
        }
    
        return $reservations;
    }
    
    public function deleteReservation($reservation_id) {
    $stmt = $this->conn->prepare("DELETE FROM form_reservation WHERE reservation_id = ?");
    $stmt->bind_param("i", $reservation_id);

    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $stmt->close();
        // Tampilkan pesan kesalahan
        echo "Error: " . $this->conn->error;
        return false;
    }
}
    
}
?>
