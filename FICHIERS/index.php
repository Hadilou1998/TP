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
    
    // Déclaration de la page par défaut
    $default_page = 'pages/home.php';

    // Récupération des routes
    $objet_route = $_GET['url'];

    // Vérification de la route
    if (array_key_exists($objet_route, $routes)) {
        $requires = $routes[$objet_route];
    } else {
        $requires = $default_page;
    }
?>