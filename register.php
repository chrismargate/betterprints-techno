<?php

    include "config/database.php";
    include "config/input_checking.php";

    if(isset($_POST["register"])){
        echo "<h1>Entered the post function</h1>";
        $username = $_POST["username"];
        $password = $_POST["password"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $contactNumber = $_POST["contactNumber"];
        $email = $_POST["email"];

        $requiredFields = array($username,$password,$fname,$lname,$address,$email,$contactNumber);
        print_r($requiredFields);

        if(emptyFields($requiredFields)){
            echo "<h1>There was a required field you left blank. Please check again before submitting.</h1>";
        }else{

            $conn = newConnection();

            $sqlQuery = "INSERT INTO customers_T (username, password, fname, lname, email_address, contact_number,address) VALUES ('$username', '$password', '$fname','$lname','$email', '$contactNumber','$address')";

            if($conn->query($sqlQuery) === TRUE){
                echo "<h1>You have registered successfully!</h1>";
                // header("Location: index.php");
            }else {
                echo "Error: " . $sqlQuery . "<br>" . $conn->error;
            }
            echo "<h1>Hello, World</h1>";
            $conn->close();
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
                                    <h2 class="text-uppercase text-center mb-5">Register</h2>
                                    <form action="register.php" method="POST">
                                        
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Email Address</label>
                                        <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="email"/>
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Username</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" name="username"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Password</label>
                                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="password"/>
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Re-type Password</label>
                                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="repassword"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg">First Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="fname"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Last Name</label>
                                        <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="lname"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Address</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" name="address"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Contact Number</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" name="contactNumber"/>
                                        </div>
    
                                        <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                        </div>
    
                                        <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="register">Register</button>
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