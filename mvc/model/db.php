<?php 

   $dbserver = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $dbname = "webtech";


    function getconnection(){
        global $dbname;
        global $dbserver;
        global $dbpass;
        global $dbuser;

        return  $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
    }

?>