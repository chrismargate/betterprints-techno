<?php
    include "top_nav.php";
    include "config/input_checking.php";
    include "config/database.php";
    
    if(isset($_POST["save"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $contact_number = $_POST["contact_number"];
        $email_address = $_POST["email_address"];

        $changeField = [
        "username" => $username,
        "password" => $password,
        "fname" => $fname,
        "lname" => $lname,
        "address" => $address,
        "email_address" => $email_address,
        "contact_number" => $contact_number];

        // print_r($changeField);
        // print_r($_SESSION[1]);

        // o $changeField;

        // print_r($_SESSION);

        foreach($changeField as $fieldKey => $fieldValue){
            if($fieldValue == NULL){
                $changeField[$fieldKey] = $_SESSION[$fieldKey];
                // echo $fieldKey;
                // echo $fieldValue;
                continue;
            }
        }

        $changeUsername = $changeField['username'];
        $changePassword = $changeField['password'];
        $changeFname = $changeField['fname'];
        $changeLname = $changeField['lname'];
        $changeEmail = $changeField['email_address'];
        $changeAddress = $changeField['address'];
        $changeContact = $changeField['contact_number'];
        $sessionID = $_SESSION['customer_id'];

        $conn = newConnection();

        $sqlQuery = "UPDATE customers_T SET username = '$changeUsername', password = '$changePassword', fname = '$changeFname', lname = '$changeLname', contact_number = '$changeContact', address = '$changeAddress', email_address = '$changeEmail' WHERE customers_T.customer_id = '$sessionID'";

        if($conn->query($sqlQuery) === TRUE){
            $conn->close();
            $userRecord = retrieveRecord($changeUsername);
            $_SESSION['customer_id'] = $userRecord['customer_id'];
            $_SESSION['username'] = $userRecord['username'];
            $_SESSION['password'] = $userRecord['password'];
            $_SESSION['fname'] = $userRecord['fname'];
            $_SESSION['lname'] = $userRecord['lname'];
            $_SESSION['address'] = $userRecord['address'];
            $_SESSION['contact_number'] = $userRecord['contact_number'];
            $_SESSION['email_address'] = $userRecord['email_address'];
            header("Location: settings.php");
        }else {
            echo "Error: " . $sqlQuery . "<br>" . $conn->error;
            $conn->close();
            header("Location: settings.php");
        }
        $conn->close();
        
    }
    elseif(isset($_POST['cancel'])){
        header("Location: dashboard.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BetterPrints - Settings</title>

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
                                    <h2 class="text-uppercase text-center mb-5">Settings</h2>
                                    <form method="POST">
                                        
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Username</label>
                                        <input type="text" placeholder="<?php echo $_SESSION['username'] ?>" id="form3Example4cg" class="form-control form-control-lg" name="username"/>
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Password</label>
                                        <input type="password" id="form3Example4cdg" placeholder="********" class="form-control form-control-lg" name="password"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">First Name</label>
                                        <input type="text" id="form3Example4cdg" placeholder="<?php echo $_SESSION['fname'] ?>"  class="form-control form-control-lg" name="fname"/>
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Last Name</label>
                                        <input type="text" id="form3Example4cdg" placeholder="<?php echo $_SESSION['lname'] ?>" class="form-control form-control-lg" name="lname"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg">Email Address</label>
                                        <input type="text" id="form3Example1cg" placeholder="<?php echo $_SESSION['email_address'] ?>"  class="form-control form-control-lg" name="email_address"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Address</label>
                                        <input type="text" id="form3Example3cg" placeholder="<?php echo $_SESSION['address'] ?>"  class="form-control form-control-lg" name="address"/>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Contact Number</label>
                                        <input type="text" id="form3Example4cdg" placeholder="<?php echo $_SESSION['contact_number'] ?>"  class="form-control form-control-lg" name="contact_number"/>
                                        </div>
    
                                        <div class="form-outline mb-4" style="position: relative;">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" style="background: #71c55d; color: #ffff;"  name="save">Save Changes</button>
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" style="background: #71c55d; color: #ffff;"  name="cancel">Cancel</button>
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