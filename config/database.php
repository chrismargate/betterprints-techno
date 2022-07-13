<?php

    define("DB_HOST","localhost");
    define("DB_USER","chris");
    define("DB_PASS","12345");
    define("DB_NAME","test");

    function newConnection($hostType="localhost"){
        if($hostType == "localhost"){
            $conn = new mysqli("localhost","chris","12345","test");
            if($conn->connect_error){
                die("Connection failed $conn->connect_error");
            }else{
                echo "CONNECTED!";
            }
            return $conn;
        }elseif($hostType == "hostinger"){
            $conn = new mysqli("localhost","chris","12345","test");
            if($conn->connect_error){
                die("Connection failed $conn->connect_error");
            }else{
                echo "CONNECTED!";
            }
            return $conn;
        }
    }

 /*
    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if($conn->connect_error){
        die("Connection failed $conn->connect_error");
    }else{
        echo "CONNECTED!";
    }
*/

?>