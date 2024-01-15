CREATE TABLE form_reservation (
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    reservation_date DATE NOT NULL,
    message TEXT,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
