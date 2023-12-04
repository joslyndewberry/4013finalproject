<?php
require_once("util-db.php");
require_once("model/pokemon-by-trainer.php");

$pageTitle = "Pokemon Types";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertPokemon($_POST['t_id'], $_POST['p_id'], $_POST['poke'])) {
         echo '<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                Pokemon Caught
            </div>';
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
