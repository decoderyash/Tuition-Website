<?php
session_start();
$conn= new mysqli( 'localhost' ,'root' , '' , 'ots' );
$x = $_POST['subject'];
$z = $_POST['search'];
$sql1 = "SELECT * FROM videos WHERE subject = '$x' AND faculty_name='$z'";
	$result = $conn->query($sql1);
	/*$y = mysql_num_rows($result);
	echo $y;*/
	while($row = mysqli_fetch_array($result)){
		echo "<div id='img1'>";
		echo "<video id='videos' height='500px' width='1000px' controls>
		<source src=".$row['video']." type='video/mp4'>
		</video><br>";
		//echo "<b>Description</b>:<p>".$row['description']."</p>";
		echo "<b>Subject:</b><p>".$row['subject']."</p>";
		echo "<b>Faculty:</b><p>".$row['faculty_name']."</p>";
		//echo "<b>Owner's Contact Number</b>:<p>".$row['phone']."</p>";
		echo "</div>";
	}
?>