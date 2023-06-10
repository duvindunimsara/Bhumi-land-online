<?php
    require './inc/connection.php';

    if(isset($_GET['deleteID'])){

        $buyer_ID=$_GET['deleteID'];
        $sql="delete from `buyer` where buyer_ID=$buyer_ID";
        $result=mysqli_query($conn,$sql);
    
        if($result)
        {
           // echo"delete success";//
           header('location:register_b_display.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
    ?>
