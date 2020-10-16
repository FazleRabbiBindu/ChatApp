<?php


    //database connection
    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $db_name = 'class_1';
    $conn = new mysqli($server_name,$user_name,$password,$db_name);
    if($conn->connect_error)
    {
    echo "Connection Failed".$conn->connect_error."<br>";
    }
    else
    {
    echo "Connection Successful<br>";
    }




?>