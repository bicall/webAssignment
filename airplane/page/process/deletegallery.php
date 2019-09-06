<?php 
	include("../../config/connection.php");
	$id = $_GET['id'];
	//get photo name to delete
	$getphotostatement = "SELECT * FROM `imageslider` WHERE id='$id'";
	$resultgetphoto = mysqli_query($con, $getphotostatement) or die(mysqli_error($con));
	$row = $resultgetphoto->fetch_assoc();
	$unlink=unlink('../../images'.$row['images']);


	//delete from db

	$statement = "DELETE FROM `imageslider` WHERE id='$id'";
	$result = mysqli_query($con, $statement) or die(mysqli_error($con));
	header('Location: ../../index.php?page=imggallery&&message=delete-success');

 ?>