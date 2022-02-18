<?php include_once __DIR__."/../templates/header.php";
?>

<section id="listeArticles">
<?php
foreach($entry as $unarticle){
    $img=$unarticle->img; ?>
    <article class="produit">
        <p class="ref">Ref. : <?php echo "$unarticle->ref"; ?></p>
        <p class="titre"><a href="article.php?id=<?php echo "$unarticle->id";?>"><?php echo "$unarticle->titre";?></a></p>
        <p class="description"><?php echo "$unarticle->description";?>
        <p class="prix"><span style="text-decoration: underline;">Prix :</span> <?php echo "$unarticle->prix €";?></p>
        <p class="photos"><img src="<?php echo "$img";?>"></p>
        <p class="modsup"><button><a href="modification_article?id=<?php echo $unarticle->id."&mode=modif&titre=".$unarticle->titre."&ref=".$unarticle->ref."&prix=".$unarticle->prix; ?>">Modifier</a></button><button><a href="suppression_article?id=<?php echo $unarticle->id;?>"> Supprimer </a></button></p>
    </article>
<?php
}
?>

</section>

<?php include_once __DIR__."/../templates/footer.php"; ?>