<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start (); 
require('User.php') ;
$c=new Database();
$conn=$c->connexion();
$user=new UserEmail($_POST['email'],$conn);
$u=$user->LogedinF($conn,$_POST['email']);
$vide=false;
if (!empty($_POST['email'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['email']==$_POST['email'])
	{	
		$email = $_POST['email'] ;
		$subject = "Kimolu";
		$txt = "Create new account!";
		$headers = "From: donotreply@fmt.com" . "\r\n" .
		"CC: somebodyelse@example.com";
		mail($email,$subject,$txt,$headers); 
		echo '<body onLoad="alert(\'Mail envoyée\')">';
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';

		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=login.html">'; 
      } 
}	  
 
else { 
     // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=login.html">';  
}  

?> 
</body>
</html>