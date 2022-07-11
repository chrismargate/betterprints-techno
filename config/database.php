<?php

    define("DB_HOST","localhost");
    define("DB_USER","chris");
    define("DB_PASS","12345");
    define("DB_NAME","test");


    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if($conn->connect_error){
        die("Connection failed $conn->connect_error");
    }

    echo "CONNECTED!";

    function emptyFields($inputArray){
        foreach($inputArray as $arrayElement){
            if(empty($arrayElement)){
                return true;
            }
        }
        return false;
    }
?>