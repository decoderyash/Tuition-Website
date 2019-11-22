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
<form id = "upload" method = "post" action = "upload1.php" enctype="multipart/form-data">
<input type="file" name = "product-image" /><br><br>
<textarea name="product-description" placeholder="description"></textarea><br><br>
<select name="category">
	<option value="Mobile and Accessories">Mobile and Accessories</option>
	<option value="Books">Books</option>
	<option value="Cloths">Cloths</option>
	<option value="Skin care products">Skin care products</option>	
</select><br><br>
<input type="tel" id="Phone"  name="Phone" maxlength="10"  value=""required  pattern="[0-9]{10}" title="Please Enter your Phone no" size="30"><br><br>
<input type="number" name="price"><br><br><br>
<!--<input type="textarea" name = "product-description" />-->
<input type = "submit" value = "Submit" name="upload"/>
</form> 
<br><br><br>
<a href="logout.php">Log Out</a><br><br>
<p>Welcome <?php echo $_SESSION['username']; ?> from <?php echo $_SESSION['college']; ?>.</p>
</body>
</html> 