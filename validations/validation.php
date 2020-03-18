<?php

    function checkLenght(array $data){
        foreach($data as $value){
            $cleanStr = preg_replace('/[ ]/','', $value);
            if(strlen($cleanStr) < 2){
                return false;
            }
        }
        return true;
    }


    function checkInput(array $data){
        foreach($data as $value){
            $match = preg_match('/^[^a-zA-Z \.]+$/',$value);
            if($match){
                return false;
            }
        }
        return true;
    }

    function checkEmail($data){
        return (preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/',$data)) ? true : false;

    }

    function checkContact($data){
        return (preg_match('/^[+630-9]{13}$/',$data)) ? true : false;
    }

    function checkSY($data){
        return ($match = preg_match('/^([\d]{4})-([\d]{4})$/',$data)) ? true : false;
    }


?>