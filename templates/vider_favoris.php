<?php session_start();
unset($_SESSION['favoris']); ?>


<p style="margin-top: 100px;">La liste de favoris a bien été supprimée.</p>

<p style="margin-top: 50px;">Retour vers l'<a style="text-decoration: none;" href="/">accueil</a> ou la <a style="text-decoration: none;" href="liste_articles">liste des articles</a>.</p>

<?php include_once 'footer.php'; ?>