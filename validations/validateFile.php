<?php

    function validateFile(array $file){
        $dir = "uploads/";
         /* file validation */
        if(checkType($file['type'])){
            if(checkSize($file['size'])){
                $targetDir = $dir.basename($file['name']);
                if(checkIfFileExist($targetDir)){
                if(moveFile($file['tmp_name'],$targetDir)){
                    return true;
                }else{
                    echo "error upload";
                }
                }else{
                    echo "[{$file['name']}] file exist <br>";
                }
            }else{
                echo "[{$file['name']}] file To Large <br>";
            }
        }else{
            echo "[{$file['name']}] this file type is not allowed <br>";
        }
    }


    
    // validates the data type of the file
   function checkType($type){

    $allowed = array('jpg', 'jpeg', 'png');
    $fileExt = explode('/', $type);
    $fileExt = strtolower(end($fileExt));
    return in_array($fileExt, $allowed) ? true : false ;

    }

    function checkSize($size){
        return ($size <= 1000000) ? true : false;
    }

    function checkIfFileExist($file){
        return (!file_exists($file)) ? true : false;
    }

    function moveFile($file,$targetDir){
        return  move_uploaded_file($file,$targetDir);
    }

?>