<?php 
	if(isset($_COOKIE['status']))
	{
?>

<html>
<head>
	<title>Test</title>
</head>
<body>
	<h1>Welcome home</h1>
	<a href="logout.php"> logout </a>
	
</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>