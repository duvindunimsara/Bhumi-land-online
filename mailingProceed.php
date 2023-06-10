<?php
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email field is empty
    if (empty($_POST['mailingEmail'])) {
        echo "<script>alert('Please enter an email address.'); window.location.replace('contact.php');</script>";
        exit();
    }

    // Retrieve form data
    $mailingEmail = $_POST['mailingEmail'];

    // Validate the email address
    if (!filter_var($mailingEmail, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Please enter a valid email address.'); window.location.replace('contact.php');</script>";
        exit();
    }

    // Insert the data into the "mailing_list" table
    $sql = "INSERT INTO mailing_list (mailingEmail) VALUES ('$mailingEmail')";

    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully
        echo "<script>alert('Thank you for subscribing to our mailing list! You will receive future updates at " . $mailingEmail . ".'); window.location.replace('editMailing.php?email=" . $mailingEmail . "');</script>";
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
