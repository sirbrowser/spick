<?php
session_start();

// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des messages entre deux utilisateurs
$response = $bdd->prepare('SELECT sender, message FROM chat WHERE (sender = :me AND receiver = :other) OR (sender = :other AND receiver = :me) ORDER BY ID ASC ');
$response->execute(array(':me' => $_SESSION['username'], ':other' => $_POST['receiver']));

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($data = $response->fetch())
{
	echo '<p><strong>' . htmlspecialchars($data['sender']) . '</strong> : ' . htmlspecialchars($data['message']) . '</p>';
}

$response->closeCursor();

?>