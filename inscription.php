<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

 $name = $_POST["nom_d'utilisateur"];
 
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
               echo  "<p style='font-size : 300% ;text-align :center'>Seuls les lettres et espaces sont autorisés</p>";


    }
	
	$email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo  "<p style='font-size : 300% ;text-align :center'>Format d'email invalide <br> </p>" ;
    }
	

 $mot_de_passe =  $_POST["mot_de_passe"];
	if (preg_match("/^[a-zA-Z-']*$/",$mot_de_passe)) {
      echo  "<p style='font-size : 300% ;text-align :center;  margin-top :200px'>Le mot de passe n'est pas fort ,ajoutez des nombres</p>";
    }
	


	
 if (preg_match("/^[a-zA-Z-' ]*$/",$name) && filter_var($email, FILTER_VALIDATE_EMAIL))
	 {
		 echo "<p style='font-size : 300% ;text-align :center; margin-top :320px'>vous avez inscrit avec succés à notre site  <br>Soyez le Bienvenue</p>";
		 
		 
	 }	 
	
	
}
	
else {
	
	
	echo 'Error : You can\'t browse this page directly ' ;
	
	
}



?>


<html>
<style>

body{
height :100vh;
background-color : #ca2996;
background :linear-gradient(  #ca2996 ,#6e0d8b  ) no-repeat;



}
</style>

<body>


</body>

</html>