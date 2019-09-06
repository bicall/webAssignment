<?php 
include '../../config/connection.php';
	$checkdate=$_GET['checkin'];
	 $departfrom=$_GET['flyingfrom'];
  	$arriveat=$_GET['flyingto'];
  	$travelclass=$_GET['travelclass'];
  	$adults=$_GET['adults'];
 	 $children=$_GET['children'];
 	 $acceptance=0;
	$query = "SELECT * FROM `flights` WHERE departureDate='$checkdate'";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	$count = mysqli_num_rows($result);
	if (isset($_POST['submit'])) {
	$statement="INSERT INTO booking(flyingFrom,flyingTo,checkIn,travelClass,adults,children,acceptance) VALUES ('".$departfrom."','".$arriveat."','".$checkdate."','".$travelclass."','".$adults."','".$children."','".$acceptance."')";
  	$query2=mysqli_query($con,$statement);
  	echo "Booked Successfully!";
	}
 ?>
 <link rel="stylesheet" type="text/css" href="../../bootstrap3/css/bootstrap.min.css">
 <div class="contents">
 <a href="../../?page=searchflight" class="btn btn-danger" class="btn btn-danger">Back</a><br><br>
 <?php 	if($count == 0){ echo "<p class='alert alert-danger'>No results found</p>";}?>
			<table class="table table-striped">
			<thead>
				<tr>
					<th>I.D.</th>
							
					<th>Flight name</th>					
					<th>Departure Date</th>
					<th>Departure Time</th>
					<th>Duration</th>
					<th>Price</th>					
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<form action="" method="POST" role="form">
					<td><?php echo $row['id'];?></td>					
					<td><?php echo $row['flightName']; ?></td>					
					<td><?php echo $row['departureDate']; ?></td>
					<td><?php echo $row['departureTime']; ?></td>					
					<td><?php echo $row['duration']; ?></td>
					<td><?php echo $row['price']; ?></td>					
					<td><input type="submit" class="btn btn-primary" name="submit" value="Book"></td>
				</form>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
		<br style="line-height: 25;">
</div>