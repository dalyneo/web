<?php
class UserC
{
	function AjouterUser($User)
	{
		require_once "config.php" ;
		$sql = "insert into users (nom,prenom,login,email,pwd) values(:nom,:prenom,:login,:email,:pwd)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':nom',$User->getnom()) ;
			$req->BindValue(':prenom',$User->getprenom()) ;
			$req->BindValue(':login',$User->getLog()) ;
			$req->BindValue(':email',$User->getemail()) ;
			$req->BindValue(':pwd',$User->getPWD()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
}
class ReclamationC
{
	function AjouterRec($Reclamation)
	{
		require_once "config.php" ;
		$sql = "insert into reclamation (nom,email,subject,message) values(:nom,:email,:subject,:message)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':nom',$Reclamation->getnom()) ;
			$req->BindValue(':email',$Reclamation->getemail()) ;
			$req->BindValue(':subject',$Reclamation->getsubject()) ;
			$req->BindValue(':message',$Reclamation->getmessage()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
}
class CommandeC
{
	function AjouterCom($Commande)
	{
		require_once "config.php" ;
		$sql = "insert into commande (nom,email,adresse,num) values(:nom,:email,:adresse,:num)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':nom',$Commande->getnom()) ;
			$req->BindValue(':email',$Commande->getemail()) ;
			$req->BindValue(':adresse',$Commande->getadresse()) ;
			$req->BindValue(':num',$Commande->getnum()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
}
?>