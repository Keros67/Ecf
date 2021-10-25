<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit();
        require_once './config/config.php';
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css" />
        <title>Administrateur</title>
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre espace Administrateur.</p>
		<a href="add_user.php">Ajouter un patient</a> |
            <a href="../patients/index.php">Page Patient</a> |
		<a href="../config/logout.php">Déconnexion</a>

		</div>

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
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

	</body>
</html>