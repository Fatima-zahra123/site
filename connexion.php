<?php 
 $admins = array("amine","ahmed","fatima");
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
$user = $_POST["nom_d'utilisateur"] ;

if(in_array($user ,$admins)) {
	$_SESSION["user"] = $user;
	
	echo "<p style='font-size : 300% ;text-align :center'>Bienvenue ".$_SESSION["user"]." dans notre site</p>";
}
else
{
	echo "<p style='font-size : 300% ;text-align :center'>Nous ne trouvons pas votre compte.  veuillez s'inscrire</p>";
	
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
