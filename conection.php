<?php
  $con=new mysqli('localhost','root','','bhumi_land');


  if($con){
   //echo"connection successfull";
 }
 else{
 die(mysqli_error($con));}
 
 
 ?>
