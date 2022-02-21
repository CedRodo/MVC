<?php include_once __DIR__."/../../templates/header.php";

require_once __DIR__."/../../src/Entity/Articles.php";

$entry = Articles::retrieveByPK($_GET['id']);

require_once __DIR__."/../../templates/retirer_favori.php";

