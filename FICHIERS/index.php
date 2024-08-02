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

    // Vérifier si la page demandée existe dans les routes
    if(!isset($routes[$_GET['url']])){
        $page = 'pages/404.php';
    }else{
        $page = $routes[$_GET['url']];
    }
    
    // Inclure la page demandée
    include $page;
?>