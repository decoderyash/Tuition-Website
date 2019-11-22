<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'ots';

if(isset($_POST['firstname']))
{
	$firstname = $_POST ['firstname'];
	}
if(isset($_POST['MiddleName']))
{
	$MiddleName = $_POST ['MiddleName'];
	}
	$LastName = $_POST ['LastName'];
	$email = $_POST ['EmailAddress'];
	$password = $_POST ['password'];
	
$conn= new mysqli( $dbhost ,$dbuser , $dbpassword , $dbname );

if ($conn->connect_error)
  {
  die( 'Failed to connect to MySQL: ' .$conn->connect_error) ;
  }
 echo 'connect';
   if(empty($firstname)){
	  
	  echo ' First name is not blank!!!!';
	  die();
  }
  $sql = "INSERT INTO users (firstname,MiddleName,LastName,EmailAddress,password) VALUES ('$firstname','$MiddleName','$LastName','$email','$password')";
  
  if($conn->query($sql)== TRUE){
	  echo "<script>window.open('main.html','_self')</script>";
  }else{
	  echo ' error'.$sql.'<br>'.$conn->error;
  }
  $conn->close(); 
?>