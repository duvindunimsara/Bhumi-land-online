<?php
  require'conection.php';
  if (isset($_GET['deleteid'])) {
	$id = $_GET['deleteid'];}
     $sql="DELETE FROM buyerinquiry WHERE id=$id";
     $result=mysqli_query($con,$sql);
     if($result)
     {
      echo"your Data delete Sucssefully 😔";
      header('location:dispalyinq.php');
     }
     else
     {
        echo "errror";
      }
  ?>