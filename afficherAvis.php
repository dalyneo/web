<?PHP
include "../../Core/AvisC.php";
$Avis1C=new AvisC();
$listeAvis=$Avis1C->AfficherAvis() ;
?>

<table border="1">
<tr>
<th>ID</th>
<th>Titre</th>
<th>Commentaire</th>
<th>Note</th>
<th>Modifier</th>
</tr>

<?PHP
foreach($listeAvis as $row)
{
	?>
	<tr>
	<td><?PHP echo $row['Ref']; ?></td>
	<td><?PHP echo $row['Titre']; ?></td>
	<td><?PHP echo $row['Commentaire']; ?></td>
	<td><?PHP echo $row['Avis'];?> / 5</td>
	</tr>
	<?PHP
}
?>
</table>


