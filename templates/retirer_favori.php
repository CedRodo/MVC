<?php session_start();
$favtitre = $entry->titre;
$index = $_GET['pos'];
unset($_SESSION['favoris'][$index]);
$tab_retire = $_SESSION['favoris'];
$_SESSION['favoris'] = $tab_retire;


?>

<p>Le favori "<?php echo $favtitre; ?>"" a bien été retiré.</p>

<p>Retour vers l'<a href="/">accueil</a>, la <a href="favoris_articles">liste des favoris</a> ou la <a href="liste_articles">liste des articles</a>.</p>

<?php include_once 'footer.php'; ?>