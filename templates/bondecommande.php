<?php include_once 'header.php'; ?>
<div class="boncommande">
<header class="entete">
   <p>MON ENTREPRISE
3 avenue de la republique
75012 Paris
   </p>
   <p>Facture n°<?= ""; ?>
   <br/>Date : <?= $infoBdcClient->datecommande; ?>
   </p>
   <p><?= $infoBdcClient->nomclient; ?>
   <br/>Ref: <?= $infoBdcClient->refclient; ?>
   <br/><?= ""; ?></p>
   </p>
   <button>Imprimer cette page</button>
</header>

<div class="tabcommande">

<table>
   <tr>
       <th>Référence</th>
       <th style="width: 500px;">Titre</th>
       <th style="width: 200px;">Prix</th>
       <th>Quantité</th>
       <th style="width: 200px;">Prix total</th>
   </tr>
<?php    foreach ($bdcClient as $bdc) { ?>
    <tr>
        <td><?= $bdc->ref; ?></td>
        <td><?= $bdc->titre; ?></td>
        <td><?= $bdc->prix; ?></td>
        <td><?= $bdc->quantite; ?></td>
        <td><?php $ptArt = $bdc->quantite*$bdc->prix; echo $ptArt; ?></td>
    </tr>
<?php } ?>
</table>

<table style="margin-top: 100px !important;">
        <tr>
           <th>Total</th>
           <td style="text-align: end;">
           <?= $infoBdcClient->prix_total." €"; ?>
           </td>
        </tr>
</table>
</div>
<footer style="margin-top: 20px; padding-top: 50px; text-align: center">
   Téléphone : <a href==#">07 11 22 33 34</a> - <a href==#">Email : moi@monentreprise.com</a> - <a href==#">3, avenue de la République</a>
</footer>
</div>

<?php include_once 'footer.php'; ?>