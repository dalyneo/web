<script> 

   function ok()
  {
alert("Votre produit a été ajouté avec succès!");
  }

      
  function surligne(myForm, erreur)
{
   if(erreur)
      myForm.style.backgroundColor = "#fba";
   else
      myForm.style.backgroundColor = "";
}

  function verifNB(myForm)
{
   var  NB= parseInt(myForm.value);
   if(isNaN(NB) || NB < 0 )
   {
      surligne(myForm, true);
      return false;
   }
   else
   {
      surligne(myForm, false);
      return true;
   }
}

   function verifReff(myForm)
{  
  if(myForm.value.length==0)
   {
      surligne(myForm, true);
      return false;
   }
   else
   {
      surligne(myForm, false);
      return true;
   }

}



      
function verifform(f)
{
  
   var NBOk = verifqteP(f.NB);
    var refOk = verifReff(f.ref);
   
   if(NBOk && refOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
</script>
<?php 
include('SecuriteLogin.php');
include('includes/header.php');
include('includes/navbar.php');
unset( $_SESSION['Status']); 
include "../../config.php";

$req="select * from categorie";
$db=config::getConnexion();
$listC=$db->query($req) ;

if (isset($_POST['valider']))
{
  $req="insert INTO products(ref,categ,name,price_gros,price,carac,photo,quantity) values ('".$_POST['ref']."','".$_POST['categ']."','".$_POST['name']."',".$_POST['price_gros'].",".$_POST['price'].",'".$_POST['carac']."','".$_POST['photo']."','".$_POST['quantity']."')";
   
  $db=config::getConnexion();  
  $sql=$db->prepare($req); 
  $sql->execute(); 
 echo "<script> ok(); </script>" ;
 
}

?>
<html>
<head>
<title> Ajouter des produits </title>
<meta charset="utf-8">
</head>
</br>
</br>
<body>
              <div class="card mb-3">
             <div class="card-header">
            <i class="fas fa-table"></i>
            Ajouter un nouveau produit
             </div>
                  <div class="card-body">
            <div class="table-responsive">
  
<form id="myForm" method="POST" onsubmit="return verifform(this)" > 


<label style="font-weight: bold"> Réference </label> 
<input type="text" class="form-control" name="ref" placeholder="Réference du produit" value="" onblur="verifReff(this)" style="width:200px"> </br>

     <label style="font-weight: bold"> Catégorie </label> 

     <select name="categ"> 
      <option>Choisissez une catégorie</option>
      <?php
foreach ($listC as $cat) 
{
  echo('<option> '.$cat['nomC'].' </option>'); 
}

?>


</select> 
</br> 
<label style="font-weight: bold"> Nom du produit </label> 
<input type="text" class="form-control" name="name" placeholder="Nom du produit" value="" onblur="verifReff(this)" style="width:500px"> </br>
<label style="font-weight: bold"> Prix vente en gros </label>
<input type="number"  onblur="verifNB(this)" class="form-control" name="price_gros" value="" placeholder="Prix en Dt" style="width:200px"><a style="font-weight: bold">Dt </a> </br>
<label style="font-weight: bold"> Prix vente en ligne </label> 
 <input type="number" class="form-control" name="price" placeholder="Prix en Dt"value=""  onblur="verifNB(this)"  style="width:200px"><a style="font-weight: bold">Dt </a> </br> 

<label style="font-weight: bold"> Caractéristiques </label> 
<textarea type="text"  style="width:500px" name="carac"  > </textarea> </br>

<label style="font-weight: bold">Ajouter une photo</label>
<input type="file" class="form-control" name="photo" > </br>
<label style="font-weight: bold">quantity</label>
<input type="number" class="form-control" name="quantity">
<input type="submit" value="valider" name="valider" action="produitmail.php"> 
<input type="reset" value="Reset"> 

</form>

</div>
</div>
   <?php 
include('includes/scripts.php');
include('includes/footer.php');
?>  
</body>
</html>