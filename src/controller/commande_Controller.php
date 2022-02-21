<?php
$commande_str=$_COOKIE['cart'];
$commande=json_decode($commande_str); 
include __DIR__.'/../entity/Commande.php';
include __DIR__.'/../entity/Commandes.php';
$rowcart = $commande->row_cart;

$commandes = new Commandes;
$commandes->prix_total = $commande->total;
$commandes->refclient = "";
$commandes->nomclient = "";
$commandes->datecommande = "";
$commandes->save();

// mysql_query(id_commande);
// $mysqli = new mysqli("localhost","root","","coursphp");
// $id_commande = $mysqli->query("SELECT max(id) FROM commandes");
// var_dump($id_commande);


foreach ($commande->row_cart as $nouvcommande) {    
    $entry = new Commande;
    $entry->id_article = $nouvcommande->article->id;
    $entry->ref =  $nouvcommande->article->ref;
    $entry->titre = $nouvcommande->article->titre;
    $entry->img =  $nouvcommande->article->img;
    $entry->prix =  $nouvcommande->article->prix;
    $entry->quantite = $nouvcommande->quantite;
    $entry->id_commande = $commandes->id;
    $entry->save();
 
}

$commandeClient = Commande::retrieveById_commande($commandes->id, SimpleOrm::FETCH_MANY);

include __DIR__.'/../../templates/commande.php';
?>