<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'monika';

if(isset($_POST['name']))
{
	$name = $_POST ['name'];
	}
if(isset($_POST['branch']))
{
	$branch = $_POST ['branch'];
	}
	$eno = $_POST ['eno'];
	$email = $_POST ['email'];
	$contactno = $_POST ['contactno'];
	$createpassword = $_POST ['createpassword'];
	$confirmpassword = $_POST ['confirmpassword'];
	
$conn= new mysqli( $dbhost ,$dbuser , $dbpassword , $dbname );

if ($conn->connect_error)
  {
  die( 'Failed to connect to MySQL: ' .$conn->connect_error) ;
  }
 echo 'connect';
   /*if(empty($firstname)){
	  
	  echo ' First name is not blank!!!!';
	  die();
  }*/
  $sql = "INSERT INTO monika (name,branch,eno,contactno,createpassword,confirmpassword,email) VALUES ('$name','$branch','$eno','$contactno','$createpassword','$confirmpassword','$email')";
  
  if($conn->query($sql)== TRUE){
	  echo "<script>window.open('1.html','_self')</script>";
  }else{
	  echo ' error'.$sql.'<br>'.$conn->error;
  }
  $conn->close(); 
?>