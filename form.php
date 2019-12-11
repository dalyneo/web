<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Formulaire</title>
	<script language="javascript">
		function Afficher()
		{
			var id = document.f1.id.value ;
			var nom = f1.nom.value ;
			var prenom = f1.prenom.Value ;
			if(nom="" || isNaN(nom))
				return 0 ;


			if(nom="")
				return 0 ;


			if(prenom="")
				return 0 ;
		}
	</script>
</head>
<body>
<form name="f1" method="GET" action="Ajouterlivraison.php">
  <table>
<caption>Ajouter livraison</caption>
<tr>
<td>id</td>
<td><input type="number" name="id"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom"></td>
</tr>
<tr>
<td><p align="left">&nbsp;</p>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;</p>
  <p align="left">Pays</p></td>
<td>
  
      <div align="justify">
              <p align="left" class="ct-select ct-select--full" name="Pays">
                <select  name="Pays" class="ct-select ct-select--full">
                  <option name="Ariana" value="Ariana" >Ariana</option>
                  <option name="Beja" value="Beja">Beja</option>
                  <option name="Ben arous" value="Ben arous">Ben arous</option>
                  <option name="Bizerte" value="Bizerte">Bizerte</option>
                  <option name="Gabes" value="Gabes">Gabés</option>
                  <option name="Gafsa" value="Gafsa">Gafsa</option>
                  <option name="Jendouba" value="Jendouba">Jendouba</option>
                  <option name="Kairouan" value="Kairouan">Kairouan</option>
                  <option name="Kasserine" value="Kasserine">Kasserine</option>
                  <option name="Kebili" value="Kebili">Kebili</option>
                  <option name="Kef" value="Kef">Kef</option>
                  <option name="Mahdia" value="Mahdia">Mahdia</option>
                  <option name="Manouba" value="Manouba">Manouba</option>
                  <option name="Medenine" value="Medenine">Medenine</option>
                  <option name="Monastir" value="Monastir">Monastir</option>
                  <option name="Nabeul" value="Nabeul">Nabeul</option>
                  <option name="Sfax" value="Sfax">Sfax</option>
                  <option name="Sidi Bouzid" value="Sidi Bouzid">Sidi Bouzid</option>
                  <option name="Siliana" value="Siliana">Siliana</option>
                  <option name="Sousse" value="Sousse">Sousse</option>
                  <option name="Tataouine" value="Tataouine">Tataouine</option>
                  <option name="Tozeur" value="Tozeur">Tozeur</option>
                  <option name="Tunis" value="Tunis">Tunis</option>
                  <option name="Zaghouan" value="Zaghouan">Zaghouan</option>
                </select>
                <img src="../../../../../../wamp64/www/front/livraison image/image1.png.png" width="105" height="189" longdesc="../../../../../../wamp64/www/front/livraison image/image1.png.png"></p>
          <p class="ct-select ct-select--full" name="Pays"><br>
          </p>
      </div></td>
<tr>
	<td>tel</td>
	<td><input type="tel" class="form-control"  name="tel"   minlength="8" maxlength="8" required>
        </span><br></td>
</tr>
<tr>
	<td>date_livraison</td>
	<td> <input type="date" name="date_livraison">	</td>
</tr>
<tr>
	<td>email</td>
	<td><input type ="text" name="email"</td>
</tr>
<tr>
	<td>adresse</td>
	<td><input type ="text" name="adresse"</td>
</tr>
<tr>
<td></td>
<td><button name="ajouter">Ajouter</button></td>
</tr>
</table>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>
                        <p align="center">&nbsp;</p>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
  <tr></tr>
</form>
</body>
</html>
