<?php

    // include "config/database.php";

    function emptyFields($inputArray){
        foreach($inputArray as $arrayElement){
            if(empty($arrayElement)){
                return true;
            }
        }
        return false;
    }

    function validStringSpecific($inputString,$invalidChars){
        $inputString = str_split($inputString);
        $invalidChars = str_split($invalidChars);
        foreach($inputString as $inputChars){
            if(in_array($inputChars,$invalidChars)){
                return false;
            }
        }
        return true;
    }

    function validString($inputString){
        $inputString = str_split($inputString);
        $allowedSymbols = str_split("-_.");
        foreach($inputString as $inputChars){
            if(!IntlChar::isalnum($inputChars)){
                if(in_array($inputChars,$allowedSymbols)){
                    continue;
                }
                return false;
            }
        }
        return true;
    }

    function validLengthSpecific($inputString,$maxLength=50){
        if(strlen($inputString) > $maxLength){
            return false;
        }

        return true;
    }

    function matchPassword($firstPass,$secondPass){
        if(!($firstPass == $secondPass)){
            return false;
        }

        return true;
    }

    function validEmail($inputString){
        $inputString = str_split($inputString);
        $atCounter = 0;
        $dotCounter = 0;
        foreach($inputString as $inputChar){
            if($inputChar == "@") $atCounter++;
            elseif ($inputChar == ".") $dotCounter++;

            if($atCounter >= 1 && $dotCounter >= 1){
                return true;
            }
        }
        return false;
    }

    function validInt($inputString){
        $inputString = str_split($inputString);
        foreach($inputString as $inputChar){
            if(!is_numeric($inputChar)){
                return false;
            }
        }
        return true;
    }

    function validDouble($inputString){
        $inputString = str_split($inputString);
        $dotCounter = 0;
        foreach($inputString as $inputChar){
            if(!is_numeric($inputChar)){
                if($inputChar == "."){
                    $dotCounter++;
                    if($dotCounter > 1){
                        return false;
                    }
                    continue;
                }
                return false;
            }
            
        }
        return true;
    }

    function existingUsername($inputString){
        
        $conn = newConnection();

        $sqlQuery = "SELECT * FROM customers_T WHERE username = '$inputString'";
        $sqlResults = mysqli_query($conn,$sqlQuery);

        $conn->close();
        if(mysqli_num_rows($sqlResults) > 0){
            return true;
        }

        return false;
    }

    function correctPassword($username,$password){

        $conn = newConnection();

        $sqlQuery = "SELECT * FROM customers_T WHERE username = '$username' AND password='$password'";
        $sqlResults = mysqli_query($conn,$sqlQuery);

        $conn->close();
        if(mysqli_num_rows($sqlResults) > 0){
            return true;
        }

        return false;
    }

    function existingEmail($inputString){
        
        $conn = newConnection();

        $sqlQuery = "SELECT * FROM customers_T WHERE email_address = '$inputString'";
        $sqlResults = mysqli_query($conn,$sqlQuery);
        
        $conn->close();
        if(mysqli_num_rows($sqlResults) > 0){
            return true;
        }

        return false;

    }

    function retrieveRecord($inputString){
        $conn = newConnection();

        $sqlQuery = "SELECT * FROM customers_T WHERE username = '$inputString'";
        $sqlResults = mysqli_query($conn,$sqlQuery);
        $results = mysqli_fetch_all($sqlResults,MYSQLI_ASSOC)[0];

        $conn->close();

        return $results;
    }

?>