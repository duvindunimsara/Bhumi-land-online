<?php
    require './inc/connection.php';

    session_start();

    if(isset($_POST['submit'])) {
        $userName = $_POST['user'];
        $password = $_POST['Pass'];

        $query1 = "SELECT *FROM seller WHERE user_Name = '$userName' AND password = '$password'";
        $result1 = $conn->query($query1);
        $count1 = $result1->num_rows;

        $query2 = "SELECT *FROM buyer WHERE user_Name = '$userName' AND password = '$password'";
        $result2 = $conn->query($query2);
        $count2 = $result2->num_rows;

        if($count1 == 1) {

            $row = $result1->fetch_assoc(); 
            $sID = $row['seller_ID'];
            $_SESSION['user_type'] = "seller";
            $_SESSION['sellerID'] = $sID;

            header("Location: user_info.php");
            exit();
      
        }
        else if ($count2 == 1){

            $row = $result2->fetch_assoc(); 
            $bID = $row['buyer_ID'];

            $_SESSION['user_type'] = "buyer";
            $_SESSION['buyerID'] = $bID;

            header("Location: user_info.php");
            exit();

        } else {

            $error = "Invalid Password";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>login</title>
  <link href="./css/login.css" rel="stylesheet" type="text/css" />
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
    }

    .wrapper {
      flex: 1;
    }

  
  </style>
</head>

<body>
  <header>
 <div class="navbar">
  
    <a href="./about us.html">About Us</a>
    <a href="./contact us.html">Contact Us</a>

  </div>
  </header>

  <div class="wrapper">
    <div class="form-box login">
       <form id="login" method="post" action="login.php">
      <h1>
        <center>Login</center>
      </h1>
      <label><b> UserName:</b></label>
      <input type="text" name="user" id="user" placeholder="Username"> <br> <br><br>
      <label><b> Password:</b></label>
      <input type="Password" name="Pass" id="Pass" placeholder="Password"> <br><br>
      <a href="password.html">Forgot Password?</a>
      <br><br>
      <button type="submit"name="submit" class="btn">Login</button>
      <p><?php if(isset($error)) { echo $error; } ?></p>
      <br> <br>
      <div class="login-Register">Don't have an account <a
          href="user_register_form.php"
          class="Register-link">Register</a>
      </div>
  </div>

  </form>
    </div>
 <footer>
        <div class="footer-container">
            <div class="footer-left">
                <p>Email: info@bhumi.gmail.com</p>
                <p>Fax: +94115579862</p>
                <p>Contact Number: +94115579861</p>
            </div>
            <div class="footer-right">
                <a href="#">FAQ</a>
                <p>Tecnical Support: +9415579855</p>
            </div>
        </div>
        <hr>
        <div class="copyright">
            <p><center>Copyright © 2023- Bhumi lands- All Rights Reserved
            Concept, Design & Development by Web Bhumi</center></p>
        </div>
    </footer> 

  

</html>
<?php
    $conn->close();
?>