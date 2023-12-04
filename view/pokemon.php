<div class="modify">
  <?php
    Include "view/pokemon-newform.php";
    ?>
</div>


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
     <p><a target="_blank" href="pokemon-chart.php?id=<?php echo $pokemon['pokemon_id']; ?>">
        <button class="edit">Stats</button>
    </a></p>
     <p> <form method="post" action=""><input type="hidden" name="p_id" value="<?php echo $pokemon['pokemon_id']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="edit" onclick="return confirm('Remove Pokemon from System?');">Delete</button>
        </form>
      </p>
    </div>
</div>
<?php 
}
      ?>
</div>
