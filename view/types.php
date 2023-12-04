<div class="container">
<?php
while ($types = $types->fetch_assoc()) {
?>
  <div class="card">
    <div class= "column">
    <p><button class="edit"><?php echo $types['type_name']; ?></button></p>
    </div>
</div>
<?php 
}
      ?>
</div>

