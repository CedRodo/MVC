<?php session_start();

include __DIR__.'/../entity/Articles.php';
// SOIT LA SESSION N EXISTE PAS
if (isset($_SESSION['favoris'])==false){
    $date = Articles::retrieveByPK($_GET['id']);
    $date->datefavori = $_GET['datefavori'];
    $tab_fav[]=$_GET['id'];
    $_SESSION['favoris']=$tab_fav;
}
// SOIT LA SESSION EXISTE 
else {

    // si l'identifant est get est deja dans mon tableau alors je ne l'insere pas dans la 
    // session

    // recuperer le tableau existant
    $tab_fav=$_SESSION['favoris'];

    // on ajoute cet ID uniquement dans le cas ou l'ID n'est pas enregistré
    if (in_array($_GET['id'], $tab_fav)==false){
        // Rajouter au tableau le nouvelle identifiant sur lequel on a cliqué
         $tab_fav[]=$_GET['id'];

         $date = Articles::retrieveByPK($_GET['id']);
         $date->datefavori = $_GET['datefavori'];
         $date->save();

         // Nouveau tableau complet vient s'enregistrer dans le tableau de session
         $_SESSION['favoris']=$tab_fav;


    }
   
}
    
?>
<?php include __DIR__."/../../templates/ajout_favoris.php"; ?>