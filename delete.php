<?php
$did=$_GET['id'];
$connect=mysqli_connect("localhost","root","","test");
$que="DELETE FROM form WHERE eId='$did'";
$query=mysqli_query($connect,$que);
header("location:welcome.php");
?>