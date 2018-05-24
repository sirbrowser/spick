<?php 

	session_start();

	try
	{
	  $bdd = new PDO('mysql:host=localhost;dbname=monsite;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
	  // En cas d'erreur, on affiche un message et on arrête tout
	        die('Erreur : '.$e->getMessage());
	}
	
	$requete = $bdd -> prepare('INSERT INTO advertisement(username,message,place,date) VALUES(?,?,?, NOW())'); 
	$requete -> execute(array($_SESSION['username'], $_POST['message'], $_POST['place']));
	$requete->closeCursor();

?>