CREATE DATABASE MariaDB;

USE MariaDB;

CREATE TABLE todos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    status ENUM('nicht erledigt', 'erledigt') DEFAULT 'nicht erledigt'
);