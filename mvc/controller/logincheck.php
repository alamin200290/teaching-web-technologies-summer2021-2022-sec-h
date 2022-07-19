<?php 
require_once('../model/userModel.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username == null || $password == null){
	echo "null username/password...";
}else{
	
	$staus  = login($username, $password);

	if($status){
		setcookie('status', 'true', time()+3600, '/');		
		header('location: ../view/home.php?username='.$username);
	}else{
		echo "invalid username/password";
	}
}

?>