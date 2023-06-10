<?php
session_start();
require './inc/connection.php';

if (isset($_SESSION['user_type'])) {
  if(isset($_POST['submit'])) {

    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if($newPassword == $confirmPassword) {
      if($_SESSION['user_type'] == "seller") {
        $ID = $_SESSION['sellerID'];

        $query1 = "SELECT * FROM seller WHERE seller_ID= $ID";
        $result1 = $conn->query($query1);
        $row = $result1->fetch_assoc();
  
        $spassword = $row['password'];
  
        if($currentPassword == $spassword) {
  
          $update = "UPDATE seller SET password = '$confirmPassword' WHERE seller_ID = $ID";
          $resultupdate = $conn->query($update); 
  
          if(isset($resultupdate)) {
            echo "<script>alert('sucess'); window.location = 'user_info.php';</script>";
          } else {
            echo "<script>alert('tru again');</script>";
          }

        } else {
          $error =  "old password not match.";
        }
  
      } else if(($_SESSION['user_type'] == "buyer")) {
        $ID = $_SESSION['buyerID'];

        $query2 = "SELECT * FROM buyer WHERE buyer_ID= $ID";
        $result2 = $conn->query($query2);
        $row = $result2->fetch_assoc();
  
        $bpassword = $row['password'];
  
        if($currentPassword == $bpassword) {
  
          $update = "UPDATE buyer SET password = '$confirmPassword' WHERE buyer_ID = $ID";
          $resultupdate = $conn->query($update); 
  
          if(isset($resultupdate)) {
            echo "<script>alert('sucess'); window.location = 'user_info.php';</script>";
          } else {
            echo "<script>alert('tru again');</script>";
          }
                    
        } else {
          $error =  "old password not match.";
        }

      } else {
        echo "<script>alert('error');</script>";
      }

    } else {
      echo "<script>alert('password desen't match');</script>";
    }

  }

  } else {
     header("Location: login.php");
     exit();
   }
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('./img/pw.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      max-width: 500px;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    form {
      margin-top: 10px;
	  width:500px;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }

    input[type="password"] {
      width: 100%;
      padding: 5px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: green;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: red;
    }

    @media(max-width:700px){
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
}

@media(max-width:350px){
    .footer-col {
        width: 100%;
    }
}
  </style>
</head>
<body>
  <div class="container">
    <form action="./change_passord_form.php" method="POST">
	
      <label for="current_password">Current Password:</label>
      <input type="password" id="current_password" name="current_password" required>

      <label for="new_password">New Password:</label>
      <input type="password" id="new_password" name="new_password" required>

      <label for="confirm_password">Confirm New Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

     <p><?php if(isset($error)) { echo $error; } ?></p>

      <input name="submit" type="submit" value="Change Password"/>
    </form>
  </div>
</body>
</html>