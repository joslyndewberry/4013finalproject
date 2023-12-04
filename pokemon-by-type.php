<?php
require_once("util-db.php");
require_once("model/types.php");
require_once("model/pokemon-by-type.php");

$pageTitle = "Pokemon Types";
include "view-header.php";
$pokemons = selectPokemonByType($_GET['id']);
$types = selectTypes();
include "view/pokemon-by-type.php";
include "view-footer.php"
?>
