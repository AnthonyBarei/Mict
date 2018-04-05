<?php require_once('base-back.php');
include_once('../controllers/workshop.php'); ?>
         <?php
          $ws = new Workshop();
          if(isset($_POST['create'])) {
              $try = $ws->createWorkshop(
                  array(
                      "name" =>  $_POST['name'],
                      "infos" => $_POST['infos'],
                      "description" => $_POST['desc'],
                      "price" => $_POST['prix'],
                      "projects" => $_POST['project']
                 )
             );
          }

          if(isset($_POST['update'])) {
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
          if(isset($_POST['delete'])) {
              $try = $ws->deleteWorkshop($_POST['id']);
          }


         ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!----------------FORM CREATE START-------------------->
    <h3>Créer un atelier</h3>
    <form class="" action="" method="post">
    <label>nom</label><input type="text" name="name" value=""><br>
    <label>infos</label><input type="text" name="infos" value=""><br>
    <label>description</label><textarea name="desc" rows="5" cols="30"></textarea><br>
    <label>prix</label><input type="number" name="prix" value=""><br>
    <label>projets</label><textarea name="project" rows="5" cols="30"></textarea>
    <button type="submit" name="create">Créer un atelier</button>
    </form>
    <!----------------FORM CREATE END-------------------->

    <!----------------FORM UPDATE START-------------------->
    <?php
     $ws = new Workshop();
     $atelier = $ws->workshopList();
     $i = 1; ?>

     <h3>Atelier à modifier</h3>
     <form class="" action="" method="post">
     <select name='id'>
     <?php foreach( $atelier as $at ) : ?>
       <option value="<?= $at["workshop_id"] ?>"><?= $at["workshop_name"] ?></option>
       <?php $i++; ?>
   <?php endforeach; ?>
     </select><br>
     <label>nom</label><input type="text" name="name" value=""><br>
     <label>infos</label><input type="text" name="infos" value=""><br>
     <label>description</label><textarea name="desc" rows="5" cols="30"></textarea><br>
     <label>prix</label><input type="number" name="prix" value=""><br>
     <label>projets</label><textarea name="project" rows="5" cols="30"></textarea>
     <button type="submit" name="update">Modifier l'atelier'</button>
     </form>
     <!----------------FORM UPDATE END-------------------->

     <!----------------FORM DELETE START-------------------->
     <?php
      $ws = new Workshop();
      $atelier = $ws->workshopList();
      $i = 1; ?>

      <h3>Atelier à supprimer</h3>
      <form class="" action="" method="post">
        <select name='id'>
        <?php foreach( $atelier as $at ) : ?>
          <option value="<?= $at["workshop_id"] ?>"><?= $at["workshop_name"] ?></option>
          <?php $i++; ?>
        <?php endforeach; ?>
        </select><br>
        <button type="submit" name="delete">Supprimer l'atelier</button>
      </form>
     <!----------------FORM DELETE end-------------------->

  </body>
</html>
