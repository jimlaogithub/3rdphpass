<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Charpage</title>
    <style>
         /* .col-md-8{
            border: 1px solid red;
        }
        .row {
            border: 1px solid black;
        }  */
        *{
            font-family:'Open Sans', sans-serif !important;
        }

        img{
            width: 90px;
            height: 60px;
        }
        .background{
            background-image: url('img/bg3.jpg');
            /* Full height */
            height: 50%;

            /* Center and scale the image nicely */
            background-position: top;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            backgroud-opac
        }
        .ops{
            opacity: 60%;
        }
        .ops:hover{
            opacity: 100%;
        }
        .card{
            opacity:80%;
        }
    </style>

</head>
<body>

    <div class="container-fluid">
        <!-- navbar area -->
        <div class="row navbar navbar-expand-lg navbar-light bg-light ">
           <?php
                include('util/indexNav.php');
                
           ?>

        </div>

        <div class="row background">
            <div class="col-md-8">
                <blockquote class="blockquote text-center mt-5 card bg-light">
                    <h2 class="mb-0">An investment in knowledge pays the best interest</h2>
                    <footer class="blockquote-footer">Benjamin Franklin</footer>
                </blockquote>
            </div>
            <!-- sign-up area -->
            <div class="col-md-4">
                <?php
                include('util/signup.php');
                ?>
            </div>
        </div>
         
    </div>
    


    <script src="js/scrp.js"></script>
</body>
</html>