<?php 
session_start(); 


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$response = $bdd->prepare('SELECT DISTINCT sender, receiver FROM chat WHERE (sender = :me OR receiver = :me)');
$response->execute(array(':me' => $_SESSION['username']));

$contacts = array ();


while($donnees = $response->fetch())
{

	if(!in_array($donnees['receiver'], $contacts) && $donnees['receiver'] != $_SESSION['username'])
	{
		$contacts[] = $donnees['receiver'];
	}

	if(!in_array($donnees['sender'], $contacts) && $donnees['sender'] != $_SESSION['username'])
	{
		$contacts[] = $donnees['sender'];
	}

for ($i=0; $i < count($contacts); $i++) 
{ 
	echo "<a href='chat.php?receiver=".$contacts[$i]."'>".$contacts[$i]." </a>"; 
}

?>