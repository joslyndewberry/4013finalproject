<?php
require_once("util-db.php");
require_once("model/pokemon-chart.php");

$pageTitle = "Pokemon Stats";
include "view-header.php";

$pokemons = selectPokemon($_GET['id']);
include "view/pokemon-chart.php";
include "view-footer.php"
?>
