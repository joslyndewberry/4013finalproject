<div class="buttonorder">
<?php
while ($type = $types->fetch_assoc()) {
?>
    <a target="_self" class="typesbutton" href="pokemon-by-type.php?id=<?php echo $type['type_id']; ?>"><?php echo $type['type_name']; ?></a>
<?php 
}
      ?>
</div>

