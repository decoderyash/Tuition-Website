<?php
session_start();
if(!isset($_SESSION['user_email'])){
	
	
	header("location:new 1.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="web1.css">
	<script type="text/javascript">
	</script>
</head>
<body>
	<div class= "header">
	<header><h1>Online Tution</h1></header>
	<br>
	</div>
	<br><br>
	
	<div id="div1" class="media_player">
		<h2>About Us</h2><br>
		<p>This website is made by 3 IT engineering students named Yash Shah,Tirth Prajapati and Deep Khajanchi.We mainly used html,css and Jquery for the front end of the website.For the back end we used php and mysql.For Database in mysql we used Xampp server.
	</div>
	<ul class="nav">
		<li><a href="main.html">Home</a></li>
		<li><a href="pdfs.html">PDFs</a></li>
		<li><a href="#">Tutorial</a>
		<ul class="sub1">
			<li><a href="web1.html">C</a></li>
			<li><a href="webc++1.html">C++</a></li>
			<li><a href="java1.html">java</a></li>
		</ul>
		</li>
		<li><a href="about.html">About</a></li>
	</ul>
	</body>
</html>