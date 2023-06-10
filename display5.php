
<?php 
include_once './inc/connection.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title>Land Registration Form</title>
  
  <style>
    body {
      background-image: url("./img/land.jpg");
      background-size: cover;
      max-width:100%;
      height:100%;
    }
    
table{
    margin-left:auto;
    margin-right:auto;
    margin-top: 100px;
    margin-bottom: 100px;
    border-collapse: collapse;
    max-width: 85%;
}

.Land {
    font-size: 15px;
    border-radius: 7px 7px 0 0;
    overflow:auto;
    box-shadow: 0 0 20px  rgba(0, 0, 0, 0.15);
}

.Land thead tr{
    background-color:darkgreen;
    color: white;
    text-align: left;
    font-weight: bold;
}

.Land  th,
.Land  td{
    padding: 12px 15px;
    word-break: break-word;
    min-width: 150px;
}

.Land  tbody tr{
    border-bottom: 1px solid #dddddd;
    color:black;
}

.Land  tbody tr:nth-of-type(odd){
    background-color: #f3f3f3;
}

.Land  tbody tr:nth-of-type(even){
    background-color:white;
}

.Land  tbody tr:last-of-type{
    border-bottom: 2px solid darkgreen;
}


button{
    display: inline-flex;
    margin-left: 15px;
    color: white;
    font-size: 13px;
    font-family: cursive;
    width: auto;
}


.submit_btn a{
    text-decoration: none;
    
}

.submit_btn{
    background-color: #22B2B2;
    padding: 10px;
    border: none;
    border-radius: 10px;
    margin: 5px;
    
}

.submit_btn a{
    color: white;
}

.submit_btn a{
    color: white;
}

.submit_btn{
    background-color: green;
    padding: 10px;
    border: none;
    border-radius: 10px;
    margin: 5px;
}

.dlt_btn a{
    text-decoration: none;
    
}

.dlt_btn{
    background-color: #22B2B2;
    padding: 10px;
    border: none;
    border-radius: 10px;
    margin: 5px;
    
}

.dlt_btn a{
    color: white;
}

.dlt_btn a{
    color: white;
}

.dlt_btn{
    background-color:brown;
    padding: 10px;
    border: none;
    border-radius: 10px;
    margin: 5px;
}





@media screen and (max-width: 2000px) {
    table {
      display: block;
      overflow-x: auto;
      white-space:normal;
    }
}

  </style>
</head>
<body>

<?php
            
                    $sql="Select *from `land_list`";
                    $result=mysqli_query($conn,$sql);
                    if($result){




                        echo' 
                         <div class="titles">Land details</div>
                        <br>
                        <div>
                        <div class="display" id="a_table">
             
                        <table class="Land">
                        <thead>
                        <tr>
                            <th>Land_id</th>
                            <th >Seller name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th >Facilities</th>
                            <th>Location</th>
                            <th>Price per perch</th>
                            <th>P_size</th>
                            <th>Total value</th> 
                            <th>Land details</th> 
                            <th>Operations</th>                        
                        </tr>
                        </thead>
                      
                        <tbody>';
                     

                        while($row=mysqli_fetch_assoc($result)){


                            $land_id=$row['land_id'];
                            $seller_name=$row['seller_name'];
                            $email=$row['email'];
                            $phone_num=$row['phone_num'];
                            $facilities=$row['facilities'];
                            $location=$row['location'];
                            $price_pp=$row['price_pp'];
                            $p_size= $row['p_size'];
                            $t_value=$row['t_value'];
                            $p_details=$row['p_details'];
                            

                            echo'  



              
                          <tr>
                            <td>'.$land_id.'</td>
                            <td>'.$seller_name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$phone_num.'</td>
                            <td>'.$facilities.'</td>
                            <td>'.$location.'</td>
                            <td>'.$price_pp.'</td>
                            <td>'.$p_size.'</td>
                            <td>'.$t_value.'</td>
                            <td>'.$p_details.'</td>


                            <td>
                            <button class="submit_btn"><a href="update5.php?updateID='.$land_id.'">Update</a> </button>
                            <button class="dlt_btn"><a href="delete5.php?deleteID='.$land_id.'">Delete</a> </button>
                            </td>
                          </tr>
                            
                            ';
                        }
                            
                        }
                   
                    
                  
                    
                    
                    ?>

                      
</body>
</html>