<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'photos';

if(isset($_POST['First']))
{
	$First = $_POST ['First'];
}

	
	if(isset($_POST['College']))
{
	$College = $_POST ['College'];
}
	
	if(isset($_POST['User']))
{
	$User = $_POST ['User'];
}
	if(isset($_POST['Email']))
{
	$Email = $_POST ['Email'];
}
	
if(isset($_POST['Password']))
{
	$Password = $_POST ['Password'];
}
	if(isset($_POST['Reenter']))
{
	$Reenter = $_POST ['Reenter'];
}
	if(isset($_POST['Phone']))
{
	$Phone = $_POST ['Phone'];
}

$conn= new mysqli($dbhost ,$dbuser , $dbpassword , $dbname );
  if ($conn->connect_error)
  {
  die( 'Failed to connect to MySQL: ' .$conn->connect_error) ;
  }
$aa = mysqli_query($conn,"SELECT * FROM sign WHERE Username='".$User."'");
$numrows = mysqli_num_rows($aa);

if($numrows==0){
 
  if($Password==$Reenter){
  $sql = "INSERT INTO sign(Name,College_Name,Username,Email,Password,RePassword,Phone) VALUES ('$First','$College','$User','$Email','$Password','$Reenter','$Phone')";
 
  if($conn->query($sql)== TRUE){
	 echo "<script>window.open('index1.php','_self')</script>";
  }else{
	  echo ' error'.$sql.'<br>'.$conn->error;
  }
  }
  else{
	  echo 'your reenter password is not match!!!!!';
  }
}
else{
	
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('enter different username....')
    window.location.href='sign.php';
    </SCRIPT>");
}
  $conn->close();
?>