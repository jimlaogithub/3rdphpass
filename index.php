<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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