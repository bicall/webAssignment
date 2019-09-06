<?php
include '../../config/connection.php';
$result=$con->query("SELECT * FROM flights");



 ?>

<section class="manage">
  <div class="container-fluid">
    <h1>Manage Flights</h1>
    <br><br>

    <table class="table table-hover">
      <thead>
        <tr>
        <th>#</th>
        <th>Departure Date</th>
        <th>Departure Time</th>
        <th>Flight Duration</th>
        <th>Price</th>
        <th>Flight Name</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php

        while ($row = $result->fetch_assoc()):
          ?>
        <tr>
          <form class="form" action="page/process/update.php?id=<?=$row['id']; ?>" method="post" role="form">

            <td><?php echo $row['id']; ?>
              </td>

            <td><?php echo $row['departureDate']; ?>
              <div class="<?=$row['id'] ?>" style="display:none;">
                <input type="date" name="departureDate" value="" placeholder="" class="form-control">
              </div></td>

                <td><?php echo $row['departureTime']; ?>
                  <div class="<?=$row['id'] ?>" style="display:none;">
                    <input type="time" name="departureTime" value=""  class="form-control">
                  </div></td>

                  <td><?php echo $row['duration']; ?>
                    <div class="<?=$row['id'] ?>" style="display:none;">
                      <input type="timestamp" name="duration" value="" placeholder="Duration" class="form-control">
                    </div></td>

                    <td><?php echo $row['price']; ?>
                      <div class="<?=$row['id'] ?>" style="display:none;">
                        <input type="int" name="price" value="" placeholder="price" class="form-control">
                      </div></td>

                      <td><?php echo $row['flightName']; ?>
                      <div class="<?=$row['id'] ?>" style="display:none;">
                        <input type="text" name="flightName" value="" placeholder="flight name" class="form-control">
                      </div></td>

                      <td><input type="submit" name="submit" value="Done" class="<?= $row['id'] ?> btn btn-success" style="display:none;">
                    </form>
                     <button type="button" name="btn-change" value="Change" id="<?= $row['id'] ?>" class="btn btn-success"  onclick="showRow(<?= $row['id'] ?>)">Change</button>
                      </td>

        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</section>

<script>
function showRow(flightno){
    $("."+flightno).slideDown("slow");
    $("input #"+flightno).show();
    $("#"+flightno).hide();
}

</script>
