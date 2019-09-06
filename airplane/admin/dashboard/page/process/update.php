<?php
include '../../../../config/connection.php';
$id=$_GET['id'];
$getstatement="SELECT * FROM flights WHERE id='$id'";
$getquery=mysqli_query($con,$getstatement);
$row=$getquery->fetch_assoc();

if (isset($_POST['submit'])) {
  $ddate=$_POST['departureDate'];
  $flightno=$_POST['departureTime'];
  $departfrom=$_POST['duration'];
  $arriveat=$_POST['price'];
  $adate=$_POST['flightName'];
  $statement="UPDATE flights SET departureTime='$ddate', departureTime='$flightno', duration='$departfrom', price='$arriveat', flightName='$adate' WHERE id=$id";
  $query2=mysqli_query($con,$statement);
  header('location:../../dashboard.php?page=manageflights');
}
 ?>
