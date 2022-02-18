<?php
// routeur : 
//dans cd public
// php -S localhost:8080

if (isset($_SERVER['PATH_INFO'])==false){
  
    include __DIR__.'/../src/controller/homeController.php';
   // echo "vous êtes à la page d'accueil";

}
else if ($_SERVER['PATH_INFO']=="/liste_articles"){
   
    include __DIR__.'/../src/controller/liste_artController.php';

}


else if ($_SERVER['PATH_INFO']=="/creer_article"){
    include __DIR__.'/../src/controller/insertion_artController.php';
}

else if ($_SERVER['PATH_INFO']=="/validationajout"){
    include __DIR__.'/../src/controller/insertionokController.php';
}

else if ($_SERVER['PATH_INFO']=="/modification_article"){
    include __DIR__.'/../src/controller/modif_artController.php';
}

else if ($_SERVER['PATH_INFO']=="/validationmodif"){
    include __DIR__.'/../src/controller/modificationokController.php';
}

else if ($_SERVER['PATH_INFO']=="/suppression_article"){
    include __DIR__.'/../src/controller/supp_artController.php';
}

// EXO CREEZ un nouveau projet avec un routeur dans le dossier public
// avec plusieurs page 2 ou 3 
// avec le serveur lancé depuis le terminal