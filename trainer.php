<?php
require_once("util-db.php");
require_once("model/trainer.php");

$pageTitle = "Trainers";
include "view-header.php";
$trainers = selectTrainers();

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertTrainers($_POST['trainer_name'], $_POST['hometown'], $_POST['trainer_url'])) {
        echo '<div class="alert alert-secondary" role="alert">Trainer Added.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
      case "Edit":
      if (updateTrainers($_POST['trainer_name'],  $_POST['hometown'],  $_POST['trainer_url'], $_POST['trainer_id'])) {
        echo '<div class="alert alert-secondary" role="alert">Trainer Edited.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
        case "Delete":
      if (deleteTrainers($_POST['trainer_id'])) {
        echo '<div class="alert alert-secondary" role="alert">Trainer Removed.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
  }
}

include "view/trainer.php";
include "view-footer.php"
?>
