<?php

 
$con= new mysqli( "localhost" , "root" , "" , "ots" );


if (mysqli_connect_errno())

{

echo " MySQLi Connection was not established: " . mysqli_connect_error();

}


$username = $_POST['username'];

$password = $_POST['password'];

/*echo $username;
echo $password;
*/
$query = "SELECT * FROM faculty WHERE username='$username' AND password='$password'";

$run_user = mysqli_query($con, $query);

$check_user = mysqli_num_rows($run_user);

if($check_user==1){
echo $check_user;
session_start();
$_SESSION['username1']=$username;
$_SESSION['password1']=$password;

echo "<script>window.open('upload_vids.php','_self')</script>";

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}
?>