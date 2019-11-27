<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 

include('User.php') ;
$c=new Database();
$conn=$c->connexion();
$user=new User($_POST['login'],$_POST['pwd'],$conn);
$u=$user->Logedin($conn,$_POST['login'],$_POST['pwd']);
$vide=false;
if (!empty($_POST['login']) && !empty($_POST['pwd']))
{
	
	foreach($u as $t)
	{
		$vide=true;
	if ($t['login']==$_POST['login'] && $t['pwd']==$_POST['pwd'])
	{	
		session_start();
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['pwd'];
		$_SESSION['i']=$t['id_client'];
		header("location:shop.php");
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=login.html">'; 
      } 
}	  
 
else { 
     // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=login.html">';  
}  

?> 
</body>
</html>