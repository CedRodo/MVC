<?php require_once '../templates/header.php'; ?>
<?php if (isset($_GET['id'])==true) { $id = $_GET['id']; } ?>
<?php 
if (isset($_GET['mode'])==true) { 
     if ($_GET['mode']=='modif') {
         $mode='modif'; ?>
         <h4 class="center">Modification de :</h4>
         <p class="center"><?php echo "Réf. : ".$_GET['ref']."<br/><br/>Article : ".$_GET['titre']."<br/><br/>Prix : ".$_GET['prix']." €";?></p>
        <?php } else {
        $mode='add';
        }
    } 
 ?>
<?php require '../templates/donnees.php'; ?>