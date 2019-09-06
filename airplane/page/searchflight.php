<?php
require_once('config/connection.php');
$result=$con->query("SELECT * FROM flights");

if (isset($_POST['submit'])) {
	$acceptance=0;
  $departfrom=$_POST['flyingfrom'];
  $arriveat=$_POST['flyingto'];
  $departuredate=$_POST['checkin'];
  $travelclass=$_POST['travelclass'];
  $adults=$_POST['adults'];
  $children=$_POST['children'];
 
  header('location: page/process/bookFlight.php?flyingfrom='.$departfrom.'&&flyingto='.$arriveat.'&&checkin='.$departuredate.'&&travelclass='.$travelclass.'&&adults='.$adults.'&&children='.$children);
}
 ?>

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<style type="text/css">
#booking {
	font-family: 'Montserrat', sans-serif;
	background-image: url("img/images.png");
	background-repeat: no-repeat;
background-size: cover;
margin-top: 0%;
}

.booking-form {
	padding: 0px 40px 40px;
	max-width: 642px;
	width: 100%;
	margin: auto;
	background: #2d343b;
}

.booking-form .form-header {
	padding: 20px;
	margin: 0px -40px 20px;
	background: #1a1f24;
}

.booking-form .form-header h1 {
	font-weight: 700;
	text-transform: capitalize;
	font-size: 38px;
	margin: 0;
	color: #fff;
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 20px;
}

.booking-form .form-control {
	background-color: #1c2126;
	height: 50px;
	padding: 5px 20px 0px;
	border: none;
	border-radius: 0px;
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #fff;
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 0px;
	bottom: 0px;
	width: 24px;
	text-align: center;
	pointer-events: none;
	height: 50px;
	line-height: 50px;
	color: #2d343b;
	font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form .form-label {
	position: absolute;
	top: 15px;
	left: 20px;
	text-transform: uppercase;
	color: #2d343b;
	font-weight: 700;
	line-height: 24px;
	height: 24px;
	font-size: 16px;
	pointer-events: none;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}

.booking-form .form-group.input-not-empty .form-label {
	top: -10px;
	color: #fff;
	font-size: 14px;
}

.booking-form .form-group:not( .input-not-empty) .form-control:not( :focus) {
	color: transparent;
}

.booking-form .form-group .form-control:focus+.form-label {
	top: -10px;
	color: #fff;
	font-size: 14px;
}

.booking-form .form-checkbox input {
	position: absolute !important;
	margin-left: -9999px !important;
	visibility: hidden !important;
}

.booking-form .form-checkbox label {
	position: relative;
	padding-top: 4px;
	padding-left: 30px;
	color: #fff;
	font-weight: 700;
}

.booking-form .form-checkbox label+label {
	margin-left: 15px;
}

.booking-form .form-checkbox input+span {
	position: absolute;
	left: 2px;
	top: 4px;
	width: 20px;
	height: 20px;
	border: 2px solid #1c2126;
	background: #1c2126;
	border-radius: 50%;
}

.booking-form .form-checkbox input:checked+span {
	border-color: #f7c411;
}

.booking-form .form-checkbox input+span:after {
	content: '';
	position: absolute;
	top: 50%;
	left: 50%;
	width: 0px;
	height: 0px;
	border-radius: 50%;
	background-color: #f7c411;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}

.booking-form .form-checkbox input:not(:checked)+span:after {
	opacity: 0;
}

.booking-form .form-checkbox input:checked+span:after {
	opacity: 1;
	width: 10px;
	height: 10px;
}

.booking-form .submit-btn {
	color: #1c2126;
	background-color: #f7c411;
	font-weight: 700;
	height: 50px;
	border: none;
	padding: 0px 50px;
}
</style>
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book Your Flight</h1>
						</div>
						<form action="" method="POST" role="form">
							<div style="color: white;">
								<h4>One Way</h4>
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="flyingfrom" required="">
								<span class="form-label">Flying from</span>
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="flyingto" required>
								<span class="form-label">Flying to</span>
							</div>
							<div class="row">
								<div class="col-md-9">
									<div class="form-group">
										<input class="form-control" type="date" name="checkin" required>
										<span class="form-label">Check In</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select name="travelclass" class="form-control">
											<option>Economy class</option>
											<option>Business class</option>
											<option>First class</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Travel class</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select name="adults" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select name="children" class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<input type="submit" name="submit" class="submit-btn" value="Check Availability">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>