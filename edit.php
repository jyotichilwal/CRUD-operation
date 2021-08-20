<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Edit</title>
</head>
<body>
	<?php 
	$did=$_GET['id'];
	$connect=mysqli_connect("localhost","root","","test");
	$que="SELECT * FROM form WHERE eId='$did'";
	$query=mysqli_query($connect,$que);
	$arr=mysqli_fetch_array($query);
	if (isset($_POST["sub"])) {
		$name=$_POST["n1"];
			$mail=$_POST["n2"];
			$password=$_POST["n3"];
	}
	// to connect with viewll data
	$que1="UPDATE form SET eName='$name',eMail='$mail',ePassword='$password' WHERE eId='$did'";
	$que=mysqli_query($connect,$que1);
	?>
	<a href="welcome.php">View All</a>
	<a href="form.php">Add New</a>
	<hr>
	<form method="post"enctype="multipart/form-data">
		Name:<input type="text" name="n1" value="<?php echo $arr['1'];?>">
		Email:<input type="text" name="n2" value="<?php echo $arr['2'];?>">
		Password:<input type="text" name="n3" value="<?php echo $arr['3'];?>">
		<input type="submit" name="sub" value="login">
	</form>
</body>
</html>