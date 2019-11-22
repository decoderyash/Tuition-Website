<?php
session_start();
$conn= new mysqli( 'localhost' ,'root' , '' , 'photos' );
$x = $_POST['cat'];
$y = $_SESSION['college'];
$z = $_POST['search'];
$sql1 = "SELECT * FROM images WHERE category='$x' AND college='$y' AND description LIKE '%".$z."%'";
	$result = $conn->query($sql1);
	while($row = mysqli_fetch_array($result)){
		echo "<div id='img1'>";
		echo "<img src='images/".$row['image']."'><br>";
		echo "<b>Description</b>:<p>".$row['description']."</p>";
		echo "<b>Category:</b><p>".$row['category']."</p>";
		echo "<b>Owner's Contact Number</b>:<p>".$row['phone']."</p>";
		echo "</div>";
	}
?>