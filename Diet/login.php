<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css" />
    <title>Connexion</title>
</head>
<body>
<h1 style="text-align: center">Veuillez vous connecter</h1>
<?php
require('./config/config.php');
session_start();


if (isset($_POST['username'])) {
    $username = $_REQUEST['username'];
    $_SESSION['username'] = $username;
    $password = $_REQUEST['password'];
    $message = 'Veuillez entrer un nom d\'utilisateur et un mot de passe valide';

    $pdo = new PDO('mysql:host=localhost:8889;dbname=utilisateurs', 'root', 'root');
    $statement = $pdo->prepare('SELECT * FROM `utilisateurs`.utilisateurs WHERE username = :username');
    $statement->bindValue(':username', '$username');
    $statement->execute(array(':username' => $username));
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user['type'] === 'administrateur') {
        header('location: admin/home.php');
    } elseif (password_verify('$password', $user['password']) || $user['type'] === 'patient') {
        header('location: patients/index.php');
    }else {
        header('Location: #');
    }

}


?>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title"><a href="./pages/acceuil.html">Acceuil</a></h1>
<h1 class="box-title">Connexion</h1>
    <label>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
    </label>
<p class="box-register">Nouveau ici? <a href="config/register.php">S'inscrire</a></p>
</form>


</body>
</html>