<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-color:#766E6E;
}
h1{
	background-color:#2D5345;
	padding: 10px;
	margin: 10px;
	border-radius: 5px;
}
span{
	color: blue;
}
div{
	background-color:#2D5345;
	padding: 10px;
	margin: 10px;
	border-radius: 5px;
}
div.form{
	text-align:center;
	background-color:#2D5345;
	width: 625px;
	//height: 500px;
	float: left;
	//background-color: rgb(234,210,34);
	//border-radius: 4px;
}
#form{
	display="table";
	margin: 10px;
	
}
.div1{
	display: table-row;
}
.div1 label{
	display: table-cell;
}
.div1 input{
	display: table-cell;
}
#login{
	text-align: center;
	background-color: #2D5345;
	width: 625px;
	//height: 500px;
	display: inline;
	float: right;
}
.btn-round{
	background-color: gray;
	color: white;
	border-radius: 50%;
	padding: 20px;
	font-size: 20px;
}
.facebook {
background-color: #0079ce;
border: none;
border-radius: 3px 3px 3px 3px;
//-moz-border-radius: 0px 3px 3px 0px;
//-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}
.twitter {
background-color: #189bcb;
border: none;
border-radius: 3px 3px 3px 3px;
//-moz-border-radius: 0px 3px 3px 0px;
//-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}
.google {
background-color: red;
border: none;
border-radius: 3px 3px 3px 3px;
//-moz-border-radius: 0px 3px 3px 0px;
//-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}
.signup {
background-color: #0079ce;
border: none;
border-radius: 3px 3px 3px 3px;
//-moz-border-radius: 0px 3px 3px 0px;
//-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}
</style>
</head>
<body>
<h1>Welcome on the online tutorials</h1>
<div>
<p>We provide online tutorials for different subjects from different domains.To enjoy full subscription please<span> Sign up </span>as a user and if you are already a user then please login.</p>
</div>
<div class="form">
<h1>Sign Up</h1>
<div>
<form id="form" action="new_1.php" method="POST">
<fieldset>
<div class="div1">
	<label for="First Name">
            First Name<span class="req">*</span>
    </label>
            <input type="text" name="firstname" placeholder="First Name"/><br><br>
</div>
<div class="div1">
	<label for="Middle Name">
            Middle Name<span class="req">*</span>
    </label>
            <input type="text" name="Middle Name" placeholder="Middle Name"/><br><br>
</div>
<div class="div1">
    <label for="Last Name">
            Last Name<span class="req">*</span>
    </label>
            <input type="text" name="Last Name" placeholder="Last Name" /><br><br>
</div>
<div class="div1">
	<label for="Email Address">
            Email Address<span class="req">*</span>
    </label>
            <input type="email" name="Email Address" placeholder="Email id"/><br><br>
</div>
<div class="div1">
	<label for="Set A Password">
            Set A Password<span class="req">*</span>
    </label>
            <input type="password" placeholder="Must be greater than 8 charachters."/><br><br>
</div>
<div class="div1">
	<label for="gender">Gender</label>
			<input type="radio" name="gender" checked>Male 
			<input type="radio" name="gender" >Female
</div>
			<br><br>
			<button class ="signup" name="submit" type="submit" />Get Started</button>
</fieldset>
</form>
</div>
<p><span class="btn-round">Or</span></p><br>
<p>
<a class="facebook-before"></a>
<button class="facebook">Sign up Using Facbook</button>
</p>
<p>
<a class="twitter-before"></a>
<button class="twitter">Sign up Using Twitter</button>
</p>
<a class="google-before"></a>
<button class="google">Sign up Using Google</button>
</p>

</div>
<div id="login">
<h1>Login</h1>
<div class="formlogin">
<form action="" method="">
<fieldset>
<div class="div2">
	<label for="Username">
            Username<span class="req">*</span>
    </label>
            <input type="email" name="Username" placeholder="Username"/><br><br>
</div>
<div class="div2">
	<label for="Password">
            Password<span class="req">*</span>
    </label>
            <input type="password" placeholder="Password"/><br><br>
</div>
<br><br>
			<button type="submit" />Login</button>
			<button type="reset" />Reset</button>
</fieldset>
</form>
</div><br><br>
<h2>Login Using</h2>
</div>
</body>
</html>
<?php
$fname = $_POST['submit'];
if(isset($fname)&&!empty($fname)){
		echo "Not Empty Field!!!";
	}
	else{
		echo "Empty Field";
	}

?>