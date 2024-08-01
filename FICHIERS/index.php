<?php
    // Déclaration des routes
    $routes = [
        '' => 'pages/home.php',
        'login' => 'pages/login.php',
        'contact' => 'pages/contact.php',
        'categories' => 'pages/categories.php',
        'products' => 'pages/products.php',
        'sales' => 'pages/sales.php'
    ];

    // Récupération de l'URL courante
    $currentUrl = $_SERVER['REQUEST_URI'];

    // Vérification de la présence de la route correspondante
    if (array_key_exists($currentUrl, $routes)) {
        // Inclusion du fichier correspondant à la route
        include $routes[$currentUrl];
    } else {
        // Inclusion du fichier par défaut (page 404)
        include 'pages/404.php';
    }
?>