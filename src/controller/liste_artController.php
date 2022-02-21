<?php include_once __DIR__."/../../templates/header.php";
?>

<h2>Liste des articles</h2>

<br/>
<br/>
<?php
// $date1 = date("D d F Y");
// echo $date1."<br/>";
// setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8','fra');
// echo strftime('%A %d %B %Y', strtotime($date1));

?>
<?php require_once __DIR__.'/../Entity/Articles.php';
    $entry = Articles::all(); ?>

<form style="margin: 0 0 25px 25px;" method="post" action="<?php echo 'liste_articles'; ?>">
<label style ="text-decoration: none;" for="articles-select">Afficher les articles :</label>

<select name="affichage" id="articles-select" onchange="this.form.submit();">
    <option value="">--Type d'affichage--</option>
    <option value="coteacote">Côte à côte</option>
    <option value="dessusdessous">Dessus, Dessous</option>
</select>
</form>
<br/>
<br/>

<?php
if (isset($_POST['affichage'])==false) {
    include __DIR__.'/../../templates/liste_articles.php';
    }  else
if ($_POST['affichage']=="coteacote") {
    include __DIR__.'/../../templates/liste_articles.php';
    } elseif ($_POST['affichage']=="dessusdessous") {
    include __DIR__.'/../../templates/liste_articles2.php';
    }

?>