<?php
    require './inc/connection.php';
    session_start();

    if(isset($_SESSION['user_type'])) {
        if($_SESSION['user_type'] == "seller") {
            $ID = $_SESSION['sellerID'];
            $table = "seller";
        } elseif($_SESSION['user_type'] == "buyer") {
            $ID = $_SESSION['buyerID'];
            $table = "buyer";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $new_name = $_POST['new_name'];
            $new_email = $_POST['new_email'];
            $new_address = $_POST['new_address'];
            $new_telephone = $_POST['new_telephone'];
            $new_username = $_POST['new_username'];

            $query = "UPDATE $table SET Name = '$new_name', E_mail = '$new_email', Address = '$new_address', Telephone = '$new_telephone',user_Name = '$new_username' WHERE ${table}_ID = $ID";

            if ($conn->query($query) === TRUE) {
                header('Location: user_info.php');
                exit();
            } else {
                echo "Error updating details: " . $conn->error;
            }
        }
    } else {
        header('Location: login.php');
        exit();
    }
?>
