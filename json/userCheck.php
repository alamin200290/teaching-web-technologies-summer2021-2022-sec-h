<?php 
    $json = $_POST['data'];
    // $user = json_decode($json);
    // print_r($user->username);
    $users = [
                ['name'=>'alamin', 'password'=>'123', 'email'=>'alamin2aiub.edu'],
                ['name'=>'alamin', 'password'=>'123', 'email'=>'alamin2aiub.edu'],
                ['name'=>'alamin', 'password'=>'123', 'email'=>'alamin2aiub.edu']
            ];
    echo json_encode($users);
?>