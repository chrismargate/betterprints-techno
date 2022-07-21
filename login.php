<?php
    include "config/database.php";
    include "config/input_checking.php";

	session_start();
    if(isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        $requiredFields = array($username,$password);

        if(existingUsername($username)){
			if(correctPassword($username,$password)){
				$userRecord = retrieveRecord($username);
			    $_SESSION['customer_id'] = $userRecord['customer_id'];
				$_SESSION['username'] = $userRecord['username'];
				$_SESSION['password'] = $userRecord['password'];
				$_SESSION['fname'] = $userRecord['fname'];
				$_SESSION['lname'] = $userRecord['lname'];
				$_SESSION['address'] = $userRecord['address'];
				$_SESSION['contact_number'] = $userRecord['contact_number'];
				$_SESSION['email_address'] = $userRecord['email_address'];
				header("Location: index.php");
			}else{

				echo "<h1>Incorrect password. Please try again!</h1>";
			}

		}else{
	
			echo "<h1>Please enter a valid username</h1>";

            // $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);



            // $conn = newConnection();
            // $sqlQuery = "SELECT * FROM customers_T WHERE username = '$username'";
            // $sqlResults = mysqli_query($conn,$sqlQuery);
            // $arrayResult = mysqli_fetch_all($sqlResults, MYSQLI_ASSOC)[0];

            // if(mysqli_num_rows($sqlResults) > 0){
            //     echo "<h1>Exists</h1>";
			// 	$_SESSION['username'] = $username;
			// 	header("Location: index.php");
            // }



			// echo "something";
            
            // if($arrayResult)
            // if($conn->query($sqlQuery) === TRUE){
            //     echo "<h1>You have registered successfully!</h1>";
            //     header("Location: index.php");
            // }else {
            //     echo "Error: " . $sqlQuery . "<br>" . $conn->error;
            //   }
        }

    }

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>BetterPrints - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/login.css?v=2">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<!-- <div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div> -->
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">Sign In</h3>
		      		</div>
		      	</div>
						<form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="login-form" method="POST">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="username" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
	            </div>
	            <div class="form-group d-flex align-items-center">
	            	<div class="w-100">
	            		<label class="checkbox-wrap checkbox-primary mb-0">Keep me logged in
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-100 d-flex justify-content-end">
		            	<button type="submit" class="btn btn-primary rounded submit" onclick="showModal()" name="login">Login</button>
	            	</div>
	            </div>
	            <div class="form-group mt-4">
								<div class="w-100 text-center">
									<p class="mb-1">Don't have an account? <a href="register.php">Sign Up</a></p>
									<p><a href="progress_page.php">Forgot Password</a></p>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<!-- MODAL AND TOASTS -->
	<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="toast" id="username-error-toast" role="alert" aria-atomic="true" data-autohide="false" style="position: fixed; left: 50%; transform: translate(-50%, 0px); z-index: 9999;">
            <div class="toast-header">
                <strong class="mr-auto text-primary">Login Error</strong>
            </div>
            <div class="toast-body">
                Please enter a valid username.
            </div>
        </div>
        <div class="toast" id="incorrect-error-toast" role="alert" aria-atomic="true" data-autohide="false" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <strong class="mr-auto text-primary">Login Error</strong>
            </div>
            <div class="toast-body">
                Your password was incorrect. Please try again.
            </div>
        </div>
    </div>
    
    
    <div class="modal fade" id="reg-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log-in successful</h5>
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="modal-body">
                You have logged in successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Proceed</button>
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            </div>
            </div>
        </div>
    </div>

	<script>
	
	function showModal() {
		$('#reg-modal').modal('show');
	}

    function showUsernameToast() {
        $('#username-error-toast').toast('show');
    }
    function showIncorrectToast() {
        $('#incorrect-error-toast').toast('show');
    }
	</script>


	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> -->
    <script src="assets/js/login.js"></script>

	</body>
</html>

