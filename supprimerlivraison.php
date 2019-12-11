<?PHP
include "../../Core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["id"])){
	$livraisonC->supprimerlivraison($_POST["id"]);
	header('Location: Afficherlivraison.php');
}

?>
