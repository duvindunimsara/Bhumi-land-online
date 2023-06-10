<?php
if(isset($_POST["submit"]))
{
include 'connection.php';


        
            // Retrieve form data
            
            $firstName = $_POST['name'];
            $lastName = $_POST['lastname'];
            $email = $_POST['e_mail'];
            $phoneNo = $_POST['phone_number'];
            $subject = $_POST['subjects'];
            $message = $_POST['messages'];

            
            $sql = "INSERT INTO contact_us(first_name, last_name, e_mail, phone_number, subjects, messages)
            VALUES('$firstName', '$lastName', '$email', '$phoneNo', '$subject', '$message')";
         

            /*if (mysqli_query($connection, $sql)) 
            {
                echo "Contact created successfully";
            } 
            else 
            {
                echo "Error creating contact: " . mysqli_error($connection);
            }*/
            if ($conn->query($sql) === TRUE)
                        {
                            echo "Contact created successfully";
                        } 
                         else 
                        {
                            echo "Error: " . $conn->error;
                        }

            
             // Close the database connection
                $conn->close();
        
}
else
{
    echo'error';
}