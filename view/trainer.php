
<div class="container">
<?php
while ($trainer = $trainers->fetch_assoc()) {
?>
  <div class="card">
    <div class= "row">
      <img class="trainer_image" src="<?php echo $trainer['trainer_url']; ?>" style="width:100%">
    </div>
    <div class= "column">
    <p><?php echo $trainer['trainer_name']; ?><p>
    <p>Trainer ID: <?php echo $trainer['trainer_id']; ?></p>
    <p>Hometown: <?php echo $trainer['hometown']; ?></p>
    <a href="#"><i class="fa fa-dribbble"></i></a>
    </div>
    <p><button class="edit">Edit</button></p>
</div>
<?php 
}
      ?>
</div>
