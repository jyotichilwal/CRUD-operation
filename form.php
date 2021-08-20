<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	<style rel="stylesheet" herf="style.css"></style>
</head>
<body>
	<div class="d1">
	<form method="post" enctype="multipart/form-data">
		<h1>Name</h1><input type="text" name="n1"><br>
		<h1>Mail Id</h1><br><input type="text" name="n2">
		<h1>Password</h1><input type="password" name="n3"><br>
		<input type="submit" name="sub" value="login"><br>
		<a href="login.php"></a>
		<?php
		if (isset($_POST["sub"])) {
			$name=$_POST["n1"];
			$mail=$_POST["n2"];
			$password=$_POST["n3"];
			$connect=mysqli_connect("localhost","root","","test");
			$que="INSERT INTO form (eId,eName,eMail,ePassword) VALUES('','$name','$mail','$password')";
			$query=mysqli_query($connect,$que);

		}


		?>


		
	</form>
    </div>
</body>
</html>