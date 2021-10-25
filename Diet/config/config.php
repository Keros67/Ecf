<?php


$username = 'root';
$password = 'root';
$mysqlDsn = 'mysql:host=localhost:8889;dbname=utilisateurs';

try {
    $pdo = new PDO($mysqlDsn, $username, $password);
}catch(PDOException $PDOException) {
    echo 'Impossible de se connecter à la base de données.';
}
?>