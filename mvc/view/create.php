<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>Add user</title>
</head>
<body>
	<a href="home.php"> Back </a> | 
	<a href="../controller/logout.php"> logout </a>

	<form action="regcheck.php" method="post" enctype="">
		<fieldset>
			<legend>Add</legend>
				Username: <input type="text" name="username" value=""/> <br>
				Password: <input type="password" name="password" value=""/> <br>
				Email: <input type="email" name="email" value=""/> <br>
				<input type="hidden" name="fname" value="create"/> <br>
				<input type="submit" name="submit" value="Create"/>
		</fieldset>
	</form>
</body>
</html>