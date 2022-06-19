<?php 
	
/*	$file = fopen('user.txt', 'r');
	$data = fread($file, filesize('user.txt'));
	echo $data;
	fclose($file);*/

/*	$file = fopen('user.txt', 'w');
	$data = "this is new line....";
	fwrite($file, $data);
	fclose($file);
	echo "Done";*/

	$file = fopen('user.txt', 'a');
	$data = "this is new line2....\r\n";
	fwrite($file, $data);
	fclose($file);
	echo "Done";
?>