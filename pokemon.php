<?php
require_once("util-db.php");
require_once("model/pokemon.php");

$pageTitle = "Pokemon";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
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
