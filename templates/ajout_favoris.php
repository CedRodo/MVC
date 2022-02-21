<?php include_once 'header.php';

$favorites = Articles::retrieveByPK($_GET['id']); ?>

<img style="margin-top: 50px;" src="<?php echo $favorites->img; ?>" alt="l'image de l'article">

<p style="margin-top: 100px;">L'article "<?= $favorites->titre; ?>" a bien été ajouté aux favoris. </p>

<p style="margin: 45px 0px;">Retour vers l'<a style="text-decoration: none;" href="/">accueil</a>, la <a style="text-decoration: none;" href="liste_articles">liste des articles</a> ou <a style="text-decoration: none;" href="favoris_articles">la liste des favoris</a>.</p>

<?php include "footer.php"; ?>