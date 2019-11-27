<?PHP
include "User.php" ;
include "UserC.php" ;
	if (isset($_POST['nom'])and isset($_POST['email']) and isset($_POST['adresse']) and isset($_POST['num']))
{	
$Commande=new Commande($_POST['nom'],$_POST['email'],$_POST['adresse'],$_POST['num']);
$CommandeC=new CommandeC() ;
$CommandeC->AjouterCom($Commande) ;
header("Location: confirmation.html");
}
else
	{
		echo "vérifier les champs";	
	}


?>