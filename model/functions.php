<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "../jeux_video/inc/database.php";

function Articlelist()
{
    // se connecter a la db (date base) ou bd (base de donnees)
    $db = dbConnexion();
    //preparer la requete
    $request = $db->prepare("SELECT * FROM article");
    //executer la requete
    try {
        $request->execute();
        //recuperer le resultat dans un tableau 
        $listArticle = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $listArticle;


}
