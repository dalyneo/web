<?PHP
include "commandeC.php";
class ligneCommandeC {
function afficherLigneCommande($lignecommande){
		echo " ".$lignecommande->getidCommande()."<br>";
		echo " ".$commande->getidLigneCommande()."<br>";
		echo " ".$commande->getid_produit()."<br>";
		echo " ".$commande->getidquantite()."<br>";
		echo " ".$commandes->getprixUnitaire()."<br>";
	
		
	}
	function ajouterlignecommandes($lignecommande){
		$sql="insert into lignecommande (quantiteCommande,prixUnitaire,idCommande,id_produit) values(:quantiteCommande,:prixUnitaire,:idCommande,:id_produit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idCommande=$lignecommande->getidCommande();
        $id_produit=$lignecommande->getid_produit();
        $prixUnitaire=$lignecommande->getprixUnitaire();
        $quantiteCommande=$lignecommande->getquantite();
        
		$req->bindValue(':idCommande',$idCommande);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':prixUnitaire',$prixUnitaire);
		$req->bindValue(':quantiteCommande',$quantiteCommande);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur (ajout): '.$e->getMessage();
        }
		
	}
	
	
}

?>