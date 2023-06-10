<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
  <link href="./css/user_form.css" rel="stylesheet">
  <style>
    .preview-image {
      max-width: 200px; 
      max-height: 200px; 
    }
  </style>
  <style>
    body {
      background-image: url("./img/land.jpg");
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
  <script src="./js/userForm.js"></script>

</head>
<body onload="buyerForm()">

    <div class="blur-form" style="text-align:left; width : 450px; padding: 5px; margin:auto; border-radius: 5px; box-shadow: 2px 2px 2px gray">
        <label for="register"><b>Register As</b></label>
            <input type="radio" name="role" onclick="buyerForm()" checked/>Buyer
            <input type="radio" name="role"  onclick="sellerForm()">Seller<br><br>
        <div id="buyer" class="buyer">
        <form action="buyer_register.php" method ="Post">


            <h1>Buyer Registration Form</h1>

            
            <p><center><b> Personal Details</b></center></p><br>

            <label for="name"><b>Name:</b></label>
            <input type="text" name="name"><br><br>
            <label for="email"><b>E-mail:</b></label>
            <input type="email" name="email"><br><br>
            <label for="address"><b>Address:</b></label>
            <input type="text" name="address"><br><br>
            <label for="contact_no"><b>Contact No:</b></label>
            <input type="text" name="contact_no"><br><br>
            <label for="nic"><b>NIC:</b></label>
            <input type="text" name="nic"><br><br>
            <label for="job"><b>Occupation:</b></label>
            <input type="text" name="occupation"><br><br>
            
            
           
            
            
            <p><center><b> Login Details</b></center></p><br>
            
            <label for="username"><b>Username:</b></label>
            <input type="text" name="username"><br><br>
            
            <label for="password"><b>Password:</b></label>
            <input type="password" name="password" required><br><br>
            
            <label for="confirm_password"><b>Confirm Password:</b></label>
            <input type="password" name="confirm_password" required><br><br>
            
            
            <input type="reset" class="submit-button" value="RESET">
            <input type="submit" class="submit-button" value="SEND" name="send">
            </form>
        </div>
        <div id="seller" class="seller show">
            <form action="seller_register.php" method ="Post">


            <h1>Seller Registration Form</h1>
            <label for="register"></label>
           
            <p><center><b> Personal Details</b></center></p><br>

            <label for="name"><b>Name:</b></label>
            <input type="text" name="name"><br><br>
            <label for="email"><b>E-mail:</b></label>
            <input type="email" name="email"><br><br>
            <label for="address"><b>Address:</b></label>
            <input type="text" name="address"><br><br>
            <label for="contact_no"><b>Contact No:</b></label>
            <input type="text" name="contact_no"><br><br>
            <label for="nic"><b>NIC:</b></label>
            <input type="text" name="nic"><br><br>
            <label for="job"><b>Occupation:</b></label>
            <input type="text" name="occupation"><br><br>
            
            
            
            
            <div id="preview"></div><br>
            
            <p><center><b> Login Details</b></center></p><br>
            
            <label for="username"><b>Username:</b></label>
            <input type="text" name="username"><br><br>
            
            <label for="password"><b>Password:</b></label>
            <input type="password" name="password"><br><br>
            
            <label for="confirm_password"><b>Confirm Password:</b></label>
            <input type="password" name="confirm_password"><br><br>
            
           
            
            <input type="reset" class="submit-button" value="RESET">
            <input type="submit" class="submit-button" value="SEND" name="send">
            </form>
        </div>
    </div>

    <script>
    const photoInput = document.getElementById('photo');
    const previewDiv = document.getElementById('preview');

    photoInput.addEventListener('change', function() {
      const file = this.files[0];
      const reader = new FileReader();

      reader.onload = function(event) {
        const img = document.createElement('img');
        img.src = event.target.result;
        img.classList.add('preview-image'); // Add the CSS class
        previewDiv.innerHTML = '';
        previewDiv.appendChild(img);
      };

      reader.readAsDataURL(file);
    });
    
    const resetButton = document.querySelector('input[type="reset"]');
    resetButton.addEventListener('click', function() {
      previewDiv.innerHTML = '';
      photoInput.value = null;
    });
  </script>
  
</body>
</html>
