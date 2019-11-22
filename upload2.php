<?php
session_start();
if(isset($_POST['upload'])){
	$target = basename($_FILES['video']['name']);
	$conn= new mysqli( 'localhost' ,'root' , '' , 'ots' );
	//$db = mysql_connect("localhost","root","","photos");
	$video = $_FILES['video']['name'];
	/*$text = $_POST['product-description'];
	$category = $_POST['category'];
	$phone = $_POST['Phone'];
	$price = $_POST['price'];
	$user = $_SESSION['username'];
	$college = $_SESSION['college'];
	*/
	$subject = $_POST['subject'];
	$faculty_name = $_SESSION['username1'];

	
	$sql = "INSERT INTO videos (video,faculty_name,subject) VALUES ('$video','$faculty_name','$subject')";
	$conn->query($sql);
	/*$what = move_uploaded_file($_FILES['video']['tmp_name'], $target);
	echo "$what";
	*/
	//move_uploaded_file($_FILES['video']['tmp_name'], $target);
	if(move_uploaded_file($_FILES['video']['tmp_name'], $target))
	{
	echo "the video is uploaded on server";
	echo "<script>window.open('upload_vids.php','_self')</script>";
	}
}

?>