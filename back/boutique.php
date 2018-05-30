<?php require_once('base-back.php'); ?>

    <div class="container-fluid">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Paramètres de connexion de la boutique</div>
        <div class="panel-body">
            <?php
// Connexion à MySQL
$base=mysqli_connect("localhost", "root", "root", "mict");

if(isset($_POST['Bouton'])) {
   // Réecriture des variables
   $lien=$_POST['lien'];
   // Requête de modification d'enregistrement
   $ModifierBoutique="UPDATE boutique SET
   lien='$lien'
   WHERE id=1";
   // Exécution de la requête
   $resultat=mysqli_query($base, $ModifierBoutique);
   // Contrôle sur la requête
   if(!$resultat) {
    die('Erreur SQL !'.$ModifierBoutique.'<br />'.mysql_error());
   }
   else {
     echo "<p>La mise à jour a bien été effectuée !</p>";
   }
} // Fin du test isset
?>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table class="table table-responsive">
<tr>
<?php
// lancement de la requete
$req = "SELECT Lien FROM boutique WHERE id=1";
$res = $base->query($req);
echo "<table>";
$data = mysqli_fetch_array($res);
// on affiche les résultats

echo "<tr>Lien actuel de la boutique : ".$data['Lien']."</tr>";
?>

<td>Nouveau lien de la boutique : </td>
<td><input type="text" name="lien"></td>
</tr>
<tr>
<td>
<input type="hidden" name="MM_update" value="form1">
<input type="submit" name="Bouton" value="Modifier">
</td>
</tr>
</table>
</form>
<?php
mysqli_close($base);
?>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading">Rendu</div>
        <div class="panel-body">
                    <iframe
 src="<?php echo $data['Lien'] ?>"
 width="100%" height="500"
 sandbox="allow-same-origin allow-scripts">
</iframe>
        </div>
      </div>
    </div>

	    </div>

  </body>
</html>
