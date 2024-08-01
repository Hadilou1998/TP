<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        }
        footer {
            background-color: #d3d3d3;
            color: #000;
            padding: 10px;
            text-align: center;
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

        // Bouton de la page de contact
        echo "<button class='button'><h1>CONTACT</h1></button>";

        // Contenu de la page de contact
        echo "<h2>Contactez-nous !</h2>";
    ?>
    
    <footer>
        <distinct>
            <p>&copy; 2024 MyProject.com. Tous droits réservés.</p>
            <p>À propos | Politique de confidentialité</p>
        </distinct>
    </footer>
</body>
</html>