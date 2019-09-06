 
<?php 
include 'config/connection.php';
	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
      $sql = "INSERT INTO feedback (name, email, message )
		VALUES ('$name', '$email', '$message')";
		
		$connect = mysqli_query($con, $sql);      
		
			header("location: index.php?page=contact&&message=feedback-delivered");
	
  
}

?>
<div class="row">
			<div class="col-md-8 mr-2 ml-2 homecontent">
				<h2>Drop a message to Rainbow Airlines</h2><br><br>
				<form action="" method="POST" role="form">
					<div class="form-group">
						<label for="" style="color: #253BA8">Full Name</label>
						<input type="text" class="form-control" id="" placeholder="Your Full Name" name="name" required>
					</div>
					<div class="form-group">
						<label for="" style="color: #253BA8">Email Address</label>
						<input type="text" class="form-control" id="" placeholder="Your Email Address" name="email">
					</div>
					<div class="form-group">
						<label for="" style="color: #253BA8">Message</label>
						<textarea class="form-control" id="" name="message"></textarea>
					</div>
									
					<button type="submit" class="btn btn-primary" name="submit">Send</button>
				</form>
			</div>
		</div>