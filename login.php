<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		Email<input type="text" name="n1"><br>
		Password<input type="Password" name="n2"><br>
		<input type="submit" name="sub" value="login">
		<br>
		<a href="form.php">singh up</a>
	</form>
	<?php
	if(isset($_POST["sub"]))
	{
		session_start();
		$un=$_POST["n1"];
		$up=$_POST["n2"];
		$conn=mysqli_connect("localhost","root","","test");
		$que="SELECT * FROM form WHERE eMail='$un'and ePassword='$up' ";
		$query=mysqli_query($conn, $que);
		$count=mysqli_num_rows($query);
		if ($count>0) 
		{
			$_SESSION["user"]=$un;
			header("location:welcome.php");
		}
		else
		{
			echo"Invaild user";
		}
	}


	?>
</body>
</html>