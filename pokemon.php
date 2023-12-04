<?php
require_once("util-db.php");
require_once("model/pokemon.php");

$pageTitle = "Pokemon";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertPokemon($_POST['p_name'], $_POST['p_url'], $_POST['evol'], $_POST['hp'], $_POST['attk'], $_POST['def'], $_POST['s_attk'], $_POST['s_def'], $_POST['spd'], $_POST['total'])) {
        echo '<div class="alert alert-secondary" role="alert">Pokemon Added.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
      case "Edit":
      if (updatePokemon($_POST['p_name'], $_POST['p_url'], $_POST['evol'], $_POST['hp'], $_POST['attk'], $_POST['def'], $_POST['s_attk'], $_POST['s_def'], $_POST['spd'], $_POST['total'], $_POST['p_id'])) {
        echo '<div class="alert alert-secondary" role="alert">Pokemon Edited.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
      case "Delete":
      if (deletePokemon($_POST['p_id'])) {
        echo '<div class="alert alert-secondary" role="alert">Pokemon Removed.</div>';
      } else {
        '<div class="alert alert-danger" role="alert">Error</div>"';
      }
      break;
  }
}

$pokemons = selectPokemon();
include "view/pokemon.php";
include "view-footer.php"
?>
