<?php

function index(){
    require_once __DIR__.'/../entity/Articles.php';
    // recuperer l ensemble des données des utilisateurs
    $entry = Articles::all();

    include __DIR__.'/../templates/liste_articles.php';





}