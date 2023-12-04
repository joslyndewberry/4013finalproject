<?php
require_once("util-db.php");
require_once("model/pokemon-by-type.php");

$pageTitle = "Songs by Artist";
include "view-header.php";
$songs = selectPokemonByType($_GET['id']);
include "view/pokemon-by-type.php";
include "view-footer.php"
?>
