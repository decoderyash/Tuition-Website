<?php
session_start();
if(!isset($_SESSION['username'])){
	
	
	header("location:index1.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action = "search1.php" method="POST">
	<input type="text" name="search"><br>
	<input type="text" name="cat"><br>
	<input type="submit" value="Search">
</form>
If you want to sell an item :<a href="upload.php">Click here</a>
<br><br><br><br><br><br>
<p>Welcome <?php echo $_SESSION['username']; ?> from <?php echo $_SESSION['college']; ?>.</p>
<a href="logout.php">Log Out</a>
</body>
</html>