<?php session_start();

//on regarde si la variable de session exiqste toujours 
if(empty($_SESSION['username']))
{
	//si n'existe pas on redirige vers la page d'acceuil
	header('Location: test2.php'); 
	exit(); 
}

if(isset($_POST['submit']))
{
	$avatar = $_FILES['avatar']['name'];
	$avatar_tmp = $_FILES['avatar']['tmp_name'];


      if(!empty($avatar_tmp))
      {
      		$image = explode('.',$avatar); //explode pour séparer le nom et l'extension

      		$image_ext = end($image);
      		//print_r($image_ext); //affiche l'extension de l'image

      		if(in_array(strtolower($image_ext),array('png','gif','jpeg','jpg')) === false)
      		{
      			$errors[]="Veuillez saisir une image";
      		}
      }

      if(empty($errors))
      {

      }
      else
      {
      	foreach ($errors as $error) {

      		echo $error;
      		# code...
      	}
      }
}
?>
	<!DOCTYPE html>  

<html> 

<head>          

    	<meta charset="UTF-8"> 
    	<link rel="stylesheet" href="" />
    	<title>avatar upload</title>
	            
 </head>
  <body>
  				
        <form method="post" action="" enctype="multipart/form-data">
        	<input type="file" name="avatar"/><br/><br/>

        	<input type="submit" value="Valider" name="submit"/>
        </form>




  </body>
  </html>

