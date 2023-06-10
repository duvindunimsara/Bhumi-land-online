<?php 

include_once 'connection.php';

?>


<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link href="land form.css" rel="stylesheet">
  <style>
    body {
      background-image: url("land.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
    
    .input {
      width: 98%;
    }
    
    .reset, .submit {
      width: 48%;
      height: 30px;
      outline: none;
      border: none;
      cursor: pointer;
    }
    
    .submit:hover {
      background-color: gray;
      color: black;
    }
    
    .submit-button {
      background-color: #23b17d;
      color: #5b4f4f;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
      transition: background-color 0.3s ease;
    }
    
    .submit-button:hover {
      background-color: yellow;
    }
    
    .blur-form {
      backdrop-filter: blur(8px);
      background-color: rgba(255, 255, 255, 0.5);
    }
    
    .photo-preview {
      max-width: 200px;
      max-height: 200px;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<?php
// read_contacts.php


$sql = "SELECT * FROM contact us";

// Execute the query
$result = mysqli_query($connection, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Display table header
    echo "<table>";
    echo "<tr><th>Contact ID</th><th>Name</th><th>Phone No</th><th>Email</th><th>Subject</th><th>Message</th><th>Action</th></tr>";

    // Loop through each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        // Access the contact details
        $contactId = $row['contact_id'];
        $firstName = $row['first_name'];
        $lastName = $row['last_name'];
        $phoneNo = $row['phone_no'];
        $email = $row['email'];
        $subject = $row['subject'];
        $message = $row['message'];

        // Display the contact details in table rows
        echo "<tr>";
        echo "<td>$contactId</td>";
        echo "<td>$firstName $lastName</td>";
        echo "<td>$phoneNo</td>";
        echo "<td>$email</td>";
        echo "<td>$subject</td>";
        echo "<td>$message</td>";
        echo "<td><a href='delete_contact.php?contact_id=$contactId'>Delete</a></td>"; // Delete button 
        echo "</tr>";
    }

    // Close the table
    echo "</table>";
} else {
    echo "No contacts found";
}

// Close the database connection
mysqli_close($connection);
?>



                      
</body>
</html>