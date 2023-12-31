<?php
session_start();
require_once "../inc/database.php";
if (isset($_POST['connexion'])) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if (isset($_SESSION['email'])) {
        $_SESSION["message"] ="vous êtes déjà connecté";
        header("Location: http://localhost/jeux_video/views/jeuxvideo_list.php");
    }
        //etablir la connexion avec la bd 
        $db = dbConnexion();
    //preparer la requete
    $request = $db->prepare("SELECT * FROM user WHERE email = ?");
    //executer la requete
    try {
        $request->execute(array($email));
        //recuperer la resultat de la requete
        $userInfo = $request->fetch(PDO::FETCH_ASSOC);
        (PDO::FETCH_ASSOC);
        if (empty($userInfo)) {
            echo "utilisateur inconnu";
        } else {
            // Vérifier si le mot de passe est correct
            if (password_verify($password, $userInfo['mot_de_passe'])) {
                // Si l'utilisateur est un admin
                if ($userInfo['role'] == "ROLE_ADMIN") {
                    header("location: http://localhost/jeux_video/admin/admin.php");
                } else {
                    $_SESSION["id"] = $userInfo["id_user"];
                    $_SESSION["nom"] = $userInfo["nom"];
                    $_SESSION["email"] = $userInfo["email"];
                    header("Location: http://localhost/jeux_video/views/jeuxvideo_list.php");
                }
            } else {
                echo "Mot de passe incorrect";
            }
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }
}