<?PHP
include "../Entites/livraison.php" ;
include "../Core/livraisonC.php" ;
	if (isset($_GET['id']) and isset($_GET['nom']) and isset ($_GET['prenom']) and isset($_GET['Pays']) and
	isset($_GET['tel']) and isset($_GET['date_livraison']) and isset($_GET['email']) and isset($_GET['adresse']) )
{
$livraison=new livraison($_GET['id'],$_GET['nom'],$_GET['prenom'],$_GET['Pays'],$_GET['tel'],$_GET['date_livraison'],$_GET['email'],$_GET['adresse']);
$livraisonC=new livraisonC() ;
$livraisonC->Ajouterlivraison($livraison);
$livraisonC->Afficherlivraison($livraison);
}
else
	{
		echo "vérifier les champs";
	}


?>
