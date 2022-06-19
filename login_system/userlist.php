<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user List</title>
</head>
<body>
		<h2>user list</h2>
		<a href="home.php"> Back </a> | 
		<a href="logout.php"> logout </a>
		<br>

		<table border="1">
			<tr>
				<td>Username</td>
				<td>Password</td>
				<td>Email</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>abc</td>
				<td>123</td>
				<td>abc@aiub.edu</td>
				<td>
					<a href="edit.php"> Edit </a> | 	
					<a href="delete.php"> Delete </a> 
				</td>
			</tr>
		</table>
</body>
</html>