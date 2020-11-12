<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', ''); 
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test');

// Make the connection:
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Notify if connection failed
if ($conn->connect_error) {
    die("Connect failed: " . $conn->connect_error);
}
// Set the encoding...optional but recommended
mysqli_set_charset($conn, 'utf8');
