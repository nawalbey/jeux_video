<?php
session_start();

// Display the cart content
echo '<h2>Shopping Cart</h2>';
echo '<ul>';
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $articleId) {
        // Fetch and display information about the article using $articleId
        // You can use a function similar to Articlelist() to fetch details based on the article ID
        echo '<li>' . $articleId . '</li>';
    }
} else {
    echo '<li>Cart is empty</li>';
}
echo '</ul>';



