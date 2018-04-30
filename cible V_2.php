<?php 
       /*cette requête permet d'enregistrer nos champs rempli par l'utilisateur afin de sauvegarder dans notre db le pseudo, le mdp et le mail qui nous servirons à l'identifier lors de sa futur connexion*/

		$bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 

		$requete = $bdd -> prepare('INSERT INTO utilisateur(name, firstName, username, password, mail) VALUES(?,?,?,?,?,?)'); 
		$requete -> execute(array($_POST['name'], $_POST ['firstName'], $_POST['username'], $_POST['password'], $_POST['mail']));

		
 
?>


<p> Vous vous êtes bien enregistré ! </p>

<p> Suite à votre enregistrement <?php echo htmlspecialchars($_POST['username']); ?>, nous vous remercions de votre confiance.
</p>


	<!--$_POST['username'] contient le champ saisie par l'utilisateur-->

<p>Vous avez reçu un mail de validation de compte à <?php echo htmlspecialchars($_POST['mail']); ?>. 

	Nous vous invitons à inscrire les différents produits que vous voudriez mettre en ligne.  <a href="produits_clients.php"> cliquez ici</a> pour les inscrires.</p>

	<p>Ou bien si vous le souhaitez, retourner à la page d'acceuil. <a href="test.php">Acceuil</a></p>


<!-- autres fonctionnalités -->

<!--<?php /*  $description= htmlentities($_POST['description']),  
                ENT_QUOTES); 

				echo "votre description est la suivante: <br />".nl2br($description)."<br />"; */

	 

