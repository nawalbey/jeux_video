<?php

require_once "../inc/database.php";

if (isset($_POST['inscription'])) {
    // recuperation des info
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $motDePasse = htmlspecialchars($_POST['mot_de_passe']);
    $date_de_naissance = htmlspecialchars($_POST['date_de_naissance']);

    // se connecter a la base de donnees
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("INSERT INTO user (nom, prenom, email,adresse, mot_de_passe, date_de_naissance) VALUES (?, ?, ?, ?, ?, ?)");
    // executer la requete
    try {
        $passwordHash = password_hash($motDePasse, PASSWORD_DEFAULT);
        $request->execute(array($nom, $prenom, $email, $adresse, $passwordHash, $date_de_naissance));
        header("Location: http://localhost/jeux_videos/views/login.php");
        echo 'Inscription reussie !';
    } catch (PDOException $e) {
      echo  $e->getMessage();
    }
}