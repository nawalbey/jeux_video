<?php
require_once("../model/functions.php");
$id_jeux = $_GET['id_jeu'];
$article = articleId($id_jeux);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../asset/css/style.css">
    </head>
    <body class="body1">
        <?php require('../inc/header.php') ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= "../asset/img/" . $article['photo'] ?>" class="card-img-top" alt="<?= $article['nom_du_jeu'] ?>">
            <div class="card-body">
                <div>
                    <h5 class="card-title"><?= $article['nom_du_jeu'] ?></h5>
                    <p class="card-text"><?= $article['description'] ?></p>
                </div>
                <div><a href="./update_article.php?id_jeu=<?= $article['id_article'] ?>">Modifier</a></div>
            </div>
        </div>
    </body>
</html>

