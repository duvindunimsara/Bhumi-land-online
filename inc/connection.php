<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bhumi_land";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    $response = "No";
} else {
    echo "<script>console.log('Connected successfully')</script>";
}

// Close the connection
#$conn->close();

?>
