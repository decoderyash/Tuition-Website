<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'ots';

session_start();
$m_to = $_POST['to'];
$message = $_POST['message'];
$m_from = $_SESSION['user_email'];

//echo $_SESSION['user_email'];
$conn= new mysqli( $dbhost ,$dbuser , $dbpassword , $dbname );

$sql = "INSERT INTO messages (m_to,m_from,message) VALUES ('$m_to','$m_from','$message')";

if($conn->query($sql)== TRUE){
	 echo "<script>window.open('main.php','_self')</script>";
  }
  else{
	  echo ' error'.$sql.'<br>'.$conn->error;
  }
  $conn->close();

?>