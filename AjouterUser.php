<?PHP
include "User.php" ;
include "UserC.php" ;
if (isset($_POST['nom']) and isset ($_POST['prenom']) and isset($_POST['login']) and isset($_POST['email']) and isset($_POST['pwd']))
		{	
		$User=new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pwd']);
		$UserC=new UserC() ;
		$UserC->AjouterUser($User);
	header('location:shop.html') ;
}
	else
	{
		echo "vérifier les champs";
	}
         
	



?>