<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Document</title>


    <style>
        *{
            font-family:'Open Sans', sans-serif !important;
        }

        img{
            width: 90px;
            height: 60px;
        }
    </style>
</head>
<body>


<?php

    include_once('util/indexNav.php');
    include_once('util/dbconnect.php');
    include_once('validations/validateFile.php');
    include_once('validations/validation.php'); 

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $lastname = $_POST['lName'];
    $firstname = $_POST['fName'];
    $middlename = $_POST['mName'];
    $address = $_POST['address'];
    $DOB = $_POST['DOB'];
    $POB = $_POST['POB'];
    $sex = $_POST['gender'];
    $guardian = $_POST['guardian'];
    $contact = $_POST['contact'];
    $status = $_POST['status'];
    $year = $_POST['yearLevel'];
    $course = $_POST['course'];
    $SY = $_POST['SY'];
    $email = $_POST['email'];
    $file = $_FILES['file'];
    $dir = "uploads/";
    $arr = array($lastname,$firstname,$middlename,$address,$POB,$guardian,$username);
    $arr2 = array($lastname,$firstname,$middlename,$guardian);

    if(checkLenght($arr)){
        if($password == $repassword){
            if(checkInput($arr2)){
                if(checkEmail($email) && checkContact($contact) && checkSY($SY)){

                    if(validateFile($file)){
                        $sql = "INSERT INTO studentuser (studUserName,studPass) VALUES ('$username', '$password')";
                        $sql2 = "INSERT INTO studentinfo
                        (studLName,studFName,studMName,studGender,studAddress,studDOB,studPOB,studCivilStatus,studGaurdian,studContactNumber,studYearLvl,studCourse,studSY,studEmail)
                        VALUES
                        ('$lastname','$firstname','$middlename','$sex','$address','$DOB','$POB','$status','$guardian','$contact','$year','$course','$SY','$email')";
                        if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) ){
                            include('util/welcomeModal.php');        
                        }else{             
                            echo "failed to register";
                        }
                    }
                    
                }else{
                    echo "email contact info and school year must be in correct format";
                }

            }else{
                echo "names must not contain special character";
                 
            }
        }else{
            echo "password does not match";
        }
    }else{
        echo "fields must be more than 1 character";
    }

      
    
    



?>
<a href="search.php">View Student List</a>
<script>
$(document).ready(function(){
   $("#myModal").modal();
});
</script>
</body>
</html>
