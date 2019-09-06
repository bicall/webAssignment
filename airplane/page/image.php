<!-- <section class="sectionbody">
  <div class="container">



  </div><br>
</section> -->
<?php
include 'config/connection.php';
// get data from db

$getblog = "SELECT * FROM `imageslider` ";
$resultgetblog = mysqli_query($con, $getblog) or die(mysqli_error($con));
	$row = $resultgetblog->fetch_assoc();
  $query = "SELECT * FROM `imageslider`";
  $result = mysqli_query($con, $query) or die(mysqli_error($con));
  ?>
<style media="screen">

  .site-section {
    padding: 3em 0; }
    @media (min-width: 768px) {
      .site-section {
        padding: 7em 0; } }
    .site-section.site-section-sm {
      padding: 4em 0; }
      .section-heading h2 {
        position: relative;
        display: inline-block;
        font-family: "Playfair Display";
        font-size: 40px; }
        .section-heading h2:before, .section-heading h2:after {
          content: "";
          position: absolute;
          bottom: 0;
          height: 1px;
          background: #000;
          left: 0;
          -webkit-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          transform: translateX(-50%); }
        .section-heading h2:before {
          width: 100px;
          bottom: -10px;
          left: 50%; }

      .section-heading.text-left h2:before, .section-heading.text-left h2:after {
        left: 0;
        -webkit-transform: translateX(0%);
        -ms-transform: translateX(0%);
        transform: translateX(0%); }
    </style>
<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <h2 class="text-center" style="color:black;">Our Gallery</h2>
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">

      </div>
    </div>
    <div class="row">
      <?php while($row = $result->fetch_assoc()): ?>
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="hotel-room text-center">
          <?php
          $str=$row['images'];
          $str2=substr($str,6);

           ?>
          <a href="#" class="d-block mb-0 thumbnail"><img src="admin/dashboard/<?php echo $str2; ?>" alt="Image" class="img-fluid"></a>
          <div class="hotel-room-body">
            <h3 class="heading mb-0"><a href="#"><?php echo $row['Title']; ?></a></h3>

          </div>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
    </div>
    </div>
