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
<center><div class=>					
<form  action="sign1.php" method="post">
  <fieldset>
    <legend>SIGN UP:</legend>
	<center><div class="row">
    <lable for=" name"> name:</lable>
	<input type="text"  maxlength="32" value="" name="First"  aria-describedby="name-format" required aria-required=”true” pattern="[A-Za-z]{1,32}" title="Please Enter your First Name" size="30"><br /><br /> <br /></div></center>
	<center><div class="row">
 <lable for=" name">College  name:</lable>
	<select name="College">
   <option value="vgec">VGEC</option>
   <option value="LD">LD</option>
   <option value="LJ">LJ</option>
   <option value="LDRP">LDRP</option>
</select><br /><br /><br /></div></center>
	<div class="row">
	<lable for="username">Username:</lable>
	<input type="text" id ="User" maxlength="32" value="" name="User"aria-describedby="name-format" required aria-required=”true” pattern="[A-Za-z]{1,32}" title="Please Enter your Last Name" size="30"><br /><br /><br /></div>
<div class="row">
    <lable for="email">Email:</lable>
	<input type="email" id ="Email"   value="" name="Email"required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please Enter your Email Address" size="30"><br /><br /><br /></div>
	<div class="row">
    <lable for="Password">Password:</lable>
	<input type="password" id ="Password" name="Password"  value="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Please Enter your Password" size="30"><br /><br /><br /></div>
	<div class="row">
    <lable for=" reenter-Password">Reenter-Password:</lable> 
	<input type="password" id="Reenter " name="Reenter"  value="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="input must contain at least one digit/lowercase/uppercase letter and be at least six characters long" size="30"><br /><br /><br /></div>
	<div class="row">
    <lable for=" Phone no:">Phone no:</lable> 
	<input type="tel" id="Phone"  name="Phone" maxlength="10"  value=""required  pattern="[0-9]{10}" title="Please Enter your Phone no"size="30"><br /><br /><br /></div>
	
	<center><div class="reg"><button type="submit" value="submit">submit </button></div></center>


  </fieldset>
</form>
</div>
</div>
</div></center>
</body>
</html>