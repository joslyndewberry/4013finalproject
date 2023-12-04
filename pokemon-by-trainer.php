<?php
require_once("util-db.php");
require_once("model/pokemon-by-trainer.php");

$pageTitle = "Pokemon Types";
include "view-header.php";
$pokemons = selectPokemonByTrainer($_GET['id']);
include "view/pokemon-by-trainer.php";
include "view-footer.php"
?>
