<?php
    require './inc/connection.php';

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

<body>
    <?php
         

         $sql="Select *from `buyer`";
         $result=mysqli_query($conn,$sql);
          if($result){




              echo' 
               <div class="titles">Register Details</div>
              <br>
              <div>
              <div class="display" id="r_table">
   
              <table id="Buyer">
              <tr>
                <th scope="col">buyer_id</th>  
                <th scope="col">Name</th>                  
                <th scope="col">E_mail</th>
                <th scope="col">Address</th>
                <th scope="col">NIC</th>
                <th scope="col">user_Name</th>
                <th scope="col">Telephone</th>
                <th scope="col">password</th>
               
                
                
                  
                  
              </tr>
              <tbody>';

              while($row=mysqli_fetch_assoc($result)){

                $buyer_ID=$row['buyer_ID'];
                $Name=$row['Name'];
                $E_mail=$row['E_mail'];
                $Address=$row['Address'];
                $NIC=$row['NIC'];
                $user_Name=$row['user_Name'];
                $password= $row['password'];
                $Telephone=$row['Telephone'];
                
                
                
                
                
                

                echo'  


                
                <tr>
                <td>'.$buyer_ID.'</td>
                <td>'.$Name.'</td>
                <td>'.$E_mail.'</td>
                <td>'.$Address.'</td>
                <td>'.$NIC.'</td>
                <td>'.$user_Name.'</td>
                <td>'.$password.'</td>
                <td>'.$Telephone.'</td>
                
                
                
                


                <td>
                <button class="submit_btn"><a href="b_update.php?updateID='.$buyer_ID.'">Update</a> </button>
                <button class="submit_btn"><a href="b_delete.php?deleteID='.$buyer_ID.'">Delete</a> </button>
                </td>
              </tr>
                
                ';
            }
                
            }
       
    

    ?>

</body>
</html>
    