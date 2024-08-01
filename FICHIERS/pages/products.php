<?php
    // Products
    echo '<h1>Page des produits</h1>';
    // Affichage des produits...
    // Exemple avec un tableau associatif
    $products = [
        ['id' => 1, 'designation' => 'souris', 'categorie' => 'peripherique', 'modele' => 'Logitech13', 'prix' => 38, 'promotions' => true, 'image' => './img/mouse.png'],
        ['id' => 2, 'designation' => 'telephone', 'categorie' => 'technologie', 'modele' => 'M213', 'prix' => 959, 'promotions' => false, 'image' => './img/phone.png'],
        ['id' => 3, 'designation' => 'ordinateur', 'categorie' => 'technologie', 'modele' => 'HP', 'prix' => 1200, 'promotions' => true, 'image' => './img/computer.png'],
        ['id' => 4, 'designation' => 'clavier', 'categorie' => 'peripherique', 'modele' => 'HP', 'prix' => 600, 'promotions' => false, 'image' => './img/keyboard.png'],
        ['id' => 5, 'designation' => 'écouteurs', 'categorie' => 'peripherique', 'modele' => 'Logitech', 'prix' => 75, 'promotions' => true, 'image' => './img/headphones.png'],
        ['id' => 6, 'designation' => 'photo', 'categorie' => 'technologie', 'modele' => 'Canon', 'prix' => 150, 'promotions' => false, 'image' => './img/photo.png'],
        ['id' => 7, 'designation' => 'tablette', 'categorie' => 'technologie', 'modele' => 'Samsung', 'prix' => 300, 'promotions' => true, 'image' => './img/tablet.png'],
        ['id' => 8, 'designation' => 'montre', 'categorie' => 'technologie', 'modele' => 'Samsung', 'prix' => 450, 'promotions' => false, 'image' => './img/applewatch.png'],
        ['id' => 9, 'designation' => 'spinner', 'categorie' => 'technologie', 'modele' => 'Samsung', 'prix' => 600, 'promotions' => true, 'image' => './img/spinner.png']
        //...
    ];

    echo '<table>';
    echo '<tr><th>ID</th><th>Nom</th><th>Catégorie</th><th>Modèle</th><th>Prix</th><th>Image</th></tr>';
    foreach ($products as $product) {
        echo '<tr>';
        echo '<td>'. $product['id']. '</td>';
        echo '<td>'. $product['designation']. '</td>';
        echo '<td>'. $product['categorie']. '</td>';
        echo '<td>'. $product['modele']. '</td>';
        echo '<td>'. $product['prix']. ' ���</td>';
        echo '<td><img src="'. $product['image']. '" alt="'. $product['designation']. '"></td>';
        echo '</tr>';
    }
    echo '</table>';
?>