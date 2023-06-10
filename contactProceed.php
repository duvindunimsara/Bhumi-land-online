<?php
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if any form field is empty
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
        echo "<script>alert('Please fill in all the required fields.'); window.location.replace('contact.php');</script>";
        exit();
    }

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert the data into the "messages" table
    $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully
        echo "<script>alert('Thank you for your message! We will get back to you soon.'); window.location.replace('contact.php');</script>";
        exit();
    } else {
        // Error occurred while inserting data
        echo "<script>alert('Sorry, an error occurred. Please try again later.'); window.location.replace('contact.php');</script>";
        exit();
    }
} else {
    // Invalid request, redirect to contact.php
    header("Location: contact.php");
    exit();
}
?>
