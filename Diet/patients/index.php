<?php
session_start();


// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
    require_once 'login.php';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta content='width=device-width, initial-scale=1' name='viewport' />
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Patient</title>
</head>

<body class="index">
    <div class="sucess">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
        <p>Ceci est votre espace Patient.</p>
        <p>Vos recettes personalisée.</p>
        <a href="../config/logout.php">Déconnexion</a>
    </div>

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../pages/acceuil.html">Acceuil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../pages/Mes-services.html">Mes services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../pages/contact.html">Contact</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu+</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/a-propos.html">À propos</a></li>
                <li><a class="dropdown-item" href="../pages/Mentions-legales.html">Mentions Légales</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../pages/Politique-de-confidentialite.html">Politiques de confidentialité</a></li>
            </ul>
        </li>
    </ul>


    <div id="container">
        <div class="product-details">
            <h1>Crème de tofu et fruits</h1><br>
                <br><p>
                <b>Ingrédients:</b><br>
                150 g de tofu à texture fine et ferme.<br>
                1 c. à soupe de graines de lin moulues.<br>
                1 ½ tasse de petits fruits frais ou surgelés, dégelés.<br>
                1 à 2 c. à soupe de son d’avoine cru.<br>
                <br><b>Préparation:</b><br>
                Fouetter tous les ingrédients au mélangeur.<br>
                Servir.

            </p>
            <div class="control">
            </div>
        </div>
        <div class="product-image">
            <img src="../Photos/creme_tofu_fruit.jpg" alt="creme tofu">
            <div class="info">
                <h2>Recette</h2>
                <p>
                    Recette pouvant ajouter une touche de variété à votre petit déjeuner!<br>
                    Accompagner d'un muffin maison ou d'un demi-bagel à grains entiers,<br>
                    cela commence très bien la journée!<br>
                    <br>Portion: 1<br>
                    Temps de préparation: 5 minutes<br>
                    Niveau de difficulté: facile<br>
                    Régime végétarien: ok<br>
                    Allergènes possibles:

                </p>
            </div>
        </div>
    </div>

    <div id="container">
        <div class="product-details">
            <h1>Crème de tofu et fruits</h1><br>
            <br><p>
                <b>Ingrédients:</b><br>
                150 g de tofu à texture fine et ferme.<br>
                1 c. à soupe de graines de lin moulues.<br>
                1 ½ tasse de petits fruits frais ou surgelés, dégelés.<br>
                1 à 2 c. à soupe de son d’avoine cru.<br>
                <br><b>Préparation:</b><br>
                Fouetter tous les ingrédients au mélangeur.<br>
                Servir.

            </p>
            <div class="control">
            </div>
        </div>
        <div class="product-image">
            <img src="../Photos/creme_tofu_fruit.jpg" alt="creme tofu">
            <div class="info">
                <h2>Recette</h2>
                <p>
                    Recette pouvant ajouter une touche de variété à votre petit déjeuner!<br>
                    Accompagner d'un muffin maison ou d'un demi-bagel à grains entiers,<br>
                    cela commence très bien la journée!<br>
                    <br>Portion: 1<br>
                    Temps de préparation: 5 minutes<br>
                    Niveau de difficulté: facile<br>
                    Régime végétarien: ok<br>
                    Allergènes possibles:

                </p>
            </div>
        </div>
    </div>

    <div id="container">
        <div class="product-details">
            <h1>Crème de tofu et fruits</h1><br>
            <br><p>
                <b>Ingrédients:</b><br>
                150 g de tofu à texture fine et ferme.<br>
                1 c. à soupe de graines de lin moulues.<br>
                1 ½ tasse de petits fruits frais ou surgelés, dégelés.<br>
                1 à 2 c. à soupe de son d’avoine cru.<br>
                <br><b>Préparation:</b><br>
                Fouetter tous les ingrédients au mélangeur.<br>
                Servir.

            </p>
            <div class="control">
            </div>
        </div>
        <div class="product-image">
            <img src="../Photos/creme_tofu_fruit.jpg" alt="creme tofu">
            <div class="info">
                <h2>Recette</h2>
                <p>
                    Recette pouvant ajouter une touche de variété à votre petit déjeuner!<br>
                    Accompagner d'un muffin maison ou d'un demi-bagel à grains entiers,<br>
                    cela commence très bien la journée!<br>
                    <br>Portion: 1<br>
                    Temps de préparation: 5 minutes<br>
                    Niveau de difficulté: facile<br>
                    Régime végétarien: ok<br>
                    Allergènes possibles:

                </p>
            </div>
        </div>
    </div>

    <div id="container">
        <div class="product-details">
            <h1>Crème de tofu et fruits</h1><br>
            <br><p>
                <b>Ingrédients:</b><br>
                150 g de tofu à texture fine et ferme.<br>
                1 c. à soupe de graines de lin moulues.<br>
                1 ½ tasse de petits fruits frais ou surgelés, dégelés.<br>
                1 à 2 c. à soupe de son d’avoine cru.<br>
                <br><b>Préparation:</b><br>
                Fouetter tous les ingrédients au mélangeur.<br>
                Servir.

            </p>
            <div class="control">
            </div>
        </div>
        <div class="product-image">
            <img src="../Photos/creme_tofu_fruit.jpg" alt="creme tofu">
            <div class="info">
                <h2>Recette</h2>
                <p>
                    Recette pouvant ajouter une touche de variété à votre petit déjeuner!<br>
                    Accompagner d'un muffin maison ou d'un demi-bagel à grains entiers,<br>
                    cela commence très bien la journée!<br>
                    <br>Portion: 1<br>
                    Temps de préparation: 5 minutes<br>
                    Niveau de difficulté: facile<br>
                    Régime végétarien: ok<br>
                    Allergènes possibles:

                </p>
            </div>
        </div>
    </div>


    <div id="container">
        <div class="product-details">
            <h1>Crème de tofu et fruits</h1><br>
            <br><p>
                <b>Ingrédients:</b><br>
                150 g de tofu à texture fine et ferme.<br>
                1 c. à soupe de graines de lin moulues.<br>
                1 ½ tasse de petits fruits frais ou surgelés, dégelés.<br>
                1 à 2 c. à soupe de son d’avoine cru.<br>
                <br><b>Préparation:</b><br>
                Fouetter tous les ingrédients au mélangeur.<br>
                Servir.

            </p>
            <div class="control">
            </div>
        </div>
        <div class="product-image">
            <img src="../Photos/creme_tofu_fruit.jpg" alt="creme tofu">
            <div class="info">
                <h2>Recette</h2>
                <p>
                    Recette pouvant ajouter une touche de variété à votre petit déjeuner!<br>
                    Accompagner d'un muffin maison ou d'un demi-bagel à grains entiers,<br>
                    cela commence très bien la journée!<br>
                    <br>Portion: 1<br>
                    Temps de préparation: 5 minutes<br>
                    Niveau de difficulté: facile<br>
                    Régime végétarien: ok<br>
                    Allergènes possibles:

                </p>
            </div>
        </div>
    </div>

<footer>
    <p>
            © Keros 2021.
    </p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>