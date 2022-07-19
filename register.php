<?php
    include "config/database.php";
    include "config/input_checking.php";

    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address1"] . $_POST["address2"];
        $contactNumber = $_POST["contactNumber"];
        $email = $_POST["email"];

        $requiredFields = array($username,$password,$fname,$lname,$address,$email,$contactNumber);

        if(emptyFields($requiredFields)){
            echo "<h1>There was a required field you left blank. Please check again before submitting.</h1>";
        }else{
            $conn = newConnection();

            $sqlQuery = "INSERT INTO customers_T (username, password, fname, lname, email_address, contact_number,address) VALUES ('$username', '$password', '$fname','$lname','$email', '$contactNumber','$address')";

            if($conn->query($sqlQuery) === TRUE){
                echo "<h1>You have registered successfully!</h1>";
                header("Location: index.php");
            }else {
                echo "Error: " . $sqlQuery . "<br>" . $conn->error;
                header("Location: register.php");
            }
            $conn->close();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>BetterPrints - Register</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">\

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/register-select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/register.css?v=2" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Sign Up</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                    <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="fname">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lname">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Re-type Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="retype">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address Line 1</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address1">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address Line 2</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address2">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="contactNumber">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="register">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/register-jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/register-select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/register.js"></script>

</body>

</html>
<!-- end document-->