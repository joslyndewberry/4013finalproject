<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
while ($trainer = $trainers->fetch_assoc()) {
?>
  <div class="card">
    <img src="img.jpg" alt="John" style="width:100%">
    <h1><?php echo $trainer['trainer_name']; ?></h1>
    <p class="title">CEO & Founder, Example</p>
    <p>Trainer ID: <?php echo $trainer['trainer_id']; ?></p>
    <p>Trainer ID: <?php echo $trainer['hometown']; ?></p>
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <p><button>Edit</button></p>
</div>
<?php 
}
      ?>
