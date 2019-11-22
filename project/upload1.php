<?php
session_start();
if(isset($_POST['upload'])){
	$target = "images/".basename($_FILES['product-image']['name']);
	$conn= new mysqli( 'localhost' ,'root' , '' , 'photos' );
	//$db = mysql_connect("localhost","root","","photos");
	$image = $_FILES['product-image']['name'];
	$text = $_POST['product-description'];
	$category = $_POST['category'];
	$phone = $_POST['Phone'];
	$price = $_POST['price'];
	$user = $_SESSION['username'];
	$college = $_SESSION['college'];
	
	$sql = "INSERT INTO images (image,description,category,phone,price,user,college) VALUES ('$image','$text','$category','$phone','$price','$user','$college')";
	$conn->query($sql);

	if(move_uploaded_file($_FILES['product-image']['tmp_name'], $target)){
		echo "the image is uploaded on server";
	}
	else{
		echo "the image is not uploaded on server";	
	}

	
}
	

?>