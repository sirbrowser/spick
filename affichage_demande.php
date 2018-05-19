<?php 
        session_start(); 
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Annonces</title>
	<link href="Prop_annonces.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>ANNONCES</h1>
        <p>Dernières annonces :</p>
 
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On récupère les 8 dernières annonces
$req = $bdd->query('SELECT id, message, username, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM advertisement ORDER BY date DESC LIMIT 0, 8');

while ($donnees = $req->fetch())
{
?>
<div class="news">

    
    
     <p> <strong> <?php echo nl2br($donnees['username']); ?> </strong> : <?php echo nl2br($donnees['message']); ?>
    <br />
   
</div>
<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
</body>
</html>


