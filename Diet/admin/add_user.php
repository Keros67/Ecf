<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" />
    <title>Add User</title>
</head>
<body>
<?php
require('../config/config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
	// récupére les infos de formulaire
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $type = $_REQUEST['type'];
    $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

    //ajouter les données à la base de données
    $query = "INSERT into `utilisateurs`.utilisateurs (username, email, type, password)
				VALUES ('$username', '$email', '$type', '$password')";


    $pdo = new PDO('mysql:host=localhost:8889;dbname=utilisateurs', 'root', 'root');
    $statement = $pdo->prepare($query);
    $statement->bindValue('username', '$username');
    $statement->bindValue('email', '$email');
    $statement->bindValue('type', '$type');
    $statement->bindValue('password', '$password');
    $statement->execute([]);


    if($statement === true ){
       echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
			 </div>";
    }
}else{
?>
    <form class="box" action="" method="post">
	<h1 class="box-logo box-title"><a href="#">Retour à l'acceuil</a></h1>
    <h1 class="box-title">Ajouter un utilisateur</h1>
        <label>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
        </label>
        <label>
            <input type="text" class="box-input" name="email" placeholder="Email" required />
        </label>
        <div class="input-group">
            <label for="type"><select class="box-input" name="type" id="type" >
				<option value="" disabled selected>Type</option>
				<option value="administrateur">Administrateur</option>
				<option value="patient">Patient</option>
			</select>
            </label>
	</div>
        <label>
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
        <input type="submit" name="submit" value="+ Ajouter" class="box-button" />
        </label>
</form>

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

<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>