<?php require_once __DIR__.'/../Entity/Articles.php';   

$my_cart_string=$_COOKIE['cart'];
//je convertie en objet panier
$moncart=json_decode($my_cart_string); 

include_once __DIR__.'/../../templates/panier_articles.php';
?>