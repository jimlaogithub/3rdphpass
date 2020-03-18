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

<?php include_once('util/dbconnect.php');?>
    <div class="container-fluid">
        <div class="row navbar navbar-expand-lg navbar-light bg-light ">
           <?php
                include('util/navbar.php');   
           ?>
        </div>
    
        
          <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!-- <th scope="col">Profile Picture</th> -->
                            <th scope="col">StudentID</th>
                            <th scope="col">Fist Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Civil Status</th>
                            <th scope="col">Gaurdian</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Year Level</th>
                            <th scope="col">Course</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                        $sql = "SELECT * FROM studentInfo";
                                
                        if(isset($_GET['searchkey'])){
                            $searchkey = $_GET['searchkey'];
                            $sql = "SELECT * FROM studentInfo WHERE studFName LIKE '%$searchkey%' OR studLName LIKE '%$searchkey%' OR studCourse LIKE '%$searchkey%'
                                    OR studGender LIKE '%$searchkey%' OR studEmail LIKE '%$searchkey%'";
                        } 
                            

                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>

                        <tr>
                            <td><?=$row['studentID']?></td>
                            <td><?=$row['studFName']?></td>
                            <td><?=$row['studMName']?></td>
                            <td><?=$row['studLName']?></td>
                            <td><?=$row['studGender']?></td>
                            <td><?=$row['studAddress']?></td>
                            <td><?=$row['studDOB']?></td>
                            <td><?=$row['studCivilStatus']?></td>
                            <td><?=$row['studGaurdian']?></td>
                            <td><?=$row['studContactNumber']?></td>
                            <td><?=$row['studEmail']?></td>
                            <td><?=$row['studYearLvl']?></td>
                            <td><?=$row['studCourse']?></td>
                        </tr>

                    <?php 
                        }
                    }
                    ?>
                    </tbody>
                
                </table>
            </div>
 
    </div>
    
</body>
</html>