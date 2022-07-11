<?php
    include "config/database.php";

    if(isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        $requiredFields = array($username,$password);

        if(emptyFields($requiredFields)){
            echo "<h1>There was a required field you left blank. Please check again before submitting.</h1>";
        }else{

            // $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

            $sqlQuery = "SELECT * FROM customers_t WHERE username = '$username'";
            $sqlResults = mysqli_query($sqlQuery,$conn);
            $arrayResult = mysqli_fetch_all($sqlResults)

            // echo $sqlQuery;

            if($conn->query($sqlQuery) === TRUE){
                echo "<h1>You have registered successfully!</h1>";
                header("Location: index.php");
            }else {
                echo "Error: " . $sqlQuery . "<br>" . $conn->error;
              }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BetterPrints </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="assets/css/sample.css"/> -->
    </head>
    <body>
        <section class="vh-100 bg-image">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">LOGIN</h2>
                                    <form action="register.php" method="POST">
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Username</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" name="username"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Password</label>
                                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="password"/>
                                        </div>
    
                                        <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="login">Login</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END CODE HERE -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <!-- <script src="assets/js/boostrap.js"></script> -->
    </body>
</html>