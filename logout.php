<?php 
session_start();
//To destroy session variable
session_destroy();
header("location:login.php");
?>