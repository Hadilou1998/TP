<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        nav {
            background-color: #d3d3d3;
            color: #000;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: #000;
            text-decoration: none;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        h1 {
            text-align: center;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-transform: uppercase;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            font-weight: bold;
            text-shadow: 1px 1px 0 #fff;
        }
        footer {
            background-color: #d3d3d3;
            color: #000;
            padding: 10px;
            text-align: center;
            width: 100%;
        }
        img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }
        .products {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
        }
        .product {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadowstd::before {
                content: " ";
                display: block;
                position: absolute;
                top: -10px;
                left: 0;
                right: 0;
                height: 10px;
                background-color: #f2f2f2;
            }
            .product img {
                width: 100px;
                height: 100px;
                object-fit: cover;
                border-radius: 50%;
                margin-right: 10px;
            }
            .product .description {
                flex: 1;
            }
        }
        .description {
            margin-top: 10px;
            text-align: center;
            margin-bottom: 10px;
            margin-left: 20px;
            margin-right: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #008000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            width: 100%;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #006400;
        }
    </style>
</head>
<body>
    <?php
        // Affichage du menu
        echo '<nav>';
        echo '<ul>';
        echo '<li><a href="index.php">Accueil</a></li>';
        echo '<li><a href="index.php?url=products">Produits</a></li>';
        echo '<li><a href="index.php?url=promotions">Promotions</a></li>';
        echo '<li><a href="index.php?url=categories">Catégories</a></li>';
        echo '<li><a href="index.php?url=contact">Contact</a></li>';
        echo '<li><a href="index.php?url=login">Login</a></li>';
        echo '</ul>';
        echo '</nav>';

        // Affichage du titre de la page
        echo "<h1>Bienvenue dans notre site!</h1>";

        // Bouton de la page catégories
        echo "<button class='button'><h1>CATÉGORIES</h1></button>";

        // Contenu de la page catégories
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
        // Affichage des produits par catégorie
        echo '<p>Catégories :</p>';
        echo '<lick href="index.php?url=products&category=technologie">';
        echo '<h2>Technologie</h2>';
        echo '<div class="products">';
        foreach ($products as $product) {
            if ($product['categorie'] === 'technologie') {
                echo '<div class="product">';
                echo '<img src="' . $product['image'] . '" alt="' . $product['designation'] . '">';
                echo '<h3>' . $product['designation'] . '</h3>';
                echo '<p>Modèle : ' . $product['modele'] . '</p>';
                echo '<p>Prix : ' . $product['prix'] . '</p>';
                echo '<p>Promotion : ' . ($product['promotions'] ? 'Oui' : 'Non') . '</p>';
                echo '<a href="index.php?url=products&id=' . $product['id'] . '" class="button">Voir le produit</a>';
                echo '</div>';
            }
        }
        echo '</div>';
        echo '</lick>';
        echo '<lick href="index.php?url=products&category=peripherique">';
        echo '<h2>Périphériques</h2>';
        echo '<div class="products">';
        foreach ($products as $product) {
            if ($product['categorie'] === 'peripherique') {
                echo '<div class="product">';
                echo '<img src="' . $product['image'] . '" alt="' . $product['designation'] . '">';
                echo '<h3>' . $product['designation'] . '</h3>';
                echo '<p>Modèle : ' . $product['modele'] . '</p>';
                echo '<p>Prix : ' . $product['prix'] . '</p>';
                echo '<p>Promotion : ' . ($product['promotions'] ? 'Oui' : 'Non') . '</p>';
                echo '<a href="index.php?url=products&id=' . $product['id'] . '" class="button">Voir le produit</a>';
                echo '</div>';
            }
        }
    ?>
    
    <footer>
        <distinct>
            <p>&copy; 2024 MyProject.com. Tous droits réservés.</p>
            <p>À propos | Politique de confidentialité</p>
        </distinct>
    </footer>
</body>
</html>