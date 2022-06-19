<?php 

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$fname = $_REQUEST['fname'];

if($username == null || $password == null || $email == null){
	echo "null username/password/email...";
}else{
		$user = $username."|".$password."|".$email."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		if($fname == 'create'){
			header('location: home.php');
		}else{
			header('location: login.html');			
		}

}

?>