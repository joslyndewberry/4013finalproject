<div class="container">
<?php
while ($type = $types->fetch_assoc()) {
?>
    <form class="pokemonbutton" action="pokemon.php">
        <input type="submit" value=<?php echo $type['type_name']; ?> />
    </form>
<?php 
}
      ?>
</div>

