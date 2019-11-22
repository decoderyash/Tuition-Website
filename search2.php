<?php
session_start();
if(!isset($_SESSION['user_email'])){
	
	
	header("location:new 1.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: #111;
		}
		form{
			position: absolute;
			top: 200px;
			left: 525px;
			background-color: #444;
			color: white;
			padding: 50px;
		}
		a{
			color: white;
		}
		h1{
			color: white;
		}
	</style>
</head>
<body>
<center><h1>Search videos by faculties</h1></center>
<form action = "search3.php" method="POST">
	<input type="text" name="search" placeholder="faculty name"><br><br>
	<input type="text" name="subject" placeholder="subject"><br><br>
	<input type="submit" value="Search">
	<p><?php echo $_SESSION['user_email']; ?>.</p>
	<a href="logout2.php">Log Out</a>
</form></br></br>
</body>
</html>