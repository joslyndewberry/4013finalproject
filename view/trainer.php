<div class="modify">
  <button class="addtrainer" type="button">Add a Trainer</button>
</div>

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
      <p><a target="_blank" href="pokemon-by-trainer.php?id=<?php echo $trainer['trainer_id']; ?>">
        <button class="trainerpokemon">Pokemon</button>
    </a></p>
    <p><button class="edit">Edit</button></p>
        <p><input type="hidden" name="trainer_id" value="<?php echo $trainer['trainer_id']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="edit" onclick="return confirm('Are you sure?');">
        </button>
      </p>
    <p><button class="edit">Delete</button></p>
    </div>
</div>
<?php 
}
      ?>
</div>
