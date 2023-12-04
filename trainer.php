<?php
require_once("util-db.php");
require_once("model/trainer.php");

$pageTitle = "Trainers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertTrainers($_POST['t_name'], $_POST['home'], $_POST['t_url'])) {
          echo '<div class="alert success">
             <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                Trainer Added.
            </div>';
       } else {
          echo '<div class="alert danger">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                Error
            </div>';
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
          <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            Trainer Removed.
        </div>';
       } else {
          echo '<div class="alert danger">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                Error
            </div>';
            }
      break;
  }
}

$trainers = selectTrainers();
include "view/trainer.php";
include "view-footer.php"
?>
