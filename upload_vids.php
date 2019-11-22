<?php

session_start();
if(isset($_SESSION['username1'])){
    
     
}
else{
	header("location:faculty_login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="upload.css">
</head>
<body>
<center><h1 style="color: white;">Upload Lectures</h1></center>
<div id="box1">
<center><div id="box">
<form id = "upload" method = "post" action = "upload2.php" enctype="multipart/form-data">
<input type="file" name = "video" /><br><br>
<textarea name="product-description" placeholder="description"></textarea><br><br>
<input type="text" name="subject" placeholder="subject" />
<input type = "submit" value = "Submit" name="upload"/>
</form> 
<br><br><br>
<a href="show.php">my messages</a>
<a href="message2.php">Send messages</a>
<a href="logout2.php">Log Out</a><br><br>
</div></center>
</div>
</body>
</html>