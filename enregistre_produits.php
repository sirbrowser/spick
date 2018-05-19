<?php 
       /*cette requête permet d'enregistrer notre message en tant qu'annonce dans la bas de données*/

    $bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 

    $requete = $bdd -> prepare('INSERT INTO produits_utilisateur(nom_produit, quantinté_produit, type_produit, taille, username) VALUES(?,?,?,?,?)'); 
    $requete -> execute(array($_POST['nom_produit'], $_POST ['quantinté_produit'], $_POST['type_produit'], $_POST['taille'], $_POST['username']));

    
 
?>