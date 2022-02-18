<?php require_once __DIR__.'/../../templates/header.php';

if (isset($_GET['id'])==true) { $id = $_GET['id']; } ?>
<?php 
if (isset($_GET['mode'])==true) { 
     if ($_GET['mode']=='modif') {
         echo "Ben oui";
         $mode='modif'; ?>
         <h4 class="center">Modification de :</h4>
         <p class="center"><?php echo "Réf. : ".$_GET['ref']."<br/><br/>Article : ".$_GET['titre']."<br/><br/>Prix : ".$_GET['prix']." €";?></p>
        <?php } else {
        echo "Ben non";
        $mode='add';
        }
    } else { echo "peut-être"; $mode='add'; }
echo $mode;
require __DIR__.'/../../templates/donnees.php'; 
  
?>
