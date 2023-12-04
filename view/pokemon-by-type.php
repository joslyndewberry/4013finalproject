<div class="buttonorder">
<?php
while ($type = $types->fetch_assoc()) {
?>
    <a target="_self" class="typesbutton" href="pokemon-by-type.php?id=<?php echo $type['type_id']; ?>"><?php echo $type['type_name']; ?></a>
<?php 
}
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
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <p><button class="edit">Stats</button></p>
    </div>
</div>
<?php 
}
      ?>
</div>
