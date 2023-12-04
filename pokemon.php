<?php
require_once("util-db.php");
require_once("model/pokemon.php");

$pageTitle = "Pokemon";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertPokemon($_POST['t_id'], $_POST['p_name'], $_POST['p_url'], $_POST['evol'], $_POST['hp'], $_POST['atk'], $_POST['def'], $_POST['sp_atk'], $_POST['sp_def'], $_POST['spd'], $_POST['total'])) {
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
      case "Delete":
      if (deletePokemon($_POST['p_id'])) {
        echo '<div class="alert secondary">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                Pokemon Removed.
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

$pokemons = selectPokemon();
include "view/pokemon.php";
include "view-footer.php"
?>
