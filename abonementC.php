<?php 

class abonementC

{
    function ajouterabonement($abonement)
{
require_once('../Entites/abonement.php');		
		$sql="insert into abonement (id, nom, prenom, email) values (:id, :nom, :prenom, :email)";
		$db = config::getConnexion();
        
		try{
        $req=$db->prepare($sql);
            
		$id=$abonement->getId();
        $nom=$abonement->getNom();
        $prenom=$abonement->getPrenom();
        $email=$abonement->getEmail();
        
            
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		
            $req->execute();
           
        }
		catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function Afficherabonement($abonement)
	{
		echo "id: ".$abonement->getId()."<br>";
		echo "nom: ".$abonement->getNom()."<br>";
		echo "prenom: ".$abonement->getPrenom()."<br>";
		echo "email: ".$abonement->getEmail()."<br>";
	}
	
	function afficher_abonement()
	{
		$sql="SElECT * From abonement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function suppabonement($id)
	{ 
		$sql="DELETE FROM abonement where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherclient($search_key)
	{   
		$sql="SELECT * FROM abonement where id like '%$search_key%' or nom like '%$search_key%' or prenom like '%$search_key%' or email like '%$search_key%' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}
?> 
 
