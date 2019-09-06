<style type="text/css">
	
	.navbar {
    margin-top: 0px!Important;
    margin-bottom: 0px!Important;
}
</style>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Rainbow Airlines</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="icon" type="image/png" href="img/wallpaper.png"/> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap3/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap3/js/bootstrap.min.js"></script>
	
</head>
<body>
	
	<div class="bdy">
		
	</div>

	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Rainbow Airlines</a>
				<!-- <img src="img/wallpaper.png" height="50px" width="50px"> -->
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="?page=home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="?page=contact"><span class="glyphicon glyphicon-comment"></span> Contact us</a></li>
					<li><a href="?page=searchflight">Flight</a></li>
					<li><a href="?page=about">About Us</a></li>
					<li><a href="?page=image">Image Gallery</a></li>
					<li><a href="?page=travel">Travel Booking</a></li>
					
					
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Account <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  login</a></li>
							<li><a href="signup.php"><span class="glyphicon glyphicon-log-out"></span> Signup</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

		<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
				include 'page/'.$page.'.php';
			}
			else{
				include 'page/home.php';
        
			}
		 ?>
	

<footer class="page-footer font-small blue" style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #c7c4c4;
   font-size: 18px;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="index.php"> rainbowairline.com</a>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>
