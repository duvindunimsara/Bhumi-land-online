<?php 
    require './inc/connection.php'; // Include the file with database connection details

    session_start(); // Initialize session

    if(isset($_SESSION['user_type'])) {
        if( $_SESSION['user_type'] == "seller") {
            $ID = $_SESSION['sellerID'];

            $query1 = "SELECT * FROM seller WHERE seller_ID= $ID"; // Query to retrieve seller information
            $result1 = $conn->query($query1);
            $row = $result1->fetch_assoc();

            $sname = $row['Name']; // Seller's name
            $email =  $row['E_mail']; // Seller's email
            $address =  $row['Address']; // Seller's address
            $uname =  $row['user_Name']; // Seller's username
            $tele =  $row['Telephone']; // Seller's telephone number

            
        } else if($_SESSION['user_type'] == "buyer") {
            $ID = $_SESSION['buyerID'];

            $query2 = "SELECT * FROM buyer WHERE buyer_ID= $ID"; // Query to retrieve buyer information
            $result2 = $conn->query($query2);
            $row = $result2->fetch_assoc();

            $sname = $row['Name']; // Buyer's name
            $email =  $row['E_mail']; // Buyer's email
            $address =  $row['Address']; // Buyer's address
            $uname =  $row['user_Name']; // Buyer's username
            $tele =  $row['Telephone']; // Buyer's telephone number

            
        }
        ?>
        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info Page</title>
    <link rel="stylesheet" href="./css/user_info.css">

    <title>Logout Pop-up Example</title>
    <script>
window.addEventListener('DOMContentLoaded', (event) => {
        const logoutButton = document.querySelector('.logout-button');

        logoutButton.addEventListener('click', () => {
            const result = confirm('Are you sure you want to logout?'); // Display the pop-up dialog box

            if (result) {
                // User clicked "OK" or "Yes"
                // Perform logout action or redirect to logout page
                window.location = 'logout.php';
            } else {
                // User clicked "Cancel" or "No"
                // Do nothing or perform any desired action
            }
        });
    });
     </script>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const deleteAccountButton = document.querySelector('.delete-account');

        deleteAccountButton.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default form submission

            const result = confirm('Are you sure you want to delete your account?'); // Display the pop-up dialog box

            if (result) {
                // User clicked "OK" or "Yes"
                // Perform delete account action or redirect to delete account page
                window.location.href = 'delete_user.php?id=<?php echo $ID; ?>';
            } else {
                // User clicked "Cancel" or "No"
                // Do nothing or perform any desired action
            }
        });
    });
</script>




    <script>
        function searchGoogle() {
            var query = document.getElementById('searchInput').value;
            var searchUrl = 'https://www.google.com/search?q=' + encodeURIComponent(query);
            window.location.href = searchUrl;
        }
    </script>

    <style>
        .user-info {
            margin-top: 5px;
            margin-bottom: 50px;
            background-color: rgba(255, 255, 255, 0.9); /* Transparent white background */
            padding: 50px;
            border-radius: 50px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .user-photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .user-details {
            margin-bottom: 50px;
        }

        .user-details p {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
        }

        .button-group {
            display: flex;
        }

        .logo img {
            width: 80px;
            height: 80px;
        }
    </style>
	<style>
        body {
            background-image: url('./img/download2.jpg');
            /* Other CSS properties for the background */
        }
    
    .sell-land {
        /* Add your desired styles here */
         background-color:lightgreen;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
</style>

</head>

<body>
 <div class="navbar">
    <!-- Navigation links -->
    <a href="./index.html">Home</a>
    <a href="./about us.html">About Us</a>
    <a href="Lands main page.html">Land</a>
    <a href="./payment.html">Payment Plans</a>
    <a href="./contact us.html">Contact Us</a>
    <a href="./user_info.php">User Info</a>
	<a href="./login.php">Login</a>
    <input type="text" id="searchInput" onclick="searchGoogle()" placeholder="Search on Google" />
    <button class="logout-button">Logout</button>
</div>
    
    
    

    <div class="logo">
        <img src="./img/logo.png" alt="Logo">
    </div>

    <div class="user-info">
        <div class="blur-overlay"></div>

        <img src="./img/user.png" alt="User Photo" class="user-photo">
        <div class="user-details">
            <p><strong>Name:</strong><?php echo $sname; ?></p>
            <p><strong>Email:</strong><?php echo $email; ?></p>
            <p><strong>Address:</strong><?php echo $address; ?></p>
            <p><strong>Telephone Number:</strong><?php echo $tele; ?></p>
            <p><strong>User name:</strong><?php echo $uname; ?></p>
        </div>

        <div class="button-group">
            <button  class="change-details"><a href="change_details_form.php?id=<?php echo $ID; ?>">Update details</a></button>
            <button  class="change-password"><a href="change_passord_form.php?id=<?php echo $ID; ?>">Change password</a></button>
            <button  class="delete-account"><a href="delete_user.php?id=<?php echo $ID; ?>">Delete Account</a></button>
        </div>


    </div>

    <div>
    <button class="sell-land"><a href="land_form.php">Sell a Land</a></button>
    <button class="sell-land"><a href="inqury.html">Inqury</a></button>
    </div>

    <footer>
        <!-- Footer content -->
        <div class="footer-container">
            <div class="footer-left">
                <a href="mailto:info@bhumi.gmail.com" style="color: white;">Email: info@bhumi.gmail.com</a>
                <p>Fax: +94115579862</p>
                <p>Contact Number: +94115579861</p>
            </div>
            <div class="footer-right">
                <a href="#">FAQ</a>
                <p>Technical Support: +9415579855</p>
            </div>
        </div>
        <hr>
        <div class="copyright">
            <p><center>&copy; 2023- Bhumi lands- All Rights Reserved
                Concept, Design & Development by Web Bhumi</center></p>
        </div>
    </footer>

</body>

</html>


        <?php
    } else {
        header('Location: login.php');
    }
?>

<?php
    $conn->close();
?>
