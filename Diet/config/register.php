<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<?php
require('config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){

	// récupére les infos de formulaire
	$username = $_REQUEST['username'];
	$email =$_REQUEST['email'];
	$password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

    //ajouter les données à la base de données
    $query = "INSERT into `utilisateurs`.utilisateurs (username, email, type, password)
				VALUES ('$username', '$email', 'patient', '$password')";


    $pdo = new PDO('mysql:host=localhost:8889;dbname=utilisateurs', 'root', 'root');
    $statement = $pdo->prepare($query);
    $statement->bindValue('username', '$username', PDO::PARAM_STR);
    $statement->bindValue('email', '$email');
    $statement->bindValue('password', '$password', PDO::PARAM_STR);
    $statement->execute([]);

    if($statement){
        echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='../login.php'>connecter</a></p>
			 </div>";

    }
}else{
?>
<form class="box" action="" method="post">
	<h1 class="box-logo box-title"><a href="#">Adresse du site</a></h1>
    <h1 class="box-title">S'inscrire</h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="../login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>