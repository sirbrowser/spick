<?php
session_start();

// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// requête préparée
$req = $bdd->prepare('INSERT INTO chat(sender, receiver, message) VALUES(?, ?, ?)');
$req->execute(array($_SESSION['username'], $_POST['receiver'], $_POST['message']));
$req->closeCursor();

?>