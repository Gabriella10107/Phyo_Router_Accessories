<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "wifi"; // Change this to your actual database name

// Create a MySQLi connection
$conn = new mysqli($host, $user, $pass, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
