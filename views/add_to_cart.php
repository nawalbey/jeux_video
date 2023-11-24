<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['article_id'])) {
        $articleId = $_POST['article_id'];

       
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Add the article ID to the cart
        $_SESSION['cart'][] = $articleId;

        // Optionally, you can redirect to the article list page or show a success message
        header("Location: nav_bar.php");
        exit();
    }
}
