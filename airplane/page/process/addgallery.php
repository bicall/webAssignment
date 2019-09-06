 
<?php 
include '../../config/connection.php';
	if(isset($_POST['submit'])){
		
		$detail = $_POST['detail'];
		$title = $_POST['title'];
		

		$image_name=$_FILES['photo']['name'];
       // $temp = explode(".", $image_name);
       //  $newfilename = sha1(time()) . '.' . $temp[1];
       $imagepath="../../images/".$image_name;
      $sql = "INSERT INTO imageslider (Title, description, images )
		VALUES ('$title', '$detail', '$imagepath')";
		mysqli_query($con, $sql);
        $isUploaded=move_uploaded_file($_FILES['photo']['tmp_name'],$imagepath);

		if($isUploaded){

       
		
			header("location: ../../index.php?page=imggallery&&message=add-success");
		}
		
     else{

       echo 'something went wrong'; 
     }
  
}
 ?>
<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<h3>Add Blogs</h3>
					<form action="" method="POST" role="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" class="form-control" id="" name="title" required>
						</div>
						<div class="form-group">
							<label for="">photo</label>
							<input type="file" class="form-control" id="" name="photo" required>
						</div>
						<div class="form-group">
							<label for="">Detail</label>
							<textarea type="text" class="form-control" id="" name="detail" required></textarea>
						</div>
					
						
					
						<input type="submit" class="btn btn-primary" name="submit" value="Add">
					</form>
				</div>
			</div>
		</div>