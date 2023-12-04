<?php
require_once("util-db.php");
require_once("model/pokemon-by-trainer.php");

$pageTitle = "Pokemon Types";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
case "Add":
    if (insertPokemon($_POST['t_id'], $_POST['p_id'], $_POST['poke'])) {
          echo '<div class="alert success">
              <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                Pokemon Caught
                </div>';
          } else {
           echo '<div class="alert danger">
              <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                  Error
              </div>';
            }
      break;
  case "Delete":
      if (deletePokemonFromTrainer($_POST['c_id'])) {
          echo '<div class="alert secondary">
              <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                  Pokemon Released from Trainer.
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

$pokemons = selectPokemonByTrainer($_GET['id']);
include "view/pokemon-by-trainer.php";
include "view-footer.php"
?>
