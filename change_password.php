<?php
session_start();
require './inc/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword !== $confirmPassword) {
        echo "New password and confirm password do not match.";
    } else {
        $userID = $_SESSION['sellerID']; 

        
        $query = "SELECT * FROM seller WHERE id = $userID";
        $result = $conn->query($query);

        if ($result->num_rows() == 1) {
            $row = $result->fetch_assoc();
            $passwordHash = $row['password'];

            if (password_verify($currentPassword, $passwordHash)) {
             
                $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);


                $updateQuery = "UPDATE users SET password = '$newPasswordHash' WHERE id = $userID";
                $conn->query($updateQuery);

                echo "Password changed successfully.";
            } else {
                echo "Current password is incorrect.";
            }
        } else {
            echo "User not found.";
        }
    }
}
?>