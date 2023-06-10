<?php
    require './inc/connection.php';

    $user_id=$_GET['updateID'];
    $sql="select * from `seller` where seller_ID=$user_id";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);

    $seller_ID=$row['seller_ID'];
    $Name=$row['Name'];
    $E_mail=$row['E_mail'];
    $Address=$row['Address'];
    $NIC=$row['NIC'];
    $user_Name=$row['user_Name'];
    $password= $row['password'];
    $Telephone=$row['Telephone'];

        if(isset($_POST['sub'])){
                 
            $s_id=$_POST['s_id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $contact_no=$_POST['contact_no'];
            $nic=$_POST['nic'];
            $occupation=$_POST['occupation'];
            $user_name= $_POST['user_name'];
            $password=$_POST['password'];
           
            

            $sql="update `seller` set name='$name',email='$email',address='$address',contact_no='$contact_no',nic='$nic',occupation='$occupation',user_name='$user_name',password='$password' where s_id=$s_id";
            
            $result=mysqli_query($conn,$sql);
            if($result){
            //echo"update success";
        header('location:register_s_display.php');

        }
        
        else
        {
            die(mysqli_error($conn));
        }
    

}
    else{
            //echo"insertion failed";
        }
        
?>


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
<body >

    <div class="blur-form" style="text-align:left; width : 450px; padding: 5px; margin:auto; border-radius: 5px; box-shadow: 2px 2px 2px gray">
        <label for="register"><b>Register As</b></label>
            <input type="radio" name="role" onclick="buyerForm()" checked/>Buyer
            <input type="radio" name="role"  onclick="sellerForm()">Seller<br><br>
        
        <div id="seller" class="seller show">
            <form action="seller_register.php" method ="Post">


            <h1>Update Form</h1>
            <label for="register"></label>
           
            <p><center><b> Personal Details</b></center></p><br>

            <label for="name"><b>Name:</b></label>
            <input type="text" name="name" value="<?php echo "$Name";?>"><br><br>
            <label for="email"><b>E-mail:</b></label>
            <input type="email" name="email" value="<?php echo "$E_mail";?>"><br><br>
            <label for="address"><b>Address:</b></label>
            <input type="text" name="address" value="<?php echo "$Address";?>"><br><br>
            <label for="contact_no"><b>Contact No:</b></label>
            <input type="text" name="contact_no" value="<?php echo "$Telephone";?>"><br><br>
            <label for="nic"><b>NIC:</b></label>
            <input type="text" name="nic" value="<?php echo "$NIC";?>"><br><br>
            
            
            
            
            
            <div id="preview"></div><br>
            
            <p><center><b> Login Details</b></center></p><br>
            
            <label for="username"><b>Username:</b></label>
            <input type="text" name="username" value="<?php echo "$user_Name";?>"><br><br>
            
            <label for="password"><b>Password:</b></label>
            <input type="password" name="password" value="<?php echo "$password";?>"><br><br>
            
            <label for="confirm_password"><b>Confirm Password:</b></label>
            <input type="password" name="confirm_password"><br><br>
            
           
            
            <input type="reset" class="submit-button" value="RESET">
            <input type="submit" class="submit-button" value="SEND" name="send">
            </form>
        </div>
    </div>

   
  
</body>
</html>

