<?php require 'header.php';
if (isset($_GET['del']))
{
	$panier->del($_GET['del']) ;
}  

require_once("../../Core/panier.php");
/*include "../../Entites/lignecommande.php";
include "../../Core/commandeC.php";
 if(isset($_GET['ajout_id']))
  {        
	 $id_client=$_SESSION['i'];
          $commande =new commande($id_client,$dateCommande,$prix_total);
                $c= new CommandeC();       
                $c->ajoutercommandes($commande);
                $result=$c->recuperercommandes();
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
  }*/

?>
<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
              <form method="post" action="checkout.php">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">product Name</th>
                      <th class="">product Price</th>
					  <th class="">product Quantité</th>
                      <th class="">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
					  <?PHP
					$ids = array_keys($_SESSION['panier']) ;
					if(empty($ids))
					{
						$products = array() ;
					}
					else{
						$products = $DB->query('SELECT * FROM products WHERE id IN('.implode(',',$ids).')') ;
					}
					
					foreach($products as $product):
					?>
                    <tr class=" ">
                      <td class="">
                        <div class="product-info">
                          <img src="images/shop/products/<?= $product->photo; ?>" />
                          <?PHP echo $product->name; ?>
                        </div>
                      </td>
                      <td class="product-quantity"><input type="number" min="1" max="<?=$product->quantity; ?>" name ="panier[quantity][<?=$product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"></td>
						
						
						<td class=""><?PHP echo number_format($product->price,2,',',' '); ?>D</td>
                      <td class="">
                        <a href="checkout.php?del=<?= $product->id ; ?>" class="product-remove" >Remove</a>
                      </td>
                    </tr>
					  <?php 
			$_SESSION['name']=$product->name ;
            $_SESSION['quantity']=$_SESSION['panier'][$product->id];
            $_SESSION['price']=$product->price; 
            $_SESSION['product_id']=$product->id; 
          endforeach; ?>
                  </tbody>
                </table>
				<div align="center">Prix Total : <?PHP echo number_format($panier->total(),2,',',' ') ; ?>D </div>
				  <input type="submit" value="Recalculer" class="btn btn-main pull-centre"><br>
              </form>
				<a href="checkout1.php?prix_total=<?= $panier->total(); ?>" class="btn btn-main pull-right">Checkout</a>
			<?php
$_SESSION['prix_total']=$panier->total();
?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require 'footer.php';?>
