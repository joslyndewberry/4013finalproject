<?php
require_once("util-db.php");
require_once("model/pokemon-by-type.php");

$pageTitle = "Pokemon Types";
include "view-header.php";
$songs = selectPokemonByType($_GET['id']);
include "view/pokemon-by-type.php";
include "view-footer.php"
?>
