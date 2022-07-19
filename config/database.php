<?php

    function newConnection($hostType="localhost"){
        if($hostType == "localhost"){
            $conn = new mysqli("localhost","chris","12345","test");
            if($conn->connect_error){
                die("Connection failed $conn->connect_error");
            }else{
                echo "LOCAL HOST CONNECTED!";
            }
            return $conn;
        }
        elseif($hostType == "hostinger"){
            $conn = new mysqli("localhost","u909074988_admin","Admin12345","u909074988_dbacare");
            if($conn->connect_error){
                die("Connection failed $conn->connect_error");
            }else{
                echo "HOSTINGER CONNECTED!";
            }
            return $conn;
        }

        return NULL;
    }

?>