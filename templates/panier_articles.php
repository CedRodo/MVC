<?php include_once "header.php"; ?>


    <h1>Mon panier</h1>
    <!-- <br /> 
    <p>L'article  -->
      <?php
      //  echo $my_row_cart->article->titre;
        ?>
       <!-- a été ajouté au panier. Quantité sélectionnée :  -->
       <?php
        // echo $my_row_cart->quantite;
         ?>
       <!-- .</p>
    <br/>
    <p style="text-align: end; margin-right: 25px;">Poursuivre vers la liste d'<a href="/">articles</a>.</p>
    <br/>
    <br/> -->
<br/>

  <table style="width: 100%;" class="table">
  <thead>
    <tr>
      <th scope="col">Référence</th>
      <th scope="col">Image</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantité</th>
      <th scope="col">Prix total</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($moncart->row_cart as $entry ) { ?>
    <tr>
      <td scope="row"><?=$entry->article->ref; ?></th>
      <td><?php if ($entry->article->photo!="") { echo "<img src='"."http://localhost:8000/img/".$entry->article->photo."'>"; } else { echo "<img src=".$entry->article->img.">"; }; ?></td>
      <td><?=$entry->article->titre; ?></td>
      <td style="max-width: 600px;"><?=$entry->article->description; ?></td>
      <td><?=$entry->article->prix; ?></td>
      <td><?=$entry->quantite; ?></td>
      <td><?=$entry->prix_total; ?></td> 
    </tr> 
    <?php } ?>   

  </tbody>
</table>
<p class="prix" style="text-align: end; margin-top: 50px;"><span>Total :</span> <?=$moncart->total ?></p>

<p style="text-align: end; margin-top: 50px;"><button type="button"><a href="commande">Passer la commande</a></button><p>

<p style="text-align: end; margin-top: 50px;"><button><a href="vider_panier">Vider le panier</a></button><p>

<p style="margin: 45px 0px; text-decoration: none;">Retour vers l'<a style="text-decoration: none;" href="/">accueil</a>, la <a style="text-decoration: none;" href="liste_articles">liste des articles</a> ou <a style="text-decoration: none;" href="favoris_articles">la liste des favoris</a>.</p>

<?php include "footer.php"; ?>