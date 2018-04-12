

 
 <!DOCTYPE html>
 <html>
    <head>
 	    <meta charset="utf-8"/>
 	    <title> Inscrivez-vous </title> <br />
 	</head>

 	<body>
 		<h3>Dossier d'inscription</h3>
		 	<form action="cible.php" method="POST"/> <!--action='cible.php', avec cible.php qui s'occupera de traiter les données du formulaire-->

	<!--&nbsp sert 
	à l'espace--> <p>
					<label>

							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		                    Pseudo :<input type="text" name ="username" placehorder="pseudo" size="30" onblur="verifPseudo(this)"/>
		            </label>
		          </p><!--name contient la valeur de champ-->

		                    <!-- appel de la fonction verifPseudo dans onblur="" --> 

	              <p>
	              	<label>

	              	  		 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	              	  			Password :<input type="password" name = "password" size="30" placeholder="Mot de passe" onblur="VerifPassword(this)"/>
	              	</label>
	           	  </p>
                            
                            <!--label pour vérif le mot de passe
	              <p>
	              	<label> 
	              				VerifPassword :<input type="password" name = "VerifPassword" size="30" placeholder="Mot de passe" onblur="verifPassword(this)"/>
	              	</label>
	              </p> -->

	              	  	
	  

	              <p>
	              	  			
	              	 <label>

	              	  			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	              	  	    Mail :<input type="text" name="mail" placeholder="Adresse mail" size="30" onblur="verifMail(this)"/>
	              	 </label>
	             </p>



                        <!--
	              	  	    <p><label>Avez-vous plus de 18 ans? <input type="checkbox" name="majeur"/></label></p>
                         -->

	                        
	                        <p> Où habitez vous? </p>
	                        <select name="ville">

	                        	<option value="Bordeaux">Bordeaux</option>

	                        	<option value="Compiègne">Compiègne</option>

	                        	<option value="Toulouse">Toulouse</option>

	                        	<option value="Angers">Angers</option>

	                        	<option value="Caen">Caen</option>

	                        	<option value="Nantes">Nantes</option>

	                        	<option value="Montpellier"> Montpellier
	                        	</option>

	                        	<option value="Lyon"> Lyon </option>

	                        	<option value="Paris" selected="selected"> Paris </option>

	                        </select>

	                        <p><input type="submit" name="envoie" value="Envoyer"></p>

	              	  	</form>



	              	  	<script type="text/javascript">
	              	  		
                                function surligne(champ, erreur)/*fonction qui color un champ non rempli*/
                                {
                                	if(erreur)
                                		champ.style.backgroundColor = "#fba"; 
                                	else
                                		champ.style.backgroundColor = ""; 
                                }


                                /*fonction qui vérifie si le pseudo s'applique bien à nos critères que l'on va appeler dans l'input de l'username*/

                                function verifPseudo(champ)
                                {
                                	if(champ.value.length < 2 || champ.value.length > 25 )/*si la longueur du pseudo est plus petit que 2 ou plus grand que 25*/
                                	{
                                		surligne(champ, true); 
                                		return false;
                                	}

                                	else 
                                	{
                                		surligne(champ, false); 
                                		return true; 
                                	}
                                }




                                function VerifPassword(champ)
                                {
                                	if(champ.value.length < 6|| champ.value.length > 150 )/*si la longueur du pseudo est plus petit que 2 ou plus grand que 25*/
                                	{
                                		surligne(champ, true); 
                                		return false;
                                	}

                                	else 
                                	{
                                		surligne(champ, false); 
                                		return true; 
                                	}
                                }
                                

                                /*fonction qui vérifie un mail correctement ecrit */

                                function verifMail(champ)
                                {
                                	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

                                	if(!regex.test(champ.value))
                                	{
                                		surligne(champ, true);
                                		return false; 
                                	}
                                	

                                	else 
                                	{
                                		surligne(champ, false); 
                                		return true; 
                                	}
                                }

                                	
                           

	              	  	</script>



	</body>
</html>
	              	  



	              	  <!-- autres fonctionnalités-->
<!-- 
	              	  Description de votre personne <br>
	              	  <textarea name="description" rows="3" cols="60"></textarea><br>

-->
