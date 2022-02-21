<?php require_once __DIR__.'/../../templates/header.php';

if (isset($_GET['id'])==true) { $id = $_GET['id']; } ?>
<?php 
if (isset($_GET['mode'])==true) { 
     if ($_GET['mode']=='modif') {
         $mode='modif'; ?>
         <h2 class="center">Modification de :</h4>
         <p class="center"><?php echo "Réf. : ".$_GET['ref']."<br/><br/>Article : ".$_GET['titre']."<br/><br/>Prix : ".$_GET['prix']." €";?></p>
        <?php } else {
        $mode='add';
        }
    } else { ?>
    <h2>Ajout d'article</h2>
    <?php $mode='add'; }
require __DIR__.'/../../templates/donnees.php'; 
  
?>
