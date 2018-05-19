<?php 

require('includes/page_membre.php');

require('includes/enregistrer_demande.php');

$username = ($_GET['id']);

$requete = "SELECT * FROM demande WHERE username = '$username'";
$valeur = mysql_query($requete);
$tab = array();

while($tab = mysql_fetch_array($valeur))
{
		$username = $tab['username'];
		$message = $tab['message'];

		print("<a href=\"afficher_annonces.php?id=$username\">$message</a>");
		

		$description = substr($tab['description'], 0,30);
		print("<br>".nl2br($description)."...<br>");
		

}