
<?php
require_once("util-db.php");
require_once("model/types.php");

$pageTitle = "Types";
include "view-header.php";
$type = selectTypes();
include "view/types.php";
include "view-footer.php"
?>
