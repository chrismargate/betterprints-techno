<?php
    include "config/database.php";
    
    function validInputSpecific($inputString,$invalidChars){
        $inputStirng = str_split($inputString);
        foreach($inputString as $inputChars){
            if(in_array($inputChars,$invalidChars)){
                return false;
            }
        }
        return true;
    }

    function validInput($inputString){
        $inputString = str_split($inputString);
        $allowedSymbols = ["_",".","-"];
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


    $sampleString = "Chris";
    $invalidCharacters = ["!","$","@"];

    var_dump(validInput($sampleString));

?>