<?PHP
require_once ("../../Entites/video.php");
require_once ("../../Core/videoC.php") ;

if (isset($_GET['id']) and isset($_GET['name']) and isset($_GET['description'])){
$video=new video($_GET['id'],$_GET['name'],$_GET['description']);
$video1C=new videoC();
$video1C->ajoutervideos($video);
	
}else{
	echo "vérifier les champs";
}
//*/

?>