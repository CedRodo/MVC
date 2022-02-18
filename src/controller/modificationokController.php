<?php include_once __DIR__."/../../templates/header.php";;

require_once "../src/Entity/Articles.php";

$entry = Articles::retrieveByPK($_GET['id']);
?>

<br/>
<br/>

<?php

$entry->ref = $_POST['ref'];
$entry->titre = $_POST['titre'];
$entry->description = $_POST['description'];
$entry->prix = $_POST['prix'];
$entry->img = $_POST['img'];
$entry->save();
?>

<?php require __DIR__."/../../templates/modifok.php"; ?>