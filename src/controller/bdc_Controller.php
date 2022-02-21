<?php
setcookie('cart','');
include __DIR__.'/../entity/Commande.php';
include __DIR__.'/../entity/Commandes.php';
$bdcClient = Commande::retrieveById_commande($_GET['id'], SimpleOrm::FETCH_MANY);
$infoBdcClient = Commandes::retrieveByPK($_GET['id'], SimpleOrm::FETCH_ONE);

include __DIR__.'/../../templates/bondecommande.php';
?>