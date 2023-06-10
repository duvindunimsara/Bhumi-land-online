<?php
  require'conection.php';
  $ID=$_GET['updateid'];

if(isset($_POST["submit"]))
{
    $FullName=$_POST['name'];
    $Email=$_POST['Email'];
    $ContactNo=$_POST['ContactNo'];
    $Address=$_POST['Address'];
    $Distric=$_POST['Distric'];
    $City =$_POST['City'];
    $Price=$_POST['Price'];
    $LandDetails=$_POST['LandDetails'];

  $sql= "UPDATE buyerinquiry SET id='$ID',FullName='$FullName',Email='$Email',ContactNo='$ContactNo',Address='$Address',Distric='$Distric', Price= '$Price', LandDetails= '$LandDetails'";
  $result=mysqli_query($con,$sql);
     if($result)
     {
      echo"your Data update Sucssefully 👍";
      
     }
     else
     {
        echo "errror";
      }
    }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Buyer Inquiry Form</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .form-control {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    
    .form-text {
      font-size: 12px;
      color: #888;
    }
    
    .form-check-label {
      font-size: 14px;
    }
    
    .btn-primary {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container my -5">
    <form method="post">

      <div class="form-group">
        <label >FullName</label>
        <input type="text" class="form-control" placeholder="Full name" name="name" autocomplete="off">
        
      </div>
      
      <div class="form-group">
        <label >Email</label>
        <input type="text" class="form-control" placeholder="Email" name="Email"autocomplete="off" >
        
      </div>

      <div class="form-group">
        <label >Contact No</label>
        <input type="text" class="form-control" placeholder="Contact No" name="ContactNo"autocomplete="off" >
        
      </div>

      <div class="form-group">
        <label >Address</label>
        <input type="text" class="form-control" placeholder="Address" name="Address" autocomplete="off">
        
      </div>
      <div class="form-group">
        <label >Distric</label>
        <input type="text" class="form-control" placeholder="colombo,Gampha,Kaluthara" name="Distric"autocomplete="off" >
        
      </div>
      <div class="form-group">
        <label >City</label>
        <input type="text" class="form-control" placeholder="City" name="City"autocomplete="off" >
        
      </div>
      <div class="form-group">
        <label >Price</label>
        <input type="text" class="form-control" placeholder="Price" name="Price"autocomplete="off" >
        
      </div>
      <div class="form-group">
        <label >Land Details</label>
        <input type="text" class="form-control" placeholder="details massage" name="LandDetails"autocomplete="off" >
        
      </div>

      <input  type="submit" class="btn btn-primary" name = "submit" value = "Update" >
    
    </form>
  </div>
</body>
</html>
