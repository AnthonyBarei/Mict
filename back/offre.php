<?php require_once('base-back.php');
include_once('../controllers/workshop.php'); ?>
<?php /*
 $ws = new Workshop();
 $atelier = $ws->workshopList();

 foreach( $atelier as $at ){

   echo('<form>');
   echo ('<h2>' . $at["workshop_name"].'</h2>');

   echo($at["workshop_infos"]); //TODO parser ce json pour l'afficher proprement
   echo ('<div class="acc2">3 heures&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;3 à 6 personnes&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;chez toi ou tes amis&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Paris / région parisienne&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;tout inclus</div>');

   echo("<p>" . $at["workshop_description"] . "<p>" );

   echo ('</div>');
 }*/ ?>


         <?php

          $ws = new Workshop();


          if(isset($_POST['button'])) {
              $try = $ws->updateWorkshop(
                  array(
                      "id" => $_POST['id'],
                      "name" =>  $_POST['name'],
                      "infos" => $_POST['infos'],
                      "description" => $_POST['desc'],
                      "price" => $_POST['prix'],
                      "projects" => $_POST['project']
                 )
             );
          }
         ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
     $ws = new Workshop();
     $atelier = $ws->workshopList();
     $i = 1;

     echo('<h3>Atelier à modifier</h3>');
     echo('<form class="" action="" method="post">');
     echo("<select name='id'>");
     foreach( $atelier as $at ){
       echo('<option value="'. $i .' ">'. $at["workshop_name"] .'</option>');
       $i++;
     }
     echo ("</select><br>");
     echo('<label>nom</label><input type="text" name="name" value=""><br>');
     echo('<label>infos</label><input type="text" name="infos" value=""><br>');
     echo ('<label>description</label><textarea name="desc" rows="5" cols="30"></textarea><br>');
     echo('<label>prix</label><input type="number" name="prix" value=""><br>');
     echo('<label>projets</label><textarea name="project" rows="5" cols="30"></textarea>');
     echo('<button type="submit" name="button">Modifier la ligne</button>');
     echo('</form>');
?>
  </body>
</html>
