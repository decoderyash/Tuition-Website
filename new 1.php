<?php
session_start();
if(isset($_SESSION['user_email'])){
    
    
    header("location:main.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="new.css">
<script type="javascript">
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
</head>
<body>
<h1>Welcome on the online tutorials</h1>
<div>
<p>We provide online tutorials for different subjects from different domains.To enjoy full subscription please Sign up as a user and if you are already a user then please login.</p>
</div>
<div class="form">
<marquee><img src=s2.jpg><img src=s3.jpg><img src=s4.jpg></marquee>
</div>
<div id="login">
<h1>Login</h1>
<div class="formlogin">
<form  name="myForm" action="login.php" method="post" onsubmit="return validateForm()">
<fieldset>
<div class="div2">
	<label for="Username">
            Username<span class="req">*</span>
    </label>
            <input type="email" name="username" placeholder="Username" required/><br><br>
</div>
<div class="div2">
	<label for="Password">
            Password<span class="req">*</span>
    </label>
            <input type="password" name="password" placeholder="Password" minlength="" required/>Must be atleast 8 character long<br><br>
</div>
<br><br>
			<center><button type="submit" />Login</button>
			<button type="reset" />Reset</button></center>
</fieldset><br>
</form>
<center><button onclick="location.href='new_2.html'" style="padding:5px;text-align:center;padding-left:10px;padding-right:10px;">New User</button></center>
</div><br><br>
<!--<h2>Login Using</h2><br><br>
<p>
<button class="facebook-before" id="facebook" onclick="location.href ='https://www.facebook.com'">Login Using Facbook</button>
</p>
<p>
<a class="twitter-before"></a>
<button id="twitter" onclick="location.href ='https://www.twitter.com'">Login Using Twitter</button>
</p>
<a class="google-before"></a>
<button id="google" onclick="location.href ='https://www.gmail.com'">Login Using Google</button>
</p>
</div>-->
</body>
</html>