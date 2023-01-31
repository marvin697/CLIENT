<?php 

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'newrent';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if(!$conn->connect_error){
    //  echo "Connected.";        
    }else{
        die('failed.' . $conn->connect_error);
    }

