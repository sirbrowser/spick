
<!-- SELECT username, password FROM utilisateur WHERE username=$-POST['username'] AND password=$_POST[('password')]; voici l'idée générale de ce qu'on va faire-->



<?php
session_start(); 

$errorMessage =''; 
 /*ici on regarde si les valeurs de champs inscrit par l'utilisateur sont dans la base de données*/

 //si les identifiants sont transmis 
 if(empty($_POST['username']) && empty($_POST['password']))
 {
 
     //recherche dans la base de données 

    	$bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    	$requete = $bdd -> prepare('SELECT username, password FROM utilisateur WHERE username=? AND password=?');
    	$requete -> execute(array($_POST['username'], $_POST['password']));

            /*si ils existent alors...*/
              if($donnes = $requete->fetch())

                    {//si pseudo et password bon alors connexion à la session

                     
                      //on enregistre les variables de visiteurs dans les variables de session
                      $_SESSION['username'] = $_POST['username'];
                      $_SESSION['password'] = $_POST['password'];
                      $_SESSION['mail'] = $_POST['mail']; 
                      
                      //on ouvre la session 

                      //session_start(); 
                      //on redirige vers la page membre 
                      header('Location: page_membre.php'); 
                      exit(); 
                    }
                    
                    //sinon si identifiants incorrects alors...
                    else 
                    {
                      $errorMessage = 'Nous sommes désolé mais vous n\'êtes pas encore inscrit'; 


                        //si le visiteur n'est pas reconnu dans la base de donnée
                        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                        //redirection vers la page d'acceuil
                        echo'<meta http-equiv="refresh" content="0;URL=test.php">';

                    }

} 

//sinon si les champs ne sont pas rempli alors...
else
{
  $errorMessage = 'Veuillez inscrire vos identifiants!'; 

}

?>
