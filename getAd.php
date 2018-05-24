<?php 
        
session_start(); 

//Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// On récupère les 8 dernières annonces
$req = $bdd->prepare('SELECT id, message, username, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM advertisement ORDER BY date DESC LIMIT 0, 8');
$req->execute(array());

while ($donnees = $req->fetch())
{
     
    echo '<p><strong>' . "<a href='chat.php?receiver=".$donnees['username']."'>".$donnees['username']."</a>". '</strong> :' . nl2br($donnees['message']) . '</p>'; 
}
   

$req->closeCursor();
    
?>