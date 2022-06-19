<?php 
//session_start();

//print_r($_GET); 
//echo "<br>";
//echo $_GET['email'];

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username == null || $password == null){
	echo "null username/password...";
}else{
	
	if($username == $password){
		//$_SESSION['status'] = true;
		setcookie('status', 'true', time()+3600, '/');		
		header('location: home.php?username='.$username);
	}else{
		echo "invalid username/password";
	}
}


/*$_POST
$_REQUEST
$_SERVER
$GLOBALS 
$_SESSION 
$_COOKIE */

?>