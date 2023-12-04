<div class="container">
<?php
while ($types = $types->fetch_assoc()) {
?>
    <p><button type="button"><?php echo $types['type_name']; ?></button></p>
<?php 
}
      ?>
</div>

