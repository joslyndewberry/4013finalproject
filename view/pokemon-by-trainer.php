<div class="container">
<?php
while ($pokemon = $pokemons->fetch_assoc()) {
?>
  <div class="card">
    <div class= "row">
      <img class="trainer_image" src="<?php echo $pokemon['image_url']; ?>" style="width:100%">
    </div>
    <div class= "column">
    <p><?php echo $pokemon['pokemon_name']; ?><p>
    <p>Pokemon ID: <?php echo $pokemon['pokemon_id']; ?></p>
    <p>Evolution: <?php echo $pokemon['evolution']; ?></p>
    <p>Type: <?php echo $pokemon['type_name']; ?></p>
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <p><button class="edit">Stats</button></p>
    <p><button class="edit">Edit</button></p>
      <p> <form method="post" action=""><input type="hidden" name="t_id" value="<?php echo $pokemon['pokemon_id']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="edit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
      </p>
    </div>
</div>
<?php 
}
      ?>
</div>
