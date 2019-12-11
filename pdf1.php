<?php
  //require 'connect.php';
  $livraisonC = new PDO('mysql:host=localhost;dbname=web_esprit', 'root', '');
  $livraison1C = $livraisonC->prepare('SELECT id,nom,prenom,Pays,tel,date_livraison,email,adresse FROM livraison ORDER BY id ASC ');
  $executeIsOK = $livraison1C->execute();
  $listelivraison= $livraison1C->fetchAll();

 ?> <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col"> id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">Pays</th>
      <th scope="col">tel</th>
      <th scope="col">date_livraison</th>
      <th scope="col">email</th>
      <th scope="col">adresse</th>

    </tr>
  </thead>
  <tbody>
          <?php foreach ($listelivraison as $listelivraison): ?> 
                <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['Pays']; ?></td>
  <td><?PHP echo $row['tel']; ?></td>
  <td><?PHP echo $row['date_livraison']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
  <td><?PHP echo $row['adresse']; ?></td>

                <td>
      
                </td>
                
              </tr>
                  <?php endforeach; 
                  ?>
    </tbody>
</table>