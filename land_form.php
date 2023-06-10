<?php session_start(); ?>

<?php
                include './inc/connection.php';

             
              

                if(isset($_POST['sub'])){
                 echo"insertion success";
                    $seller_name=$_POST['full-name'];
                    $email=$_POST['email'];
                    $phone_num=$_POST['contact-no'];
                    $facilities=$_POST['fac'];
                    $location=$_POST['location'];
                    $price_pp=$_POST['price-per-perch'];
                    $p_size= $_POST['property-size'];
                    $t_value=$_POST['total-value'];
                    $p_details=$_POST['property-details'];
                    

                 
                    $sql="insert into `land_list`(seller_name,email,phone_num,facilities,location,price_pp,p_size,t_value,p_details)
                    values ('$seller_name','$email','$phone_num','$facilities','$location','$price_pp','$p_size','$t_value','$p_details')";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                    echo"insertion success";
                    header('location:display5.php');

                }
                    else
                    {die(mysqli_error($conn));}
                
                
                    
            
            
            
            }
            else{

             echo"insertion failed";
            }

                ?>



<!DOCTYPE html>
<html>
<head>
  <title>Land Registration Form</title>
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
</head>
<body>
  <form method="post" class="blur-form" style="text-align:left; width : 450px; padding: 5px; margin:auto; border-radius: 5px; box-shadow: 2px 2px 2px gray">
    <h2>Personal Details</h2>
    <input class="input" type="text" id="full-name" name="full-name" placeholder="Enter your full name"><br><br>
    <input class="input" type="email" id="email" name="email" placeholder="Enter your email address"><br><br>
    <input class="input" type="tel" id="contact-no" name="contact-no" placeholder="Enter your phone number"><br><br>
    
    <h2>Land Information</h2>
    <h3>Facilities</h3>
  <label for="location">Facilities:</label>
      <input type="text" id="fac" name="fac"><br><br>
    <div style="text-align: right;">
    
      <label for="location">Location:</label>
      <input type="text" id="location" name="location"><br><br>
      <label for="price-per-perch">Price per Perch:</label>
      <input type="number" id="price-per-perch" name="price-per-perch"><br><br>
      <label for="property-size">Property Size:</label>
      <input type="number" id="property-size" name="property-size"><br><br>
      <label for="total-value">Total Value:</label>
      <input type="number" id="total-value" name="total-value"><br><br>
      <label for="property-details">Property Details:</label><br>
      <textarea style="width:99%;" id="property-details" name="property-details" rows="4" cols="50"></textarea><br><br>
    </div>
    
   
 <button  name="sub" id="submit" >submit</button>
    
	
  </form>
  

  
  
</body>
</html>
