<?php
session_start();
if(isset($_SESSION['username'])){
	
	
	header("location:search.php");
}

?>
<!DOCKTYPE html>
<html>
<head>

<title>SignUp Page</title>
</head>
<body>
<center><div class="loginform ">
<form class="login" action="login1.php" method="post">
  <fieldset>
    <legend>Login form:</legend>
	<div class="row">
    <lable >UserID:</lable>
	<input type="text" id ="UserID" maxlength="32" value="" name="username"  aria-describedby="name-format" required aria-required=�true� pattern="[A-Za-z]{1,32}" size="30"><br /><br /></div>
	<div class="row">
    <lable for="Password">Password:</lable> 
	<input type="password" id="Password " maxlength="32" value="" name="password"  aria-describedby="name-format" required aria-required=�true� pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" size="30"><br /><br /></div>

	<!--<lable for="college">College:</lable> 
	<select name="College">
   <option value="vgec">VGEC</option>
   <option value="LD">LD</option>
   <option value="LJ">LJ</option>
   <option value="LDRP">LDRP</option>
   </select></fieldset></br></br>
</br>-->
	<center><div class="reg"><button type="submit">Login </button></div></center>
</form>
	Not Registered?<a href="SignUppage.php">Create an account
	</a></fieldset></div></center>
	
</body>
</html>
