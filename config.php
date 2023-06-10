<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhumi_land";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
