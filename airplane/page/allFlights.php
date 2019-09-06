
<?php 
include '../config/connection.php';

	$query = "SELECT * FROM `booking`";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));

 ?>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap3/js/bootstrap.min.js"></script>
 <div class="contents">
			<table class="table table-dark ">
			<thead>
				<tr>
					<th scope="col">I.D.</th>
					<th scope="col">Flying From</th>
					<th scope="col">Flying To</th>
					<th scope="col">Check In</th>
					<th scope="col">Travel Class</th>
					<th scope="col">Adults</th>
					<th scope="col">Children</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['flyingFrom']; ?></td>
					<td><?php echo $row['flyingTo']; ?></td>
					<td><?php echo $row['checkIn']; ?></td>
					<td><?php echo $row['travelClass']; ?></td>
					<td><?php echo $row['adults']; ?></td>
					<td><?php echo $row['children']; ?></td>
					
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
		<br style="line-height: 16;">
</div>
