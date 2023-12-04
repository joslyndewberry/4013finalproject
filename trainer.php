<?php
require_once("util-db.php");
require_once("model/trainer.php");

$pageTitle = "Trainers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertTrainers($_POST['t_name'], $_POST['home'], $_POST['t_url'])) {
        echo '<div class="alert alert-secondary" role="alert">Trainer Added.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
      case "Edit":
      if (updateTrainers($_POST['t_name'],  $_POST['home'],  $_POST['t_url'], $_POST['t_id'])) {
        echo '<div class="alert alert-secondary" role="alert">Trainer Edited.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
      case "Delete":
      if (deleteTrainers($_POST['t_id'])) {
        echo '<div class="alert alert-secondary" role="alert">Trainer Removed.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
  }
}

$trainers = selectTrainers();
include "view/trainer.php";
include "view-footer.php"
?>
