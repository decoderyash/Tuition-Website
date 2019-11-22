<?php
session_start();
if(!isset($_SESSION['user_email'])){
	
	
	header("location:new 1.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript">
	</script>
</head>
<body>
	<header><h1>Online Tutorial</h1></header>
	<br><hr>
	<ul class="nav">
		<li><a href="#">Tutorial</a>
		<ul class="sub1">
			<li><a id="C_tutorial" href="web1.php">C</a></li>
			<li><a href="webc++1.php">C++</a></li>
			<li><a href="java1.php">java</a></li>
		</ul>
		</li>
		<li><a href="pdfs.php">PDFs</a></li>
		
		<li><a href="search2.php">Search by faculty</a></li>
		<li><a href="message.php">Send message</a></li>
		<li><a href="show1.php">My Messages</a></li>
		<li><a href="logout1.php">Log Out</button></a>
		</li>
		
	</ul>
	<center><div class="slider">
		<img src="s1.jpg">
		<img src="s2.jpg">
		<img src="s4.jpg">
	</div></center>
	<script>
	 	/*var cEl=document.getElementById("C_tutorial");
		var myclick = function()
		{
			document.getElementsByClassName("slider").innerHTML="<video height="500px" width="1000px" controls><source src="c1.mp4" type="video/mp4"></video>"
		}
		cEl.addEventListener("click",myclick);*/
	</script>
</body>
</html>