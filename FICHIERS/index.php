<?php
    // Déclaration des routes
    $routes = [
        '' => 'pages/home.php',
        'login' => 'pages/login.php',
        'contact' => 'pages/contact.php',
        'categories' => 'pages/categories.php',
        'products' => 'pages/products.php',
        'promotions' => 'pages/sales.php'
    ];
    
    // Récupérer le contenu de la page demandée
    $page = $routes[$_GET['url']];
    // Inclure la page demandée
    include $page;
?>