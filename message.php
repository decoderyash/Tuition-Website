<?php

session_start();
if(!isset($_SESSION['user_email']))
{
	
	header("location:new 1.php");

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			color: white;
		}
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
	</style>
</head>
<body>
<center><h1>Send messages and ask questions!!!</h1></center>
<form action = "message1.php" method = "post">
	To:<input type="text" name = "to" /></br></br>
	Message:<textarea name = "message"></textarea></br></br>
	<input type="submit" name="send" value="Send" style="color:black;"/></br></br></br></br>
	<p><?php echo $_SESSION['user_email']; ?></p>
</form>
<!--<p><?php echo $_SESSION['user_email']; ?></p>-->
</body>
</html>