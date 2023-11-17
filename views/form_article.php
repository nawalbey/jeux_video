<?php include_once "../inc/nav_bar.php" ?>

<div class="container">
    <h1>article</h1>
    <form action="../model/db_article.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>nom du jeu
            </label>
            <input type="text" class="form-control" name="nom_du_jeu">
        </div>
        <div class="form-group">
            <label>n°_du_jeu :</label>
            <input type="number" class="form-control" name="n_du_jeu">
        </div>

        <div class="form-group">
            <label>description :</label>
            <input type="text" class="form-control" name="description">
        </div>

        <div class="form-group">
            <label>prix :</label>
            <input type="number" class="form-control" name="prix">
        </div>
        <div class="form-group">
            <label>photo :</label>
            <input type="file" class="form-control" name="photo">
        </div>


        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="article" value="submit">article</button>
    </form>
</div>

<?php include_once "../inc/footer.php" ?>

