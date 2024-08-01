<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Définition des styles pour le body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        /* Définition des styles pour la barre de navigation */
        nav {
            background-color: #d3d3d3;
            color: #000;
            padding: 10px;
            text-align: center;
        }
        /* Définition des styles pour la liste de la barre de navigation */
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        /* Définition des styles pour les éléments de la liste de la barre de navigation */
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        /* Définition des styles pour les liens de la barre de navigation */
        nav ul li a {
            color: #000;
            text-decoration: none;
        }
        /* Définition des styles pour les liens de la barre de navigation au survol */
        nav ul li a:hover {
            text-decoration: underline;
        }
        /* Définition des styles pour le titre principal */
        h1 {
            text-align: center;
        }
        /* Définition des styles pour le sous-titre */
        h2 {
            text-align: center;
        }
        /* Définition des styles pour le pied de page */
        footer {
            background-color: #d3d3d3;
            color: #000;
            padding: 10px;
            text-align: center;
        }
        /* Définition des styles pour le bouton */
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
        /* Définition des styles pour le bouton au survol */
        .button:hover {
            background-color: #006400;
        }
    </style>
</head>
<body>
    <?php
        // Affichage du menu en utilisant des echo pour générer le HTML
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

        // Affichage du bouton de la page d'accueil
        echo "<button class='button'><h1>ACCUEIL</h1></button>";

        // Affichage du contenu de la page d'accueil
        echo "<h2>Contenu de la page d'accueil.</h2>";
    ?>
    
    <footer>
        <distinct>
            <p>&copy; 2024 MyProject.com. Tous droits réservés.</p>
            <p>À propos | Politique de confidentialité</p>
        </distinct>
    </footer>
</body>
</html>