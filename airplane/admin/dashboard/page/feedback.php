<?php
include '../../config/connection.php';
$result=$con->query("SELECT * FROM feedback");
 ?>

<section>
  <div class="container-fluid">
    <h1>Feedback List</h1>
    <br><br>

    <table class="table table-strived">
      <thead>
        <tr>
        <th>#</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Message</th>
        
        
      </tr>
      </thead>
      <tbody>
        <?php
        while ($row = $result->fetch_assoc()):
          ?>
        <tr>
          <td><?= $row['id'] ?></td>

          <td><?= $row['name'] ?></td>

          <td><?= $row['email'] ?></td>

          <td><?= $row['message'] ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</section>
