<?php  require_once __DIR__."/../../templates/header.php";

if ((isset($_POST['ref'])==true) && 
     (isset($_POST['titre'])==true) &&
     (isset($_POST['description'])==true) &&
     (isset($_POST['prix'])==true))
    
    {
        if(isset($_FILES['photo'])){
            $tmpName = $_FILES['photo']['tmp_name'];
            $name = $_FILES['photo']['name'];
            $size = $_FILES['photo']['size'];
            $error = $_FILES['photo']['error'];
    
            move_uploaded_file($tmpName, $_SERVER["DOCUMENT_ROOT"]."/img/".$name);
        }
    
    
        // recuperer  l entité article
        include __DIR__.'/../entity/Articles.php';
    
        // Si on a le titre qui est vide ou ...
        // alors on renvoie une vue et on arrette
    
        if ($_POST['titre']==""){
            $erreur_titre="<br /> - Vous n'avez pas entré de titre";
       
        }
    
        if ($_POST['description']==""){
            $erreur_description="<br /> - Vous n'avez pas entré de Description";
       
        }
    
        if ($_POST['prix']==""){
            $erreur_prix="<br />     - Vous n'avez pas entré de Prix";
        }
    
        if (  ($_POST['titre']=="") || ($_POST['description']=="") || ($_POST['prix']=="")  ) {
           
            include __DIR__.'/../../template/ViewAddArticle.php';
            return ;
        }
        // require_once __DIR__."/../../src/Entity/Articles.php";

        $entry = new Articles;
        $entry->ref = $_POST['ref'];
        $entry->titre = $_POST['titre'];
        $entry->description = $_POST['description'];
        $entry->prix = $_POST['prix'];
        $entry->img = $_POST['img'];
        $entry->photo = $name;
        $entry->save();
    }
?>

<?php include __DIR__."/../../templates/insertionok.php"; ?>

// 
    <?php $tmpName = $_FILES['photo']['tmp_name'];
move_uploaded_file($tmpName, $_SERVER["DOCUMENT_ROOT"]."/img/".$name); ?>