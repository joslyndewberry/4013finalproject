<?php
require_once("util-db.php");
require_once("model/trainer.php");

$pageTitle = "Trainers";
include "view-header.php";
$trainers = selectTrainers();
include "view/trainer.php";
include "view-footer.php"
?>
