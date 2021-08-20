<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
</head>
<?php
	$conn=mysqli_connect("localhost","root","","test");
	$que="SELECT * FROM form";
	$query1=mysqli_query($conn,$que);

	?>
<body>
	<h1 style="text-align: center;">WELCOME</h1>
<hr>
<a href="form.php">Add new</a>
<a href="logout.php">logout</a>
<hr>
<table border="1">
		<tr> <th>S.No.</th><th>Name</th><th>Mail id</th><th>Password</th><th>Edit</th><th>delete</th></tr>
		<?php while($arr=mysqli_fetch_array($query1)) {?>
		<tr><th><?php echo$arr[0];?></th><th><?php echo$arr[1];?></th><th><?php echo$arr[2];?></th><th><?php echo$arr[3];?></th><th><a href="edit.php?id=<?php echo$arr[0];?>">Edit</a></th><th><a href="delete.php?id=<?php echo$arr[0];?>">delete</a></th></tr>
	<?php }?>
	</table>
</body>
</html>