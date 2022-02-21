<?php

include_once __DIR__.'/../../vendor/SimpleOrm.class.php';

class Commande extends SimpleOrm {
    public $id;
    public $id_article;
    public $ref;
    public $titre;
    public $img;
    public $prix;
    public $quantite;
    public $datepanier;
}

?>