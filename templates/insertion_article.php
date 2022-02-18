<?php include 'header.php'; ?>

<h3>Ajout d'article</h3>

<div>

<form class="inserArticles" method="POST" action="validationajout">
<fieldset>
    <legend>Veuillez remplir les champs de données de l'article</legend>
        <label for="ref">Référence de l'article</label> <input class="inputRef" type="text" name="ref" id="ref" placeholder="Référence" required="required" />
        <label for="titre">Titre de l'article</label> <input class="inputTitre" type="text" placeholder="Article" name="titre" id="titre" min="3" max="70" required="required" /> <br />
        <label for="img">Url de l'image</label> <input class="inputImg" type="text" placeholder="Adresse URL de l'image" name="img" id="img" min="20" max="150" required="required" /> <br />
        <label for="description">Description de l'article</label> <textarea placeholder="Vous pouvez donner une description de l'article en 5 caractères minimum et 750 caractères maximum" name="description" id="description" rows="15" cols="77" min="5" max="750" required="required"></textarea> <br />
        <label for="prix">Prix de l'article</label> <input class="inputPrix" type="number" name="prix" id="prix" placeholder="Prix" value="0" min="0" max="10000" step="1" />

</fieldset>
<br/>    
<input class="formButton" type="submit" value="Envoyer" />
</form>
</div>

<a href="/">Retour vers la page d'accueil</a>



<?php require_once "footer.php"; ?>