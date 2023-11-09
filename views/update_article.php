<?php 
include_once "../inc/header.php";

require_once("../model/functions.php");
$id_jeux = $_GET['id_jeu'];
$article = articleId($id_jeux);


?>

<div class="container">
    <h1>article</h1>
    <form action="../model/db_article.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>nom du jeux
            </label>
            <input type="text" class="form-control" name="id_article" value=<?= $article['id_article'] ?>>
        </div>
        <div class="form-group">
            <label>n°_du_jeux :</label>
            <input type="number" class="form-control" name="nom_du_jeu" value=<?= $article['nom_du_jeu'] ?>>
        </div>

        <div class="form-group">
            <label>description :</label>
            <input type="text" class="form-control" name="n_du_jeu" value=<?= $article['n_du_jeu'] ?>>
        </div>

        <div class="form-group">
            <label>prix :</label>
            <input type="number" class="form-control" name="description" value=<?= $article['description'] ?>>
        </div>
        <div class="form-group">
            <label>photo :</label>
            <input type="file" class="form-control" name="prix" value=<?= $article['prix'] ?>>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="photo" value=<?= $article['photo'] ?>>
        </div>


        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="update" value="submit">article</button>
    </form>
</div>

<?php include_once "../inc/footer.php" ?>

