<?php
require_once("util-db.php");
require_once("model/pokemon.php");

$pageTitle = "Pokemon";
include "view-header.php";
$pokemons = selectPokemon();
include "view/pokemon.php";
include "view-footer.php"
?>
