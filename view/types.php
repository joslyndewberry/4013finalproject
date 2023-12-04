<div class="container">
<?php
while ($type = $types->fetch_assoc()) {
?>
    <a href="pokemon.php">
        <button class= "typesbutton"><button type="button"><?php echo $type['type_name']; ?></button>
    </a>
<?php 
}
      ?>
</div>

