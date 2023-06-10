

<?php
                include './inc/connection.php';

                $land_id=$_GET['updateID'];
                $sql="select * from `land_list` where land_id=$land_id";
                $result=mysqli_query($conn,$sql);
            
               
              
                $row=mysqli_fetch_assoc($result);


                    $land_id=$row['land_id'];
                    $seller_name=$row['seller_name'];
                    $email=$row['email'];
                    $phone_num=$row['phone_num'];
                    $fac=$row['facilities'];
                    $location=$row['location'];
                    $price_pp=$row['price_pp'];
                    $p_size= $row['p_size'];
                    $t_value=$row['t_value'];
                    $p_details=$row['p_details'];
                    



                if(isset($_POST['sub'])){
                 

                    $seller_name=$_POST['full-name'];
                    $email=$_POST['email'];
                    $phone_num=$_POST['contact-no'];
                    $facilities=$_POST['fac'];
                    $location=$_POST['location'];
                    $price_pp=$_POST['price-per-perch'];
                    $p_size= $_POST['property-size'];
                    $t_value=$_POST['total-value'];
                    $p_details=$_POST['property-details'];
                    

                    $sql="update `land_list` set seller_name='$seller_name',email='$email',phone_num='$phone_num',facilities='$facilities',location='$location',price_pp='$price_pp',p_size='$p_size',t_value='$t_value',p_details='$p_details' where land_id=$land_id";
                    
                    $result=mysqli_query($conn,$sql);
                    if($result){
                    //echo"update success";
                header('location:display5.php');

                }
                    else
                    {die(mysqli_error($conn));}
                
            
            }
            else{

             //echo"insertion failed";
            }

                ?>



<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
  <title>Land Registration Form</title>
  <link href="land form.css" rel="stylesheet">
  <style>
    body {
      background-image: url("land.jpg");
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
  <form class="blur-form" method="post" style="text-align:left; width : 450px; padding: 5px; margin:auto; border-radius: 5px; box-shadow: 2px 2px 2px gray">
    <h2>Personal Details</h2>
    <input class="input" type="text" id="full-name" name="full-name"  value="<?php echo $seller_name;?>"><br><br>
    <input class="input" type="email" id="email" name="email"  value="<?php echo $email;?>"><br><br>
    <input class="input" type="tel" id="contact-no" name="contact-no"  value="<?php echo $phone_num;?>"><br><br>
    
    <h2>Land Information</h2>
    <h3>Facilities</h3>
    <label for="location">Facilities:</label>
      <input type="text" id="fac" name="fac" value="<?php echo $fac;?>"  ><br><br>
    <div style="text-align: right;">
      <label for="location">Location:</label>
      <input type="text" id="location" name="location"  value="<?php echo $location;?>"><br><br>
      <label for="price-per-perch">Price per Perch:</label>
      <input type="number" id="price-per-perch" name="price-per-perch"  value="<?php echo $price_pp;?>" ><br><br>
      <label for="property-size">Property Size:</label>
      <input type="number" id="property-size" name="property-size"  value="<?php echo $p_size;?>" ><br><br>
      <label for="total-value">Total Value:</label>
      <input type="number" id="total-value" name="total-value"  value="<?php echo $t_value;?>"><br><br>
      <label for="property-details">Property Details:</label><br>
      <textarea style="width:99%;" id="property-details" name="property-details" rows="4" cols="50"> <?php echo $p_details;?></textarea><br><br>
    </div>
    
   
 <button  name="sub" id="submit" >Update</button>
    
	
  </form>
  

  
  
</body>
</html>
