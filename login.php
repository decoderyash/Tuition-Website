<?php

 
$con= new mysqli( "localhost" , "root" , "" , "ots" );


if (mysqli_connect_errno())

{

echo " MySQLi Connection was not established: " . mysqli_connect_error();

}


$username = $_POST['username'];

$password = $_POST['password'];

$query = "SELECT * FROM users WHERE EmailAddress='$username' AND password='$password'";

$run_user = mysqli_query($con, $query);

$check_user = mysqli_num_rows($run_user);

if($check_user==1){
session_start();
$_SESSION['user_email']=$username;

echo "<script>window.open('main.php','_self')</script>";

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}

?>