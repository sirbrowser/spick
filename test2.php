<!DOCTYPE html>  

<html> 

	<head>          
	    <meta charset="UTF-8"> 
	    <title> Spick </title>
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="propriété.css" />
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
 				<div class="col-md-4">
 				</div>
 				<div class="col-md-1">
 				<p></p>
 					<a href="javascript:ouvre('LOGIN.php')" class="btn btn-info" role="button"> Se connecter </a>
 					
 				</div>
 				<div class="col-md-1">
 				<p></p>
 					<a href="javascript:ouvre('SignUP V_2.php')" class="btn btn-info" role="button"> S'enregistrer </a>
 					<script langage="javascript">                  
                        function ouvre(page) /*permet d'ouvrir une pop-up afin de se co ou de s'inscrire*/
                        {
                          ff=window.open(page, "nom_popup", "menubar=no, status=no, scrollbars=no, menubar=no, width=500, height=500");
                        }
                    </script>
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


                  
	 	<div class="container-fluid menu">
	 		<div class="row">
	 				<div class="col-md-4"></div>
	 				<div class="col-md-4">
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