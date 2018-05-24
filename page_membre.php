<?php session_start(); 


//on regarde si la variable de session exiqste toujours 
if(empty($_SESSION['username']))
{
	//si n'existe pas on redirige vers la page d'acceuil
	header('Location: test2.php'); 
	exit(); 
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>  

<html> 

  <head>          
      <meta charset="UTF-8"> 
      <title> Spick </title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="propriété.css" />
      <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  </head>
   
   <div id="corps"> 
   <body>
   	<div class="container-fluid">                                 <!-- BARRE DU HAUT, CONTENANT LOGO + SIGNIN + SIGNUP -->
      <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-1">
          <img src="logo1.png" class="img-responsive"/>
        </div>
        <div class="col-md-1">
        </div>
 
        <div class="col-md-1">
        <p></p>
        <p></p>
        </div>
       
          <div class="col-md-1">
        <p></p>
        <p></p>
           <a href="depot_produit.php" target="droite" class="btn btn-info" role="button"> Dépôt </a>
          
        </div>

        <div class="col-md-2"/>

        <div class="col-md-1">
        <p></p>
        <p></p>
          <a href="deconnexion.php" class="btn btn-info" role="button"> Se deconnecter </a>
          
        </div>


      </div>  
    </div>

    <p></p>

    <div class="container-fluid">                                      <!-- BARRE DE RECHERCHE -->
      <div class="row">
        <div class="col-md-3">
        </div>
          <div class="col-md-5">
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1"></span>
              <input type="text" class="form-control" placeholder="Que recherchez-vous ?" aria-describedby="sizing-addon1">
          </div>
        </div>
        <div class="col-md-1">
          <button class="btn btn-info btn-lg"> Rechercher </button>
        </div>
      </div>  
    </div>

	<div class="container-fluid space"></div>          <!-- ESPACE ENTRE BARRE RECHERCHE ET CARTE -->

<!--map-->

    <div class="container-fluid menu">

      <div class="row">

          <div class="col-md-4">
            
<hr/>
                <div class="depot_annonce">

                         
                         <div id="sendFormAd">
                         	<div align="center">
                         		<br/><br/><br/><br/>
                                <label for="place"> Adresse :</label>
                                <div class="input-group">
                                	<input type="text" id="place" class="form-control"/><br/><br/><br/>
                       			</div>
                                <label for="message"> Message :</label>
                                <div class="input-group">
                                	<input type="text" id="message" class="form-control"/><br/>
                                </div>
                                <br/>
                                <button class="btn btn-info" id="sendButton" type="button" onclick="sendAd()">Deposer Annonce</button>
                            </div>
                        </div>
              </div>
      
          

           <div class="Mes messages">
           		<div align="center">
                              <nav>
                                
                                      <a href="myMessages.php">Acceder a mes messages</a>
                              </nav>
            	</div>
            </div>





          </div>


          <div class="col-md-4">

            <hr/>

          <div id="map" style="width:100%;height:400px;"></div>         

            <script>
            function myMap() {
              var mapCanvas = document.getElementById("map");
              var mapOptions = {
                center: new google.maps.LatLng(48.864716, 2.349014), zoom: 11.5
              };
              var map = new google.maps.Map(mapCanvas, mapOptions);
            }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChP88CsE61axaYpyERMBViIIEanve983o&callback=myMap"></script>
          </div>


           <div class="annonce"><br/><br/><br/>

                         
                          <div id="advertisements">
                          
                        </div>

              </div>


          <div class="col-md-4"></div>



            </div>
        </div>

            <div class="container-fluid footer">
          <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div align="center">

              <h1> Informations légales</h1>

                           <!-- faire en sorte de permettre à l'utilisateur de télécharger un fichier zip-->
                         <p> <a href="dl.Me.zip"> Nos Conditions de Ventes</a> </p>

                         <p> <a href="dl.mentions.zip"> Mentions légales</a> </p>

                         <p> <a href="dl.Cookies.zip"> Utilisation des Cookies</a> </p>

                         <p> <a href="dl.Fraudes.zip"> Alertes Fraudes</a> </p>
                      </div>
          </div>
      </div>
    </div>

   

    
  </body>
</html> 



<script type="text/javascript">
    
    function sendAd()
    {
        var username = '<?php echo $username;?>';
        var formData = new FormData();
        formData.append("username", username);
        formData.append("message", document.getElementById("message").value);
        formData.append("place", document.getElementById("place").value);

        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "sendAd.php", true);
        xhttp.send(formData);
    }

    function refreshAd()
    {
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "getAd.php", true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("advertisements").innerHTML = this.responseText;
            }
        };
        xhttp.send();
    }

    setInterval(refreshAd, 1000);

</script>