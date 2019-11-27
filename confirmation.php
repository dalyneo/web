<?PHP
require_once 'header.php' ;
?>
<?PHP
require '_header.php' ;
if (isset($_GET['id']))
{
	$product = $DB->query('SELECT id FROM products WHERE id =:id', array('id' => $_GET['id'])) ;
	if(empty($product)) 
	{
		die("ce produit n'existe pas") ;
	}
	$panier->add($product[0]->id) ;
}
else
{
	die("Vous n'avez pas selectionné de produit a ajouter au panier") ;
}
?>
<!-- Page Wrapper -->
<section class="page-wrapper success-msg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        	<i class="tf-ion-android-checkmark-circle"></i>
          <h2 class="text-center">Thank you! For your confidence</h2>
          <a href="shop.php" class="btn btn-main mt-20">Continue Shopping</a>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.page-warpper -->

<?PHP
require_once 'footer.php' ;
?>