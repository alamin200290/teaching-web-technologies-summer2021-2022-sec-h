<?php 

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username == null || $password == null){
	echo "null username/password...";
}else{
	
	$file = fopen('user.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		if($username == trim($user[0]) && $password == trim($user[1])) {
			setcookie('status', 'true', time()+3600, '/');		
			header('location: home.php?username='.$username);
		}	
	}

	echo "invalid username/password";
}


/*$_POST
$_REQUEST
$_SERVER
$GLOBALS 
$_SESSION 
$_COOKIE */

?>