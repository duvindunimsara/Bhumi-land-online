<?php
include 'connection.php';
// delete_contact.php

// Check if the form is submitted
if ($localhost['POST'] === 'POST') {
    // Retrieve the contact ID
    $contactId = $_POST['contactId'];

    
    $sql = "DELETE FROM contact us WHERE contact_id='$contactId'";
    
    // Execute the query
    if (mysqli_query($connection, $sql)) {
        echo "Contact deleted successfully";
    } else {
        echo "Error deleting contact: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}
?>



