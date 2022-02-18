<?php include_once __DIR__."/../../templates/header.php";

require_once __DIR__."/../../src/Entity/Articles.php";

$entry = Articles::retrieveByPK($_GET['id']);

$articlesupp = $entry->titre;
 ?>
<?php
echo "<br/><br/>";
$entry->delete();
?>

<?php include __DIR__."/../../templates/suppression.php"; ?>