
<!-- SELECT username, password FROM utilisateur WHERE username=$-POST['username'] AND password=$_POST[('password')]; voici l'idée générale de ce qu'on va faire-->



<?php 
 
 /*ici on regarde si les valeurs de champs inscrit par l'utilisateur sont dans la base de données*/

	$bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 

	$requete = $bdd -> prepare('SELECT username, password FROM utilisateur WHERE username=? AND password=?'); 
	$requete -> execute(array($_POST['username'], $_POST['password'])); 
		
/*si ils existent alors...*/
      if($donnees = $requete->fetch())
      {

          echo'<p>'.$_POST['username']. 'vous êtes bien dans la base de données.</p>';

      }
/* sinon...*/
      else 
      {

      		echo'<p>Nous sommes désolé mais vous n\'êtes pas encore inscrit sur notre site. Nous vous invitons à vous inscrire ' ?> <a href=" SignUP.php">ici</a><?php '<p>'; 


      }
?>