<?php

include_once __DIR__.'/../../vendor/SimpleOrm.class.php';

class Commandes extends SimpleOrm {
    public $id;
    // public $refclient;
    // public $nomclient;
    public $datecommande;
    public $prix_total;
}

?>