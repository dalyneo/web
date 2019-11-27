<?PHP
include "../../Core/commandeC.php";
include "../../Entites/commande.php" ;
if (isset($_GET['dateCommande']) and isset ($_GET['prix_total']) and isset($_GET['id_client']) and isset($_GET['etat']))
{	
$commande=new commande($_GET['dateCommande'],$_GET['prix_total'],$_GET['id_client'],$_GET['etat']);
$commandeC=new CommandeC();
$commandeC->ajoutercommandes($commande);
header('Location: ligne_de_commande.php');
$commandeC->affichercommandes($commande) ;
}
else
{
	echo "vérifier les champs";
}
?>
