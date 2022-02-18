<?php include_once __DIR__."/../templates/header.php";
require_once __DIR__."/../src/Entity/Articles.php";
$entry = Articles::all();
?>

<section id="listeArticles">

<?php
foreach($entry as $unarticle){
    $img=$unarticle->img; ?>
    <article class="produit2">
        <p class="ref">Ref. : <?php echo "$unarticle->ref"; ?></p>
        <p class="titre"><a href="article.php?id=<?php echo "$unarticle->id";?>"><?php echo "$unarticle->titre";?></a></p>
        <p class="description"><?php echo "$unarticle->description";?>
        <p class="prix"><span>Prix : <?php echo "$unarticle->prix €";?></span></p>
        <p class="photos"><img src="<?php echo "$img";?>"></p>
        <p class="modsup"><button><a href="modification_article?id=<?php echo $unarticle->id."&mode=modif&titre=".$unarticle->titre."&ref=".$unarticle->ref."&prix=".$unarticle->prix;?>">Modifier</a></button><button><a href="suppression_article?id=<?php echo $unarticle->id;?>"> Supprimer </a></button></p>
        <hr>
    </article>
<?php
}
?>

</section>

<?php include_once __DIR__."/../templates/footer.php"; ?>