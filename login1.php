<?php



 
$con= new mysqli( "localhost" , "root" , "" , "photos" );


if (mysqli_connect_errno())

{

echo " MySQLi Connection was not established: " . mysqli_connect_error();

}




$username = $_POST['username'];

$password = $_POST['password'];

//$college = $_POST['College'];

$query = "SELECT * FROM sign WHERE Username='$username' AND Password='$password'";

//$run_user = mysqli_query($con, $query);

$result = $con->query($query);

$check_user = mysqli_num_rows($result);

if($check_user == 1){
	session_start();
	while($row1 = mysqli_fetch_array($result)){
	$_SESSION['username']=$username;
	$_SESSION['coll_name']=$row1['College_Name'];
}
echo "<script language='JavaScript'>window.location.href='home.php';</script>";

}

else {

echo "<script language='JavaScript'>window.location.href='index1.php';</script>";


}


?>