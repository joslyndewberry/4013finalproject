<div class="buttonorder">
<?php
while ($type = $types->fetch_assoc()) {
?>
    <a target="_blank" class="typesbutton" href="pokemon-by-type.php?id=<?php echo $pokemon['type_id']; ?>"><?php echo $type['type_name']; ?></a>
<?php 
}
      ?>
</div>

