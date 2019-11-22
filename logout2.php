<?php

session_start();
unset($_SESSION['username1']);
unset($_SESSION['password1']);
session_destroy();
header("location:faculty_login.php");

?>