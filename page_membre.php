<?php session_start(); 


//on regarde si la variable de session exiqste toujours 
if(empty($_SESSION['username']))
{
	//si n'existe pas on redirige vers la page d'acceuil
	header('Location: test.php'); 
	exit(); 
}
?>


<!--On affiche la page membre-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <!-- page acceuil sans connexion -->



<head>          

    	<meta charset="UTF-8"> 
    	<link rel="stylesheet" href="propriété.css" />
	            
 </head>

<div id="corps"> 

       <body>

        <div id="header">

             

	
                    <div class="titre_principal">
             	
                        
                         <div class="logo">
                              <img src="images/logo.png" alt="logo"/> <!--permet d'insérer le logo -->
                         </div>
                      
                      <h3> Une entraide riche et pratique </h3>
                      
                  </div> 
               


            <!-- barre de recherche -->
                    <div class="recherche_p">

                           <form action="/search" id="searchthis" method="get">
                               <input id="search" name="q" type="text" placeholder="Rechercher" />
                               <input id="search-btn" type="submit" value="Rechercher" />
                          </form>

                   </div>
           
       

              <!-- propriété css de la barre de recherche A CHANGER-->

               <style type='text/css'>/*implémente du code css*/

                     /* Fond du gadget de la barre de recherche */
                          .recherche_p {
                                          background-color: #eeeeee;   /* Couleur de fond */
                                           border-style: solid;   /* Style de la bordure  */
                                           border-width: 1px;   /* Epaisseur de la bordure  */
                                           border-color: black;   /* Couleur de la bordure  */
                                           padding: 10px 10px 10px 10px;   /* Espace entre les bords et le contenu : haut droite bas gauche  */
                                           width: 20%;
                                           margin-top: 60px; 
                                           margin-left: 300px; 

                                           margin-bottom: 100px; 
                                    }

                  /* Champ de saisie */
                         #searchthis #search {
                                          background-color: #ffffff;   /* Couleur de fond */
                                          border-style: solid;   /* Style de la bordure  */
                                          border-width: 1px;   /* Epaisseur de la bordure  */
                                          border-color: #dddddd;   /* Couleur de la bordure  */
                                          padding: 5px 10px 5px 10px;   /* Espace entre les bords et le contenu : haut droite bas gauche  */
                                          width: 98.5%;   /* Permet d'ajuster la largeur du champ de saisie à 100% */
                                          box-sizing: border-box;   /* Important */
                                          font-family: Lato;   /* Police du texte */
                                          font-size: 12px;   /* Taille de la police du texte */
                                          font-weight: normal;   /* Graisse du texte : normal = normal ; bold = gras */
                                          letter-spacing: 1px;   /* Espacement des caractères */
                                    }

                /* Bouton valider */
                       #searchthis #search-btn {
                                         background-color: #10108B;   /* Couleur de fond */
                                         border-style: solid;   /* Style de la bordure  */
                                         border-width: 1px;   /* Epaisseur de la bordure  */
                                         border-color: #E8B960;   /* Couleur de la bordure  */
                                         padding: 5px 10px 5px 10px;   /* Espace entre les bords et le contenu : haut droite bas gauche  */
                                         width: 98.5%;   /* Permet d'ajuster la largeur du champ de saisie à 100% */
                                         box-sizing: border-box;   /* Important */
                                         font-family: PT sans;   /* Police du texte */
                                         font-size: 13px;   /* Taille de la police du texte */
                                         font-weight: normal;   /* Graisse du texte : normal = normal ; bold = gras */
                                         letter-spacing: 2px;   /* Espacement des caractères */
                                         margin: 10px 0 0 0;   /* Espace autour du bouton : haut droite bas gauche  */
                                         text-transform: uppercase;   /* Transforme le texte en majuscules */
                                         color: #ffffff;   /* Couleur du texte */
                                    }

              /* Bouton valider quand survolé par la souris */
                       #searchthis #search-btn:hover {
                                        background-color: #ffffff;   /* Couleur de fond */
                                        color: #E8B960;   /* Couleur du texte */
                                        cursor: pointer;   /* Apparence du curseur comme pour un lien */
                                    }

                              </style>



                   <!-- indication de la date et de l'heure-->

                    <div class="date">

                                 <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p><!--affiche la date et l'heure-->
                     </div>
                     



                      

                      <div class="Deconnexion">
                              <nav>
                                
                                      <a href="deconnexion.php">Déconnexion</a>
                              </nav>
                      </div>
                
                         

                   
                       


          </div>
    

<hr />


        <section> 
                 <!--1er block-->
                 <div class="produits_proche"> 
                   


                         <p> <img src="images/manette.jpg"/> </p><br />
                         <p> A 5OO m </p>
                </div> 


        
                <!--2e block-->
                 <div class="map"> 

                       <p> <img src="images/prototype_map.png"/> </p>


                </div>



                <!--3e block-->

          
                 <div class="compte">

                        <h1> <?php $_SESSION['username']; ?></h1>
                        <hr />

                        <img src="images/hugo_photo.jpg"/>
                        <hr />

                        <?php echo $_SESSION['mail']; ?>
                 </div>

                 
              
        </section>
                 

                   
         
 
   
<hr />
    <!-- bas de page -->
        <footer>

    	     <!-- premier bloc dans le bas de page -->
	            <div id="aide">
	   	        
	   	                <h1>Besoin d'aide ?</h1><br />

	   	                                 <p> <a href="mailto: hugo.demouy@orange.fr"> Contactez-nous </a></p><br />

	   	                                 <p> Questions fréquentes </p><br />
	   	                                 

	   	        </div> <!-- fin du premier bloc -->

	   	     <!-- second bloc -->

	   	        <div id="Nous">
	   	                 
	   	                <h1> A propos de nous</h1><br />

	   	                 <p> Nos engagements </p>

	   	                             
	   
	        	
	           </div>

                <!-- dernier block-->
	         	<div id="informations">

              <h1> Informations légales</h1>

                         <!-- faire en sorte de permettre à l'utilisateur de télécharger un fichier zip-->
     	                 <p> <a href="dl.Me.zip"> Nos Conditions de Ventes</a> </p>

                       <p> <a href="dl.mentions.zip"> Mentions légales</a> </p>

                       <p> <a href="dl.Cookies.zip"> Utilisation des Cookies</a> </p>

                       <p> <a href="dl.Fraudes.zip"> Alertes Fraudes</a> </p>

        
           </div>

        </footer> <!--fin du bas de <page-->


    </div> <!-- fin de la div id="corps" -->



    <!-- mettre les scripts js ici-->

</body> <!-- fin du body -->


</html>  


















