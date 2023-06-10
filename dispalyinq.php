<?php
 require'conection.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title>dispaly Inquiry Form</title>


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
    .container {
    text-align: center; /* Aligns the button horizontally in the center */
    margin: 20px; /* Adds some spacing around the container */
}

.container {
  text-align: center;
  margin: 20px;
}

.container .btn-primary {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 4px;
}
.btn-danger {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #ff0000;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
.container .btn-primary a {
  color: white;
  text-decoration: none;
}

.container .btn-primary:hover {
  background-color: #45a049;
}

.table {
  border-collapse: collapse;
  width: 100%;
  border: 3px solid black; /* Sets a 1px solid black border for the table */
}

.table th,
.table td {
  border: 3px solid black; /* Sets a 1px solid black border for table headers and cells */
  padding: 8px;
}

.table th {
  background-color: #f2f2f2; /* Sets a light gray background color for table headers */
  color: black; /* Sets the text color of table headers to black */
}


  </style>
</head>
<body>

<div class="container">
<button class ="btn btn-primary"><a href="inqury.php">Add user</a></div>
</button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">InaqryID</th>
      <th scope="col">FullName</th>
      <th scope="col">Email</th>
      <th scope="col">ContactNo</th>
      <th scope="col">Address</th>
      <th scope="col">Distric</th>
      <th scope="col">City</th>
      <th scope="col">Price</th>
      <th scope="col">LandDetails</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  <?php
  $sql="Select *from buyerinquiry";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    
    while ($row=mysqli_fetch_assoc($result)) {
        $ID=$row['ID'];
        $FullName=$row['FullName'];
        $Email=$row['Email'];
        $ContactNo=$row['ContactNo'];
        $Address=$row['Address'];
        $Distric=$row['Distric'];
        $City =$row['City'];
        $Price=$row['Price'];
        $LandDetails=$row['LandDetails'];

        echo'<tr>
        <th scope="row">'.$ID.'</th>
        <td>.'.$FullName.'</td>
        <td>'.$Email.'</td>
        <td>'.$ContactNo.'</td>
        <td>'.$Address.'</td>
        <td>'. $Distric.'</td>
        <td>'. $City.'</td>
        <td>'. $Price.'</td>
        <td>'.$LandDetails.'</td>
        <td>
        <button class="btn btn-primary"><a href ="inqupdate.php?updateid='.$ID.'">UPDATE</a></button>
        <button class="btn btn-danger"><a href ="inqudelete.php?deleteid='.$ID.'">DELETE</a></button>
    </td>
      </tr>';

    }

   
  }
  ?>
  
  </tbody>
</table>


</div>



</html>