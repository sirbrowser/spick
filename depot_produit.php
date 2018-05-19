<?php session_start();

?>

<form action="saveProduit.php" method="POST" autocomplete="off">
	<h2> Des produits à mettre en ligne ? </h2>
 
	<p> Pseudo : <?php echo htmlspecialchars($_SESSION['username']); ?></p>
	<p>
	<label>
		Nom du produit: <input type="text" name="nom_produit"/>
	</label>
	</p>

	<p> Le type:</p>
 			<select name="type_produit">
	                        	<!-- <option value="Electroménager">Electroménager</option>-->

	                        	<option value="Alimentation">Alimentation</option>

	                        	<option value="Vaisselle">Vaisselle 
	                        	</option>

	                        	<option value="Jouets/électronique">Jouets/loisirs/électronique </option>

	                        	<option value="Electroménager">Electroménager</option>

	                        	
	        </select>

   <p>
   	<label>
   		Quantité : <input type="text" name="quantité_produit"/>
   	</label>
   </p>

	<textarea name="commentaires" rows="6" cols="35" id="commentaires"></textarea><!-- permet der faire apparaître une fenêtre afin de laisser l'utilisateur nous informer sur le produit-->
	

	<p><input type="submit" name="valide" value="valider"/></p>

	 <br /><br />


</form>

