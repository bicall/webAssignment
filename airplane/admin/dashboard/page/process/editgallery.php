<?php
// get data from db
include '../../../../config/connection.php';
$id = $_GET['id'];
$getblog = "SELECT * FROM `imageslider` WHERE id = '$id'";
$resultgetblog = mysqli_query($con, $getblog) or die(mysqli_error($con));
	$row = $resultgetblog->fetch_assoc();

	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$detail = $_POST['detail'];
		
		$photo = $_FILES['photo'];
		$id = $_GET['id'];

			if($_FILES['photo']['name']){
			$image_name=$_FILES['photo']['name'];
       		// $temp = explode(".", $image_name);
        	// $newfilename = sha1(time()) . '.' . $temp[1];
       		$imagepath="images/".$image_name;
        	$isUploaded=move_uploaded_file($_FILES["photo"]["tmp_name"],$imagepath);


	        $sql = "UPDATE `imageslider` SET Title='$title', description='$detail', images='$imagepath' WHERE id=$id";
			// die($sql);
	        mysqli_query($con,$sql);
		

		header("location: ../../dashboard.php?page=imggallery&&message=edit-success");
			}
			else{
				$sql = "UPDATE `imageslider` SET Title='$title', description='$detail' WHERE id=$id";
			// die($sql);
	        mysqli_query($con,$sql);
		

		header("location: ../../dashboard.php?page=imggallery&&message=edit-success");
			}
			
			

}
 ?>
 <link rel="stylesheet" type="text/css" href="../../../../bootstrap3/css/bootstrap.min.css">
<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<h3>Edit Blogs</h3>
					<form action="" method="POST" role="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" class="form-control" id="" name="title" placeholder ="<?php echo $row['Title']; ?>">
						</div>
						<div class="form-group">
							<label for="">photo</label>
							<input type="file" class="form-control" id="">
							<img src='<?php echo $row["images"]; ?>' style="height: 80px; ">
						</div>
						<div class="form-group">
							<label for="">Detail</label>
							<textarea type="text" class="form-control" id="" name="detail" placeholder="<?php echo $row['description']; ?>">  </textarea>
							
						</div>
					
						
					
						<input type="submit" class="btn btn-primary" name="submit" value="Edit">
					</form>
				</div>
			</div>
		</div>