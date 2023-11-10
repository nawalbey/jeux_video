<?php
session_start();
require_once "../inc/database.php";

if (isset($_POST['article'])) {
    // recuperation des info
    $nomdujeux = htmlspecialchars($_POST['nom_du_jeux']);
    $n_du_jeu = htmlspecialchars($_POST['n_du_jeux']);
    $description = htmlspecialchars($_POST['description']);
    $prix = htmlspecialchars($_POST['prix']);


    $photo = null;
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photo = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], "../asset/img/" . $photo);

        // se connecter a la base de donnees
        $db = dbConnexion();
        // preparer la requete
        $request = $db->prepare("INSERT INTO article (nom_du_jeu, n_du_jeu, description, prix, photo) VALUES (?, ?, ?, ?, ?)");

        // executer la requete
        try {

            $request->execute(array($nomdujeux, $n_du_jeu, $description, $prix, $photo));

            header("Location: http://localhost/jeux_video/views/article.php");

        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
if (isset($_POST['update'])) {
    // recuperation des info
    $nomdujeu = htmlspecialchars($_POST['nom_du_jeu']);
    $n_du_jeu = htmlspecialchars($_POST['n_du_jeu']);
    $description = htmlspecialchars($_POST['description']);
    $prix = htmlspecialchars($_POST['prix']);
    $idArticle = htmlspecialchars($_POST['id_jeux']);


    $photo = null;
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photo = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], "../asset/img/" . $photo);

        // se connecter a la base de donnees
        $db = dbConnexion();
        // preparer la requete
        $request = $db->prepare("UPDATE `article` SET `nom_du_jeu`=?,`n_du_jeux`=?,`description`=?,`prix`=?,`photo`=? WHERE id_article= ?");

        // executer la requete
        try {

            $request->execute(array($nomdujeu, $n_du_jeu, $description, $prix, $photo, $idArticle));

            header("Location: http://localhost/jeux_video/views/detail_jeux.php?id_jeux=".$article['id_article']);

        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}