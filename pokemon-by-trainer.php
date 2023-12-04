<?php
require_once("util-db.php");
require_once("model/pokemon-by-trainer.php");

$pageTitle = "Pokemon Types";
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
      case "Delete":
      if (deletePokemonFromTrainer($_POST['c_id'])) {
        echo '<div class="alert alert-secondary" role="alert">Pokemon Released from Trainer.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
  }
}

$pokemons = selectPokemonByTrainer($_GET['id']);
include "view/pokemon-by-trainer.php";
include "view-footer.php"
?>
