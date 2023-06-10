<?php
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if any form field is empty
    if (empty($_POST['email'])) {
        echo "<script>alert('Please provide an email address.'); window.location.replace('editMailing.php?email=" . $email . "');</script>";
        exit();
    }

    // Retrieve form data
    $email = $_POST['email'];
    $subscriptions = $_POST['subscription'];

    // Clear existing subscriptions for the email
    $clearSubscriptionsQuery = "DELETE FROM mailing_list WHERE mailingEmail = '$email'";
    mysqli_query($conn, $clearSubscriptionsQuery);

    // Insert new subscriptions for the email
    if (!empty($subscriptions)) {
        $subscriptionString = implode(',', $subscriptions);
        $insertSubscriptionsQuery = "INSERT INTO mailing_list (mailingEmail, subscription_type) VALUES ('$email', '$subscriptionString')";
        mysqli_query($conn, $insertSubscriptionsQuery);
    }

    // Redirect to a success page
    echo "<script>alert('Subscription types updated successfully.'); window.location.replace('editMailing.php?email=" . $email . "');</script>";
    exit();
} else {
    // Invalid request, redirect to the form page
    echo "<script>alert('Invalid request.'); window.location.replace('editMailing.php?email=" . $email . "');</script>";
    exit();
}
?>
