
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Récupération de mot de passe</title>
</head>
<body>
	<form action="Envoi_mail_utilisateur.php" method="POST">
		
		<p> <!--champ d'adreese mail pour l'envoye du formulaire de changement de mdp | voir comment vérifier si l'adresse est correct puis envoyer formulaire-->
			<label>
			       Adresse mail : <input type="text" name="Add_mail"/>

			       <!--faire un fichier.php (formulaire) qui permet de changer de mdp dans la base de données via UPTATE en sql-->

			       <!-- ici lorsque l'on clique sur 'envoyer' un lien vers un formulaire est envoyé à l'adresse mail afin que l'utilisateur puisse changer son mdp et que enfin on utilise UPTATE pour changer le mdp-->

			       <p>  	  			
	              	 <label>


	                        <p><input type="submit" name="envoie" value="Envoyer">
	                        </p>
	                </label>

	            </p> 
	            
			</label>
		</p>
	</form>

</body>
</html>