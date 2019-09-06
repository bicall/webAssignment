 <?php 
include '../../config/connection.php';

	$query = "SELECT * FROM `imageslider`";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));

 ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Manage Blogs</h4>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="page/process/addgallery.php" class="btn btn-primary pull-right">Add Blog</a>
		</div>
	</div>
	<div class="row">
		<?php
						if(isset($_GET['message'])):
							$message = $_GET['message'];
							if($message == 'add-success'):
					?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Success</strong> Data Add Success.
								</div>
					<?php endif; ?>
					<?php if($message == 'delete-success'):?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Success</strong> Delete Success.
						</div>
					<?php endif; ?>
						
					
					
					<?php endif; ?>	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Photo</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['Title']; ?></td>
					<?php 
					$str=$row['images'];
					$str2=substr($str,6);
					 ?>
					<td><img src="<?php echo $str2 ?>" width="150"></td>
					<td><?php echo $row['description']; ?></td>
					<th><a href="page/process/deletegallery.php?id=<?php echo $row['id']; ?>">Delete</a> || <a href="page/process/editgallery.php?id=<?php echo $row['id']; ?>">Edit</a></th>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>