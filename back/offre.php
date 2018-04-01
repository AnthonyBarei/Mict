<?php require_once('base-back.php');
include_once('../controllers/workshop.php'); ?>

<!-- j'ai supprimé ton brouillon -->

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
     $i = 1; ?>

     <h3>Atelier à modifier</h3>
     <form class="" action="" method="post">
     <select name='id'>
     <?php foreach( $atelier as $at ) : ?>
       <option value="<?= $i ?>"><?= $at["workshop_name"] ?></option>
       <?php $i++; ?>
   <?php endforeach; ?>
     </select><br>
     <label>nom</label><input type="text" name="name" value=""><br>
     <label>infos</label><input type="text" name="infos" value=""><br>
     <label>description</label><textarea name="desc" rows="5" cols="30"></textarea><br>
     <label>prix</label><input type="number" name="prix" value=""><br>
     <label>projets</label><textarea name="project" rows="5" cols="30"></textarea>
     <button type="submit" name="button">Modifier la ligne</button>
     </form>

  </body>
</html>
