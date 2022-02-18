<?php  require_once '../templates/header.php';

if ((isset($_POST['ref'])==true) && 
     (isset($_POST['titre'])==true) &&
     (isset($_POST['description'])==true) &&
     (isset($_POST['prix'])==true))
    
    {
      
        require_once __DIR__."/../../src/Entity/Articles.php";

        $entry = new Articles;
        $entry->ref = $_POST['ref'];
        $entry->titre = $_POST['titre'];
        $entry->description = $_POST['description'];
        $entry->prix = $_POST['prix'];
        $entry->img = $_POST['img'];
        $entry->save();
    }
?>

<?php include __DIR__."/../../templates/insertionok.php"; ?>