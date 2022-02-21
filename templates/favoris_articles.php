<h2>Liste des articles favoris</h2>
<br/>
<div id="favoris">
<?php $pos = 0; ?>
<?php if (isset($_SESSION["favoris"])==true) { 

foreach($_SESSION["favoris"] as $monarticle){
    $entry = Articles::retrieveByPK($monarticle);   
    ?>


<hr>
<br/>
<section class="favoris_articles">
<section class="image_article">
<img src="<?php echo $entry->img; ?>" alt="image de <?php echo $entry->titre; ?>">
</section>
<section class="contenu_article">
<p class="titre_favori"><a href="article?id=<?php echo $monarticle; ?>"><?php echo $entry->titre; ?></a><span>Ref : <?php echo $entry->ref; ?></span></p></br>
<p>Prix : <?php echo $entry->prix; ?> €</p></br>
<p>Ajouté le : <?php echo $entry->datefavori; ?></p><br/>
</section>
<section class="action_article">
    <form method="POST" action="ajouter_panier">
    <div class="action_article_quantite">
        <input title="Quantité" type="number" name="quantite" value="1" min="1" max="10">
        <input class="favori_panier" type="submit" value="Ajouter l'article au panier" name="id">
    </div>
    </form>
    <button><a href="retirer_favori?id=<?php echo $monarticle; ?>&pos=<?php echo $pos; ?>">Retirer l'article des favoris</a></button>
</section>
</section>
    
<?php 
    $pos++; } ?>
<br/>
<hr>
</div>
<br/>

<p style="text-align: end;"> <button><a href="ajouter_favoris">Ajouter les favoris au panier</a></button></p>

<p style="text-align: end;"> <button><a href="vider_favoris">Vider les favoris</a></button></p>

<p style="margin: 45px 0px; text-decoration: none;">Retour vers l'<a style="text-decoration: none;" href="/">accueil</a>, la <a style="text-decoration: none;" href="liste_articles">liste des articles</a> ou <a style="text-decoration: none;" href="favoris_articles">la liste des favoris</a>.</p>

<?php } else { ?>

<p> La liste des favoris est vide. </p>
    
<?php } ?>
<?php include "footer.php"; ?>