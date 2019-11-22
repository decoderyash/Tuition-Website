<?php

session_start();
if(isset($_SESSION['user_email'])){
    
     
}
else{
	header("location:mew 1.php");
}

$conn= new mysqli( 'localhost' ,'root' , '' , 'ots' );
$x = $_SESSION['user_email'];
$sql1 = "SELECT * FROM messages WHERE m_to = '$x'";
$result = $conn->query($sql1);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		body{
			background-color: #111;
		}
		.message{
			background-color: #444;
			color: white;
			padding: 15px;
		}
		.from{
			background-color: #444;
			color: white;
			padding: 15px;
		}
	</style>
</head>
<body>
<?php while($row = mysqli_fetch_array($result)){
	echo "</br></br></br>";
	echo "<div class='message'>";
		echo "<b>Message: </b>".$row['message']."</br></div>";
		echo "</br>";
		//echo "<b>Description</b>:<p>".$row['description']."</p>";
		echo "<div class='from'<b>From: </b>".$row['m_from']."</div>";
	} ?>
</body>
</html>