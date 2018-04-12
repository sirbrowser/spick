<pre>
  <form action="affichage_produit.php" method="POST" autocomplete="off">
    <?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST')//si formulaire non-validé, a sert à rien
    {

        $produits_valide = true;
        switch ($_POST['produits']) //quel type de produit choisit
        {
             case 'Electroménager':

    ?> 

            <!--<input name="Electroménager" id="Electroménager"/> <label for="Electroménager"><strong>Electroménager</strong></label><br /><br />-->

            <strong>Electroménager</strong> <br /><br />
            <input type="checkbox" name="grille pain">grille pain </input> <br />

            <input type="checkbox" name="cafetière">cafetière</input><br />

            <input type="checkbox" name="mixeur">mixeur</input> <br />

            <input type="checkbox" name="micro onde">micro onde</input> <br />

            <input type="checkbox" name="théière">théière</input><br />

            <input type="checkbox" name="bouilloire">bouilloire</input> <br />

            <input type="checkbox" name="Cuiseur Vapeur">cuiseur vapeur</input><br />

            <input type="checkbox" name="Autres">Autres</input><br />
            <p><input type="submit" name="valide" value="valider"></p>
      
     <?php 
                 break;

                 case 'Alimentation':

     ?>
     
                    <!-- chexkboxe pour des produits alimentaire-->
          <strong>Alimentation</strong> <br /><br />
          <input type="checkbox" name="pain">pain </input> <br />

          <input type="checkbox" name="bolognaise">bolognaise</input> <br />

          <input type="checkbox" name="dessert">dessert</input> <br />

          <input type="checkbox" name="viande">viande</input> <br />

          <input type="checkbox" name="boisson">boisson</input> <br />

          <input type="checkbox" name="poisson">poisson</input> <br />

          <input type="checkbox" name="légumes">légumes</input><br />
          <p><input type="submit" name="valide" value="valider"></p>

     <?php 
               break; 

               case 'Jouets/électronique':
     ?>
               
            <!-- chexkboxe pour des produits de loisirs et jouets electronique-->
          <strong>Jouets/électronique</strong> <br /><br />
          <input type="checkbox" name="légos">légos</input> <br />

          <input type="checkbox" name="jeux vidéos">jeux vidéos</input> <br />

          <input type="checkbox" name="télécommandé">télécommandé</input><br />

          <input type="checkbox" name="ordinateur">ordinateur</input><br />

          <input type="checkbox" name="téléphone">téléphone</input><br />

          <input type="checkbox" name="sono">sono</input><br />

          <input type="checkbox" name="ecouteur">écouteur</input><br />
          <p><input type="submit" name="valide" value="valider"></p>

     <?php 
            break; 

            case 'Vaisselle': 


        ?>    

            <!-- chexkboxe pour des produits de vaisselle-->
           <strong>Vaisselle</strong> <br /><br />
          <input type="checkbox" name="couvert">couvert</input><br />

          <input type="checkbox" name="verre">verre</input> <br />

          <input type="checkbox" name="plats">plats</input> <br />

          <input type="checkbox" name="decapsuleur">décapsuleur</input> <br />

          <input type="checkbox" name="tire-bouchon">tire-bouchon</input><br />

          <input type="checkbox" name="Autres"> Autres</input><br />
          <p><input type="submit" name="valide" value="valider"></p>

     <?php 

     
             default:
                 echo "Je n'ai pas compris votre choix. \n"; 
                 $produits_valide = false; 
                 break;
         } 
    }
     
?>
</form>
</pre>


<!--     <inpt type="hidden" name="pseudo" value="Hugo" /> 
    Ceci sert à retenir le pseudo du visiteur sans pour autant lui montrer mais cette variable $_POST['pseudo'] sera créée, et elle azura la valeur de "Hugo" ! -->