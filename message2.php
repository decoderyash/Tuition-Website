<?php

session_start();
if(!isset($_SESSION['username1']))
{
	
	header("location:faculty_login.php");

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
<form action = "message3.php" method = "post">
	To:<input type="text" name = "to" /></br></br>
	Message:<textarea name = "message"></textarea></br></br>
	<input type="submit" name="send" value="Send" /></br></br></br></br>
	<p><?php echo $_SESSION['username1']; ?></p>
</form>
</body>
</html>