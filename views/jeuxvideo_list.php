<?php
session_start();
include_once "../inc/header.php";
require_once "../model/functions.php";
$listArticle = Articlelist();
?>
<div class="container">
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Id article</th>
                <th>nom du jeux</th>
                <th>n°_du_jeux</th>
                <th>description</th>
                <th>prix</th>
                <th>photo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listArticle as $article) { ?>
                    <tr>

                        <td>
                            <?= $article['id_article']; ?>
                        </td>
                        <td>
                            <?= $article['nom_du_jeu']; ?>
                        </td>
                        <td>
                            <?= $article['n_du_jeu']; ?>
                        </td>
                        <td>
                            <?= $article['description']; ?>
                        </td>
                        <td>
                            <?= $article['prix']; ?>
                        </td>

                        <td>
                            <a href="/jeux_video/views/detail_jeux.php?id_jeux=<?= $article['id_article']; ?>">
                                <img src="<?= "../asset/img/" . $article["photo"]; ?>" alt="<?= $article["nom_du_jeu"] ?>" style="width: 150px;">
                            </a>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include_once "../inc/footer.php"; ?>

