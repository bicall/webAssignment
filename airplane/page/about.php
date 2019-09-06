<?php
require_once('config/connection.php');

$select1 = $con->query("SELECT * FROM aboutus WHERE id='1'");
$select2 = $con->query("SELECT * FROM aboutus WHERE id='2'");
$select3 = $con->query("SELECT * FROM aboutus WHERE id='3'");
while($row = $select1->fetch_assoc()){
  $content1 = $row['Description'];
}
while($row = $select2->fetch_assoc()){
  $content2 = $row['Description'];
}
while($row = $select3->fetch_assoc()){
  $content3 = $row['Description'];
}
?>
<section class="sectionbody">
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <h1>About Us</h1><br>
          <h4><?=$content1; ?></h4>
          <h4><?=$content2; ?></h4>
          <h4><?=$content3; ?></h4>
          </h4>
        </div>
      </div>
    </div>
    <br>     
</section>
<br>
