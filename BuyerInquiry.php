<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'bhumi_land');

	

    $fullName = 'FullName';
    $email = 'email';
    $contactNo = 'contactNo';
    $address = 'Address';
    $district= 'district';
    $city = 'city';
    $price = 'price';
    $propertyDetails= 'PropertyFD';
	$id = 0;
	$update = false;

//POST

	if (isset($_POST['save'])) {
        $fullName = $_POST['FullName'];
        $email = $_POST['email'];
        $contactNo = $_POST['contactNo'];
        $address = $_POST['Address'];
        $district= $_POST['district'];
        $city = $_POST['city'];
        $price = $_POST['price'];
        $propertyDetails= $_POST['PropertyFD'];

		mysqli_query($db, "INSERT INTO buyerinquiry (fullName, email ,contactNo,address,district,city,price,propertyDetails) VALUES ('$fullName', '$email','$contactNo','$address','$district','$city','$price','$propertyDetails')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: inqury.php');
	}



 

   

//UPDATE


if (isset($_POST['update'])) {
	// $id = $_POST['id'];
    $fullName = $_POST['FullName'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $address = $_POST['Address'];
    $district= $_POST['district'];
    $city = $_POST['city'];
    $price = $_POST['price'];
    $propertyDetails= $_POST['PropertyFD'];

	mysqli_query($db, "UPDATE buyerinquiry SET fullName='$fullName', email='$email', contactNo='$contactNo', address='$address', district='$district', city='$city', price='$price', propertyDetails='$propertyDetails' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: inqury.php');
}


//Delete

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM buyerinquiry WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: inqury.php');
}


?>