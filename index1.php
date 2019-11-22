<?php

session_start();
if(isset($_SESSION['username'])){
  
  
  header("location:search.php");
}

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="sign1.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text"  maxlength="32" value="" name="First"  aria-describedby="name-format" required aria-required=”true” pattern="[A-Za-z]{1,32}" title="Please Enter your First Name" size="30" />
            </div>
        
            <div class="field-wrap">
              
              <select name="College">
   <option value="vgec">VGEC</option>
   <option value="LD">LD</option>
   <option value="LJ">LJ</option>
   <option value="LDRP">LDRP</option>
</select>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" id ="User" maxlength="32" value="" name="User"aria-describedby="name-format" required aria-required=”true” pattern="[A-Za-z]{1,32}" title="Please Enter your Last Name" size="30">
          </div>
          
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id ="Email"   value="" name="Email"required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please Enter your Email Address" size="30">
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id ="Password" name="Password"  value="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Please Enter your Password" size="30">
          </div>

          <div class="field-wrap">
            <label>
              Re-enter Password<span class="req">*</span>
            </label>
            <input type="password" id="Reenter " name="Reenter"  value="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="input must contain at least one digit/lowercase/uppercase letter and be at least six characters long" size="30">
          </div>

          <div class="field-wrap">
            <label>
              Phone No.<span class="req">*</span>
            </label>
            <input type="tel" id="Phone"  name="Phone" maxlength="10"  value=""required  pattern="[0-9]{10}" title="Please Enter your Phone no"size="30">
          </div>


          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login1.php" method="post">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" id ="UserID" maxlength="32" value="" name="username"  aria-describedby="name-format" required aria-required=”true” pattern="[A-Za-z]{1,32}" size="30">
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id="Password " maxlength="32" value="" name="password"  aria-describedby="name-format" required aria-required=”true” pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" size="30"><br>
          
          <button type="submit" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
