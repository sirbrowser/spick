

 
 <!DOCTYPE html>
 <html>
    <head>
 	    <meta charset="utf-8"/>
 	    <title> Inscrivez-vous </title> <br />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="propriété.css" />
 	</head>

 	<body>
        <div align="center">
 		<img src="signup.png" class="img-responsive"/>
		 	<form action="cible V_2.php" onsubmit="return verifForm(this)" method="POST" > <!--action='cible.php', avec cible.php qui s'occupera de traiter les données du formulaire-->

	<!--&nbsp sert 
	à l'espace--> 
                <table>
                    <tr>
                        <td>
                            <label>
                                Nom : 
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" onblur="verifName(this)"> <span id="erreurName"></span>
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Prénom : 
                                <div class="input-group">
                                    <input type="text" class="form-control" name="firstName" onblur="verifFirstName(this)"> <span id="erreurFirstName"> </span>
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Date de naissance : 
                                <div class="input-group">
                                    <input type="text" class="form-control" name="date" onblur="verifDate(this)"> <span id="erreurDate"></span>
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
					        <label>
                                Pseudo :  
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" onblur="verifPseudo(this)"> <span id="erreurPseudo"></span>
                                </div>
		                    </label>
		                </td>
                    </tr>
                    <tr>
	                    <td>
	              	        <label>
                                Mot de passe : 
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" onblur="verifPassword(this)"> <span id="erreurPassword"></span>
                                </div>
	              	        </label>
	           	        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Mail : 
                                <div class="input-group">
                                    <input type="text" class="form-control" name="mail" placeholder="exemple@mail.fr" onblur="verifMail(this)"> <span id="erreurMail"></span>
                                </div>
                            </label>
                        </td>
                    </tr>
                </table>

	                        
	                        <p> Dans quel arrondissement habitez-vous? </p>
	                        <select name="borough">

	                        	<option value="1er">1er</option>

	                        	<option value="2eme">2eme</option>

	                        	<option value="3eme">3eme</option>

	                        	<option value="4eme">4eme</option>

	                        	<option value="5eme">5eme</option>

	                        	<option value="6eme">6eme</option>

	                        	<option value="7eme">7eme</option>

	                        	<option value="8eme">8eme</option>

                                <option value="9eme">9eme</option>

                                <option value="10eme">10eme</option>

                                <option value="11eme">11eme</option>

                                <option value="12eme">12eme</option>

                                <option value="13eme">13eme</option>

                                <option value="14eme">14eme</option>

                                <option value="15eme">15eme</option>

                                <option value="16eme">16eme</option>

                                <option value="17eme">17eme</option>

                                <option value="18eme">18eme</option>

                                <option value="19eme">19eme</option>

                                <option value="20eme">20eme</option>

	                        	<option value="choix" selected="selected">Choix </option>

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


                                function verifName(champ)
                                {
                                    var regex = /^[a-zA-Z-]+$/;
                                    if (!regex.test(champ.value))
                                    {
                                        document.getElementById('erreurName').innerHTML = 'Le nom ne doit comporter que des minuscules, majuscules et tirets';
                                        surligne(champ, true);
                                        //champ.focus();
                                        return false;
                                    }

                                    else
                                    {
                                        surligne(champ, false);
                                        return true;
                                    }

                                }


                                function verifFirstName(champ)
                                {
                                    var regex = /^[a-zA-Z-]+$/;
                                    if (!regex.test(champ.value))
                                    {
                                        document.getElementById('erreurFirstName').innerHTML = 'Le prénom ne doit comporter que des minuscules, majuscules et tirets';
                                        surligne(champ, true);
                                        //champ.focus();
                                        return false;
                                    }

                                    else
                                    {
                                        surligne(champ, false);
                                        return true;
                                    }
                                }


                                function verifDate(champ)
                                {
                                    var regex = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
                                    if (!regex.test(champ.value)) 
                                    {
                                        document.getElementById('erreurDate').innerHTML = 'Veuillez respecter la syntaxe JJ/MM/AAAA';
                                        surligne(champ, true);
                                        //champ.focus();
                                        return false;
                                    }

                                    else
                                    {
                                        surligne(champ, false);
                                        return true;
                                    }
                                }


                                function verifPseudo(champ)
                                {
                                    var regex = /^[a-zA-Z0-9]{1,}$/;
                                	if(champ.value.length < 4 || champ.value.length > 25 || !regex.test(champ.value))
                                	{
                                        document.getElementById('erreurPseudo').innerHTML = 'Minuscules, majuscules et chiffres autorisés et au moins 4 caractères';
                                		surligne(champ, true);
                                        //champ.focus(); 
                                		return false;
                                	}

                                	else 
                                	{
                                		surligne(champ, false); 
                                		return true; 
                                	}
                                }


                                function verifPassword(champ)
                                {
                                    re = /[0-9]/;
                                    if(!re.test(champ.value)) 
                                    {
                                        document.getElementById('erreurPassword').innerHTML = 'Le mot de passe doit comporter au moins un chiffre, une minuscule, une majuscule et comporter au moins 6 caractères';
                                        //champ.focus();
                                        surligne(champ,true);
                                        return false;
                                    }

                                    re = /[a-z]/;
                                    if(!re.test(champ.value)) 
                                    {
                                        document.getElementById('erreurPassword').innerHTML = 'Le mot de passe doit comporter au moins un chiffre, une minuscule, une majuscule et comporter au moins 6 caractères';
                                        surligne(champ,true);
                                        //champ.focus();
                                        return false;
                                    }
          
                                    re = /[A-Z]/;
                                    if(!re.test(champ.value)) 
                                    {
                                        document.getElementById('erreurPassword').innerHTML = 'Le mot de passe doit comporter au moins un chiffre, une minuscule, une majuscule et comporter au moins 6 caractères';
                                        //champ.focus();
                                        surligne(champ,true);
                                        return false;
                                    }

                                    if (champ.value.length < 6 || champ.value.length > 150)
                                    {
                                        document.getElementById('erreurPassword').innerHTML = 'Le mot de passe doit comporter au moins un chiffre, une minuscule, une majuscule et comporter au moins 6 caractères';
                                        surligne(champ, true);
                                        return false;
                                    }

                                    else
                                    {
                                        surligne(champ, false); 
                                        return true; 
                                    }
                                }


                                function verifMail(champ)
                                {
                                	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,6}$/;

                                	if(!regex.test(champ.value))
                                	{
                                        document.getElementById('erreurMail').innerHTML = 'Veuillez saisir une adresse mail valide de la forme exemple@hotmail.fr';
                                		surligne(champ, true);
                                        //champ.focus();
                                		return false; 
                                	}
                                	
                                    else 
                                	{
                                		surligne(champ, false); 
                                		return true; 
                                	}
                                }


                                function verifForm(champ)
                                {
                                    var nameOk = verifName(champ.name);
                                    var firstNameOk = verifFirstName(champ.firstName);
                                    var dateOk = verifDate(champ.date);
                                    var pseudoOk = verifPseudo(champ.username);
                                    var passwordOk = verifPassword(champ.password);
                                    var mailOk = verifMail(champ.mail);

                                    if (nameOk && firstNameOk && dateOk && pseudoOk && passwordOk && mailOk)
                                    {
                                        return true
                                    }

                                    else
                                    {
                                        alert("Veuillez remplir correctement tous les champs");
                                        return false;
                                    }

                                }

                                	
                           

	              	  	</script>


                        </div>
	</body>
</html>