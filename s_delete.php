<?php
    require './inc/connection.php';

    if(isset($_GET['deleteID'])){

        $seller_ID=$_GET['deleteID'];
        $sql="delete from `seller` where seller_ID=$seller_ID";
        $result=mysqli_query($conn,$sql);
    
        if($result)
        {
           // echo"delete success";//
           header('location:register_s_display.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
    ?>
