<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'ots';

if(isset($_POST['username']))
{
	$username = $_POST ['username'];
	}

	$password = $_POST ['password'];
	
$conn= new mysqli( $dbhost ,$dbuser , $dbpassword , $dbname );

if ($conn->connect_error)
  {
  die( 'Failed to connect to MySQL: ' .$conn->connect_error) ;
  }
 echo 'connect';
   if(empty($username)){
	  
	  echo ' Username is blank!!!!';
	  die();
  }
  $sql = "INSERT INTO faculty (username,password) VALUES ('$username','$password')";
  
  if($conn->query($sql)== TRUE){
	  echo "<script>window.open('faculty_login.php','_self')</script>";
  }
  else{
	  echo ' error'.$sql.'<br>'.$conn->error;
  }
  $conn->close(); 
?>