
<?php
            
                    $sql="Select *from `land_list`";
                   $result=mysqli_query($con,$sql);
                    if($result){




                        echo' 
                         <div class="titles">Appointement details</div>
                        <br>
                        <div>
                        <div class="display" id="a_table">
             
                        <table id="customers">
                        <tr>
                            <th scope="col">Land_id</th>
                            
                            <th scope="col">Seller name</th>
                            <th scope="col">Email</th>
                            <th scope="col">contact</th>
                            <th scope="col">facilities</th>
                            <th scope="col">location</th>
                            <th scope="col">price per perch</th>
                            <th scope="col">p_size</th>
                            <th scope="col">total value</th> 
                            <th scope="col">land details</th>
                            
                        </tr>
                        <tbody>';
                     

                        while($row=mysqli_fetch_assoc($result)){


                             $fullName=$row['FullName'];
                            
                            $contactNo=$row['contactNo'];
                            
                            $address=$row['address'];
                            $district=$row['district'];
                            $city=$row['city'];
                            $price= $row['price'];
                            $propertyDetails=$row['propertyDetails'];
                            $id['id'];
                            

                            echo'  



              
                          <tr>
                            <td>'. $fullName.'</td>
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
                            <button class="submit_btn"><a href="update.php?updateID='.$land_id.'">Update</a> </button>
                            <button class="submit_btn"><a href="delete.php?deleteID='.$land_id.'">Delete</a> </button>
                            </td>
                          </tr>
                            
                            ';
                        }
                            
                        }
                   
                    
                  
                    
                    
                    ?>