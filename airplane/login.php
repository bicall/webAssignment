<?php 
include 'config/connection.php';
if (isset($_POST['submit'])) {
	$condition1=0;
	$condition2=0;
	$username=$_POST['username'];
	$password=$_POST['pass'];
	$enc_password=sha1($password);
	$statement = "SELECT * FROM `adminlogin` WHERE username='".$username."' and password='".$password."'";
	$query= mysqli_query($con,$statement);
	$count = mysqli_num_rows($query);
	if($count >= 1) {
		$condition1=1;
		
	}
	$statement1 = "SELECT * FROM `userlogin` WHERE username='".$username."' and password='".$enc_password."'";
	$query1= mysqli_query($con,$statement1);
	$count1 = mysqli_num_rows($query1);
	if($count1 >= 1) {
		$condition2=1;
	}

	if ($condition1==1) {
		$_SESSION['admin'] = $username;
		header("location: admin/dashboard/dashboard.php");
	}
	elseif ($condition2==1) {
		$_SESSION['user'] = $username;
		header("location: index.php");  
		// index.php?page=searchflight
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utillogin.css">
	<link rel="stylesheet" type="text/css" href="css/mainlogin.css">
<!--===============================================================================================-->
</head>
<body> 
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/login.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="POST" role="form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-30 p-t-20">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="submit"  value="Log In">

					</div>
					</form>
					<div class="text-center p-t-5">
						
						<a href="signup.php" class="txt1">Don't have an account! Sign Up</a>
						<button class="btn btn-default m-t-5" style="background-color: #D9E832;">
								<a href="index.php">Return Page</a>
					</button>
					</div>
					
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>