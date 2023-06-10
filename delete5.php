<?php session_start(); ?>

<?php
include_once './inc/connection.php';
if(isset($_GET['deleteID'])){

    $land_id=$_GET['deleteID'];
    $sql="delete from `land_list` where land_id=$land_id";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
       // echo"delete success";//
       header('location:land_form.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>