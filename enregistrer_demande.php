<?php 
	session_start();
	  /*cette requête permet d'enregistrer notre message en tant qu'annonce dans la bas de données*/
	
	    $bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
	
	    $requete = $bdd -> prepare('INSERT INTO demande(message,username,adresse,date_ajout) VALUES(?,?,?, NOW())'); 
	    $requete -> execute(array($_POST['message'], $_POST['username'], $_POST['adresse']));]

   
?>

