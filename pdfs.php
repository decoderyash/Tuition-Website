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
</head>
<body>
	<a style="color: black;" href="http://www.ime.usp.br/~pf/Kernighan-Ritchie/C-Programming-Ebook.pdf"><img src="c_pdf.jpg" alt="c book"></img></a>
</body>
</html>