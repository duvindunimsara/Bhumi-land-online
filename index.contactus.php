<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/contact_us.css"> 

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

</head>
<body>
<!-- Navigation bar -->
  <div class="navbar">
   
    <a href="./index.html">Home</a>
    <a href="./about us.html">About Us</a>
    <a href="./Lands main page.html">Land</a>
    <a href="./payment.html">Payment Plans</a>
    <a href="./contact us.html">Contact Us</a>
    <a href="./user_info.php">User Info</a>
    <input type="text" id="searchInput" onclick="searchGoogle()" placeholder="Search on Google" />
    <button class="logout-button">Logout</button>
</div>

<!-- Form Section -->
    <div class="Form">
        <div class="left-side">
             <form action="contact_us.php" method="POST">
				<br>
				<h2>Contact us</h2>
				<br>
				<h4>Frist Name</h4>
			  <input class="inputField" type="text" id="name" name="name" placeholder="Frist Name:"><br>
				<h4>Last name</h4>
				<input class="inputField" type="text" id="lastname" name="lastname" placeholder="LastName:"><br>
                <h4>Email</h4>
                <input class="inputField" type="text" id="e_mail" name="e_mail" placeholder="Email: "><br>
				<h4>Phone No</h4>
                <input class="inputField" type="text" id="phone_number" name="phone_number" placeholder="phone_number"><br>
				
			  <h4>Subject</h4>
				<input class="inputField" type="text" id="subjects" name="subjects" placeholder="subject "><br>
				<h4>Send your Massage</h4>
              <textarea rows = "10" cols = "60" id="messages" name = "messages" placeholder="Your Message: "></textarea><br>
				
                <input class="submit" type="submit" name="submit" value="Submit" > 
            </form>
        </div>

        <div class="right-side">
            <iframe width="770" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=sri lanka&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>          
        </div>
    </div>


<!-- Footer Section -->
<div class="Footer">
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <p>Email: info@bhumi.gmail.com</p><br>
                <p>Fax: +94115579862</p><br>
                <p>Contact Number: +94115579861</p>
            </div>
            <div class="footer-center"><hr style="height:100px; border-top: 1px solid white;" ></div>
            <div class="footer-right">
                <a href="#">FAQ</a><br>
                <p>Tecnical Support: +9415579855</p><br>
            </div>
        </div>
        <hr style="border: none; border-top: 1px solid white; margin: 10px 0; width: 1200px;">
        <div class="copyright">
            <p>Copyright © 2023- Bhumi lands- All Rights Reserved
            Concept, Design & Development by Web Bhumi</p>
        </div>
    </footer>
</div>

</body>
</html>
