<?php
include 'config.php';

// Check if the email parameter is set in the query string
if (isset($_GET['email'])) {
    // Retrieve the email from the query string
    $mailingEmail = $_GET['email'];

    // Delete the email from the mailing_list table
    $sql = "DELETE FROM mailing_list WHERE mailingEmail = '$mailingEmail'";

    if (mysqli_query($conn, $sql)) {
        // Email unsubscribed successfully
        echo "<script>alert('You have successfully unsubscribed from our mailing list.'); window.location.replace('contact.php');</script>";
        exit();
    } else {
        // Error occurred while unsubscribing
        echo "<script>alert('Sorry, an error occurred while unsubscribing. Please try again later.'); window.location.replace('editMailing.php?email=" . $email . "');</script>";
        exit();
    }
} else {
    // Invalid request, redirect to contact.php
    header("Location: contact.php");
    exit();
}
?>
