<?php include_once 'header.php'; ?>

<!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost:8000/assets/photos/vtt-rockrider-st-520-v2-black.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://localhost:8000/assets/photos/lenovo-legion-y540-15irh.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://localhost:8000/assets/photos/chaise-songmics-pu-obg24b.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
<br/>
<h1>Sales Online</h1>
<br/>
<h3>Liste des articles</h3>

<br/>
<br/>

<form style="margin: 0 0 25px 25px;" method="post" action="<?php echo '/'; ?>">
<label style ="text-decoration: none;" for="articles-select">Afficher les articles :</label>

<select name="affichage" id="articles-select" onchange="this.form.submit();">
    <option value="">--Type d'affichage--</option>
    <option value="coteacote">Côte à côte</option>
    <option value="dessusdessous">Dessus, Dessous</option>
</select>
</form>
<br/>
<br/>


<section>

<?php 
if (isset($_POST['affichage'])==false) {
    include __DIR__.'/../src/controller/liste_artController.php';
    }  else
if ($_POST['affichage']=="coteacote") {
    include 'liste_articles.php';
    } elseif ($_POST['affichage']=="dessusdessous") {
    include 'liste_articles2.php';
    }

?>

<?php include_once 'footer.php'; ?>
