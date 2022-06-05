<?php 

/*	$name = "alamin";
	$id = 124;
	$cgpa = 4.00;
	$status = true;
	define('CGPA', 2.5);*/

	//echo $name;
	//print('test....')
	//$student = array('alamin', 1, 'alamin@aiub.edu');
	//$student = ['alamin', 1, 'alamin@aiub.edu'];
	//$student[0];

	//$student = ['name'=>'alamin','id'=> 1, 'email'=>'alamin@aiub.edu'];
	//echo $student['email'];

/*	$students = [
					['alamin', 1, 'alamin@aiub.edu'],
					['xyz', 2, 'xyz@aiub.edu'],
					['abc', 3, 'abc@aiub.edu']	
				];*/

	$students = [
					's1'=>['name'=>'alamin','id'=> 1, 'email'=>'alamin@aiub.edu'],
					's2'=>['name'=>'xyz','id'=> 2, 'email'=>'xyz@aiub.edu'],
					's3'=>['name'=>'abc','id'=> 3, 'email'=>'abc@aiub.edu']	
				];

	//echo $students['s3']['name'];

/*	if(){

	}else{

	}*/

/*for ($i=0; $i <10 ; $i++) { 
	echo "alamin"."\r\n";
}*/

foreach ($students as $s) {
	echo "<h1>".$s['name']."--".$s['id']."--".$s['email']."</h1><br>";
}

/*function sum($a, $b){
	return $a+$b;
}*/

//echo sum(4,6);

?>


