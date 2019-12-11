<?php
require '_header.php'; 
//require_once "connexion.php" ;
include "../../Core/lignecommandeC.php"; 
//require_once "../../Core/commandeC.php"; 
include "../../Entites/commande.php"; 
include "../../Entites/lignecommande.php";
if(!isset($_SESSION['panier']))
{
header('Location:shop.php');
}

if (!isset($_SESSION['l']) && !isset($_SESSION['p'])) 
{
header('Location:login.html'); 
}
if(isset($_GET['ajout_id']))
  {
   		
		$id_client=$_SESSION['i'];
        $dateCommande= date("Y-m-d");
        $prix_total=$_SESSION['prix_total'];
	  $test=true;
    if($test==true)
	{
          $commande =new commande($id_client,$dateCommande,$prix_total);
                $c= new CommandeC();       
                $c->ajoutercommandes($commande);
                $result=$c->recuperercommandes($id_client);
                foreach ($result as $value) 
                {
                     $idCommande=$value['idCommande'];
                }      

     $ldcc=new ligneCommandeC();
             	$qteProduit=$_SESSION['quantity'];
                $prixProduit=$_SESSION['price'];
                $id_produit=$_SESSION['product_id'];
                $ldc=new lignecommande($idCommande,$id_produit,$prixProduit,$qteProduit);
                $ldcc->ajouterlignecommandes($ldc);
   				unset($_SESSION['panier']);
	}
}
require 'header.php';
?>
<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">product Name</th>
                      <th class="">product Price</th>
                    </tr>
                  </thead>
                  <tbody>
					 <tr>
                          <?php
   								$ids=array_keys($_SESSION['panier']);
   										if(empty($ids))
   														{
											$products=array();
   											}else{
   											$products=$DB->query('SELECT * FROM products WHERE id IN('.implode(',',$ids).')');
   														}
   										foreach ($products as $product):
 								?>
                          <td><?= $product->name ?><strong> x  <?= $_SESSION['panier'][$product->id]; ?></strong></td>
                          <td><?= $product->price ?>D</td>

                        </tr>
                        
                        <?php endforeach; ?>
                  </tbody>
					 <tfoot>
				 <tr>
                          <th>Total</th>
                          <td><?= $panier->total();?>D</td>
                        </tr>
						  </tfoot>
					
                </table>
					 <a href="checkout1.php?ajout_id=true" class="btn btn-main pull-right">Place order</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require 'footer.php';?>

