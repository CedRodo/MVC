<?php include_once 'header.php';
$total = 0; ?>

<table class="commande">
    <tr>
        <th>Référence</th>
        <th>Image</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Prix total</th>
    </tr>
<?php    foreach ($commandeClient as $comc) { ?>
    <tr>
        <td><?php echo $comc->ref; ?></td>
        <td><img src="<?php echo $comc->img; ?>" alt=""></td>
        <td><?php echo $comc->titre; ?></td>
        <td><?php echo $comc->prix; ?></td>
        <td><?php echo $comc->quantite; ?></td>
        <td><?php $ptArt = $comc->quantite*$comc->prix; echo $ptArt; ?></td>
    </tr>
<?php
$total = $total + $ptArt;
} ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th>Total</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $total; ?> €</td>
    </tr>
</table>
<br/>
<p class="valider"><button><a href="bondecommande?id=<?php echo $commandes->id; ?>">Valider la commande</a></button></p>

<?php include_once 'footer.php'; ?>