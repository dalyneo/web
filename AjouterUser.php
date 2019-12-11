<?PHP
session_start() ;
$con = mysqli_connect('localhost','root','') ;
mysqli_select_db($con,'web_esprit') ;

		$nom =$_POST['nom'];
		$prenom =$_POST['prenom'];
		$login=$_POST['login'] ;
		$email =$_POST['email'];
		$pwd=$_POST['pwd'];
		$numero=$_POST['numero'] ;
		$s = "select * from users where nom='$nom'" ;
	$resultat = mysqli_query($con,$s) ;
	$num = mysqli_num_rows($resultat) ;
if($num == 1){
	header('location:shop.php') ;
}
	else
	{
		$reg="insert into users (nom,prenom,login,email,pwd,numero) values('$nom','$prenom','$login','$email','$pwd','$numero')";
		mysqli_query($con,$reg) ;
		header('location:shop.php') ;
	}
         
	



?>