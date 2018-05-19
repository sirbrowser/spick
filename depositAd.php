<?php session_start();

?>


<form action="saveAd.php" method="POST" autocomplete="off">
	<h2> Déposer une annonce </h2>
 
	<p> Pseudo : <?php echo htmlspecialchars($_SESSION['username']); ?></p>
	<p>
	<label>
		Adresse : <input type="text" name="adresse"/>
	</label>
	</p>

	<hr/> <p>Veuillez indiquer ce que vous recherchez </p>

	<textarea name="message" rows="6" cols="35"></textarea><!-- permet der faire apparaître une fenêtre afin de laisser l'utilisateur nous informer des produits qu'il recherche-->
	

	<p><input type="submit" name="valide" value="valider"/></p>

	 <br /><br />


</form>



