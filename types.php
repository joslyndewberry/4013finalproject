
<?php
require_once("util-db.php");
require_once("model/types.php");
require_once("model/pokemon.php");

$pageTitle = "Types";
include "view-header.php";
$types = selectTypes();
$pokemons = selectPokemon();
include "view/types.php";
include "view-footer.php"
?>
