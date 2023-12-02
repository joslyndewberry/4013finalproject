<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Trainer ID</th>
      <th>Name</th>
      <th>Hometown</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($trainer = $trainers->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $trainer['trainer_id']; ?></td>
    <td><?php echo $trainer['trainer_name']; ?></td>
    <td><?php echo $trainer['hometown']; ?></td>
  </tr>
<?php 
}
      ?>
    </tbody>
  </table>
</div>
