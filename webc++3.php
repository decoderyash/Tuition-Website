<?php
session_start();
if(!isset($_SESSION['user_email'])){
	
	
	header("location:new 1.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="web1.css">
	<script type="text/javascript">
	</script>
</head>
<body>
	<div class= "header">
	<header><h1>Online Tution</h1></header>
	<br>
	</div>
	<br><br>
	<div class="list_of_c">
		<ul class="list_of_c">
			<li class="each_content" onclick="location.href='webc++1.php'">Installing CodeBlocks</li>
			<li class="each_content" onclick="location.href='webc++2.php'">Understanding a simple c++ program</li>
			<li class="each_content" onclick="location.href='webc++3.php'">More on Printing Text</li>
			<li class="each_content" onclick="location.href='webc++4.html'">variable</li>
			<li class="each_content" onclick="location.href='webc++5.html'">Creating a Basic Calculator</li>
			<li class="each_content" onclick="location.href='webc++6.html'">Variables Memory Concepts</li>
			<li class="each_content" onclick="location.href='webc++7.html'">Basic Arithmetic</li>
			<li class="each_content" onclick="location.href='webc++8.html'">if statement</li>
			<li class="each_content" onclick="location.href='webc++9.html'">Functions</li>
			<li class="each_content" onclick="location.href='webc++10.html'">Creating Functions that use parameters</li>
			<li class="each_content" onclick="location.href='webc++11.html'">Functions that use multiple parameters</li>
			<li class="each_content" onclick="location.href='webc++12.html'">Introductio to Classes and Object</li>
			<li class="each_content" onclick="location.href='webc++13.html'">Using Variables in Classes</li>
			<li class="each_content" onclick="location.href='webc++14.html'">Constructors</li>
			<li class="each_content" onclick="location.href='webc++15.html'">Placing Classes in Separate Files</li>
			<li class="each_content" onclick="location.href='webc++16.html'">if statement.....again?</li>
			<li class="each_content" onclick="location.href='webc++17.html'">if/else statement</li>
			<li class="each_content" onclick="location.href='webc++18.html'">While loops</li>
			<li class="each_content" onclick="location.href='webc++19.html'">Simple Program Using a Loop</li>
			<li class="each_content" onclick="location.href='webc++20.html'">Sentinel Controlled Program</li>
			<li class="each_content" onclick="location.href='webc++21.html'">Assignment and Increment Operators</li>
			<li class="each_content" onclick="location.href='webc++22.html'">For Loops</li>
			<li class="each_content" onclick="location.href='webc++23.html'">Making a stock market Simulator!</li>
			<li class="each_content" onclick="location.href='webc++24.html'">Do-While loops</li>
			<li class="each_content" onclick="location.href='webc++25.html'">Switch</li>
			<li class="each_content" onclick="location.href='webc++26.html'">Logical Operators</li>
			<li class="each_content" onclick="location.href='webc++27.html'">Random Number Generator</li>
			<li class="each_content" onclick="location.href='webc++28.html'">Default Arguments/Parameters</li>
			<li class="each_content" onclick="location.href='webc++29.html'">Unary Scope Resolution Operator</li>
			<li class="each_content" onclick="location.href='webc++30.html'">Function Overloading</li>
			<li class="each_content" onclick="location.href='webc++31.html'">Recursion</li>
			<li class="each_content" onclick="location.href='webc++32.html'">Arrays</li>
			<li class="each_content" onclick="location.href='webc++33.html'">Create an array using loops</li>
			<li class="each_content" onclick="location.href='webc++34.html'">Using Arrays to Calculations</li>
			<li class="each_content" onclick="location.href='webc++35.html'">Passing Arrays to Functions</li>
			<li class="each_content" onclick="location.href='webc++36.html'">Multidimensional Arrays</li>
			<li class="each_content" onclick="location.href='webc++37.html'">How to Print Out Multidimensional arrays</li>
			<li class="each_content" onclick="location.href='webc++38.html'">Introduction to Pointers</li>
			<li class="each_content" onclick="location.href='webc++39.html'">Pass by Reference with Pointers</li>
			<li class="each_content" onclick="location.href='webc++40.html'">Sizeof</li>
			<li class="each_content" onclick="location.href='webc++41.html'">Pointers and Math</li>
			<li class="each_content" onclick="location.href='webc++42.html'">Arrow Member Selection Operator</li>
			<li class="each_content" onclick="location.href='webc++43.html'">Deconstructors</li>
			<li class="each_content" onclick="location.href='webc++44.html'">const Objects</li>
			<li class="each_content" onclick="location.href='webc++45.html'">Member Initializers</li>
			<li class="each_content" onclick="location.href='webc++46.html'">Composition</li>
			<li class="each_content" onclick="location.href='webc++47.html'">Composition Part 2</li>
			<li class="each_content" onclick="location.href='webc++48.html'">friend</li>
			<li class="each_content" onclick="location.href='webc++49.html'">this</li>
			<li class="each_content" onclick="location.href='webc++50.html'">Operator Overloading</li>
			<li class="each_content" onclick="location.href='webc++51.html'">More on Operator Overloading</li>
			<li class="each_content" onclick="location.href='webc++52.html'">Inheritance</li>
			<li class="each_content" onclick="location.href='webc++53.html'">Protected Members</li>
			<li class="each_content" onclick="location.href='webc++54.html'">Derived Class Constructors and Destructors</li>
			<li class="each_content" onclick="location.href='webc++55.html'">Introduction to Polymorphism</li>
			<li class="each_content" onclick="location.href='webc++56.html'">Virtual Functions</li>
			<li class="each_content" onclick="location.href='webc++57.html'">Abstract Classes and Pure virtual functions</li>
			<li class="each_content" onclick="location.href='webc++58.html'">function Templates</li>
			<li class="each_content" onclick="location.href='webc++59.html'">function Templates with Multiple Parameter</li>
			<li class="each_content" onclick="location.href='webc++60.html'">Class Templates</li>
			<li class="each_content" onclick="location.href='webc++61.html'">Template Specializations</li>
			<li class="each_content" onclick="location.href='webc++62.html'">Exceptions</li>
			<li class="each_content" onclick="location.href='webc++63.html'">More Exceptions Examples</li>
			<li class="each_content" onclick="location.href='webc++64.html'">Working with Files</li>
			<li class="each_content" onclick="location.href='webc++65.html'">Tips for File Handling</li>
			<li class="each_content" onclick="location.href='webc++66.html'">Writing Custom File Structures</li>
			<li class="each_content" onclick="location.href='webc++67.html'">Reading Custom File Structures</li>
			<li class="each_content" onclick="location.href='webc++68.html'">Cool Program Working with Files</li>
			<li class="each_content" onclick="location.href='webc++69.html'">Finishing the Awesome Program</li>
			<li class="each_content" onclick="location.href='webc++70.html'">Reviewing the Final Program</li>
			<li class="each_content" onclick="location.href='webc++71.html'">String class and string Functions</li>
			<li class="each_content" onclick="location.href='webc++72.html'">String substring,swapping and finding</li>
			<li class="each_content" onclick="location.href='webc++73.html'">Final Video for this Series!</li>
		</ul>
	</div>
	<div id="div1" class="media_player">
		<h2>C++ tutorial</h2><br>
		<video id="videos" height="500px" width="1000px" controls>
		<source src="c++3.mp4" type="video/mp4">
		</video>
	</div>
	<div class="data">
		<h2>Introduction</h2><br>
		<p>So you want to learn C? We hope to provide you with an easy step by step guide to programming in C. The course is split up into several sections, or lessons, which include C example programs for you to demonstrate what has been taught. Although the ordering of the sections does not have to be strictly followed, the sections become progressively more involved and assume background knowledge attained from previous sections. Good Luck!</p>
	</div>
	<ul class="nav">
		<li><a href="main.html">Home</a></li>
		<li><a href="pdfs.html">PDFs</a></li>
		<li><a href="#">Tutorial</a>
		<ul class="sub1">
			<li><a href="web1.html">C</a></li>
			<li><a href="webc++1.html">C++</a></li>
			<li><a href="#">java</a></li>
		</ul>
		</li>
		<li><a href="#">About</a></li>
	</ul>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	 <script>
	 	$(".list_of_c").hide();
	 	$("#div1").hide();
	 	$(".list_of_c").fadeIn(1000,function(){
	 		$("#div1").fadeIn(1000);
	 	});
	 </script>
	</body>
</html>