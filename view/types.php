<div class="container">
<?php
while ($types = $types->fetch_assoc()) {
?>
    <p><button class="edit"><?php echo $types['type_name']; ?></button></p>
<?php 
}
      ?>
</div>

