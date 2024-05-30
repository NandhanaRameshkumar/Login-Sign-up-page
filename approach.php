<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="final";
    $conn=new mysqli($host,$user,$pass,$db,3306);
    if($conn->connect_error){
        echo "Connection failed".$conn->connect_error;
    }

?>

