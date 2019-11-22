<?php

session_start();
unset($_SESSION['user_email']);
session_destroy();
header("location:new 1.php");



?>