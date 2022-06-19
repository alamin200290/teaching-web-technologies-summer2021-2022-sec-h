<?php 
	session_start();

	if(isset($_SESSION['status']))
	{
?>

<html>
<head>
	<title>Test</title>
</head>
<body>
	<h1>Welcome home, <?php echo $_GET['username'];?></h1>
	<a href="logout.php"> logout </a>
	
</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>