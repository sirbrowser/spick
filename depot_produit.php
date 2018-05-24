<?php session_start();

?>


<head>
	<meta charset="UTF-8"> 
    <title> Deposer un produit </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="propriété.css" />
</head>

<form action="saveProduit.php" method="POST" autocomplete="off">
	<div align="center">

		<img src="depotproduit.png" class="img-responsive"/>

		<p> Pseudo : <?php echo htmlspecialchars($_SESSION['username']); ?></p>
		<p>
		<label>
			Nom du produit : 
			<div class="input-group">
				<input type="text" name="nom_produit" class="form-control"/>
			</div>
		</label>
		</p> <br/>

		<p> Le type :</p>
	 			<select name="type_produit">
		                        	<!-- <option value="Electroménager">Electroménager</option>-->

		                        	<option value="Alimentation">Alimentation</option>

		                        	<option value="Vaisselle">Vaisselle 
		                        	</option>

		                        	<option value="Jouets/électronique">Jouets/loisirs/électronique </option>

		                        	<option value="Electroménager">Electroménager</option>

		                        	
		        </select>

	   <p>
	   	<label><br />
	   		Quantité : 
	   		<div class="input-group">
	   			<input type="text" name="quantité_produit" class="form-control"/>
	   		</div>
	   	</label>
	   </p>

	   <br/>
		<textarea name="commentaires" rows="6" cols="35" id="commentaires"></textarea><!-- permet der faire apparaître une fenêtre afin de laisser l'utilisateur nous informer sur le produit-->
		
		<br/>
		<p><button class="btn btn-info btn-lg" type="submit" name="valide" value="Valider"> Envoyer </button></p>
		

		 <br /><br />
	</div>


</form>

