<div class="container">
<?php
while ($type = $types->fetch_assoc()) {
?>
    <p><button type="button"><?php echo $types['type_name']; ?></button></p>
<?php 
}
      ?>
</div>

