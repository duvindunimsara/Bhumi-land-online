<?php
require './inc/connection.php';

session_start();

if (isset($_SESSION['user_type'])) {
    if ($_SESSION['user_type'] == "seller") {
        $ID = $_SESSION['sellerID'];

        $query1 = "SELECT * FROM seller WHERE seller_ID = $ID";
        $result1 = $conn->query($query1);
        $row = $result1->fetch_assoc();

        $sname = $row['Name'];
        $email = $row['E_mail'];
        $address = $row['Address'];
        $uname = $row['user_Name'];
        $tele = $row['Telephone'];
    } elseif ($_SESSION['user_type'] == "buyer") {
        $ID = $_SESSION['buyerID'];

        $query2 = "SELECT * FROM buyer WHERE buyer_ID = $ID";
        $result2 = $conn->query($query2);
        $row = $result2->fetch_assoc();

        $sname = $row['Name'];
        $email = $row['E_mail'];
        $address = $row['Address'];
        $uname = $row['user_Name'];
        $tele = $row['Telephone'];
    }
} else {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Details</title>

    <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('./img/pw1.png');
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
      width: 500px;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="tel"] {
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
}
    
  </style>

</head>

<body>
    <div class="container">
        <form action="change_details.php" method="POST">

            <label for="new_Name">New Name:</label>
            <input type="text" id="new_Name" name="new_name" value="<?php echo $sname; ?>">

            <label for="new_email">New Email:</label>
            <input type="email" id="new_email" name="new_email" value="<?php echo $email; ?>">

            <label for="new_address">New Address:</label>
            <input type="text" id="new_address" name="new_address" value="<?php echo $address; ?>">

            <label for="phone">New phone number:</label>
            <input type="tel" id="phone" name="new_telephone" value="<?php echo $tele; ?>">

            <label for="new_username">New Username:</label>
            <input type="text" id="new_username" name="new_username" value="<?php echo $uname; ?>">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>

<?php
$conn->close();
?>
