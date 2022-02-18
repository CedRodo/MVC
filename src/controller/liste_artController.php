<?php
    require_once __DIR__.'/../Entity/Articles.php';
    $entry = Articles::all();
    
    include __DIR__.'/../../templates/liste_articles.php';
?>