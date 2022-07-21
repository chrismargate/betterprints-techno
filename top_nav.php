<?php
    session_start();

    if(isset($_POST['logout'])){
        echo "<h1>Sample</h1>";
    }

    // function sampleFunc(){
    //     header("Location: logout.php");
    // }
    
?> 

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Top Navigation Bar</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- EXTERNAL CSS FILE -->
    <link href="assets/css/top_nav.css" rel="stylesheet">
    </head>
    <body>
    <!-- START CODE HERE -->

    <nav class="navbar navbar-expand-lg bg-light bg-transparent ps-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assets/logo/bp-logo-transparent.png" alt="" width="80" height="70">
            </a>
            <!-- <a class="navbar-brand ps-2" href="#">BetterPrints</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <button type="button" onclick="goToMainFunction()" class="btn btn-outline-success" style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" name="main-btn">Go to Main Page</button>
            <!-- <span class="navbar-text ps-4 pe-4"> -->
                <?php
                echo '<span class="navbar-text ps-4 pe-4">Hello, '. $_SESSION['fname'] . ' </span>';
                ?>
                 <!-- Hello, Jemma
             </span> -->
            <li class="nav-item">
                <a class="nav-link pe-4" aria-current="page" href="settings.php">Settings</a>
            </li>
            <!-- <form method="POST"> -->
                <button onclick="logoutFunction()" class="btn btn-outline-danger btn-sm px-3 rounded-pill" style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" type="button" name="logout">Logout</button>
                <script>
                    function logoutFunction(){
                        window.location="logout.php";
                    }

                    function goToMainFunction(){
                        window.location="index.php";
                    }

                    functin
                </script>
            <!-- </form> -->
            </ul>
            </div>
        </div>
    </nav>

    <!-- END CODE HERE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </body>
</html>