<div class="buttonorder">
<?php
while ($type = $types->fetch_assoc()) {
?>
    <a target="_blank" class="typesbutton" href="pokemon.php"><?php echo $type['type_name']; ?></a>
<?php 
}
      ?>
</div>

