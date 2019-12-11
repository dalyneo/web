<?PHP
                    include "../../Core/livreurrC.php";
                    $livreurr1C=new livreurrC();
                    $listelivreurr=$livreurr1C->rechercherlivreurr($_POST['secteur']);
                    ?>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th> cin</th>
<th> login</th>
<th> Nom</th>
<th> Prenom</th>
<th> dispo</th>
<th> secteur</th>
<th> tel</th>
<th> date_naiss</th>
<th> mail</th>
<th> adresse</th>
<th> num_permis</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <?PHP
foreach($listelivreurr as $row){
  ?>
  <tr>
  <tr>
  <td><?PHP echo $row['cin']; ?></td>
  <td><?PHP echo $row['login']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['dispo']; ?></td>
  <td><?PHP echo $row['secteur']; ?></td>
  <td><?PHP echo $row['tel']; ?></td>
  <td><?PHP echo $row['date_naiss']; ?></td>
  <td><?PHP echo $row['mail']; ?></td>
  <td><?PHP echo $row['adresse']; ?></td>
  <td><?PHP echo $row['num_permis']; ?></td>
  <td><form method="POST" action="supprimerlivreurr.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['secteur']; ?>" name="secteur">
  </form>
  </td>
  <td><a href="modifierlivreurr.php?secteur=<?PHP echo $row['secteur']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>

               
    
                  </tfoot>
                  <tbody>
                   
                  </tbody>
                </table>