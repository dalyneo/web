<?PHP
include "../../Entites/avis.php" ;
include "../../Core/avisC.php" ;
 	if (isset($_GET['Ref']) and isset ($_GET['Titre']) and isset($_GET['Commentaire']) and isset($_GET['Avis']))
{	
$feedback=new feedback($_GET['Ref'],$_GET['Titre'],$_GET['Commentaire'],$_GET['Avis']/*$_GET['user_ip']*/);
$AvisC =new AvisC() ;
$AvisC->AjouterAvis($feedback);
$AvisC->AfficherAviss($feedback);
}
else
	{
		echo 'alert("Erreur")';	
	}


?>