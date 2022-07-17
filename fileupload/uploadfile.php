<?php

    $src = $_FILES['myfile']['tmp_name'];
    $des = "upload/".$_FILES['myfile']['name'];

   if(move_uploaded_file($src, $des)){
        echo "success";
   }else{
        echo "Error";
   }
?>