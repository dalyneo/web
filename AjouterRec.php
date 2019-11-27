<?PHP
include "User.php" ;
include "UserC.php" ;
	if (isset($_POST['nom'])and isset($_POST['email']) and isset($_POST['subject']) and isset($_POST['message']))
{	
$Reclamation=new Reclamation($_POST['nom'],$_POST['email'],$_POST['subject'],$_POST['message']);
$ReclamationC=new ReclamationC() ;
$ReclamationC->AjouterRec($Reclamation) ;
echo '<body onLoad="alert(\'Merci\')">';
header("Location: shop.html");
}
else
	{
		echo "vérifier les champs";	
	}


?>