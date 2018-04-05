<?php
require_once('base-back.php');
include_once('../controllers/workshop.php');

$ws = new Workshop();
if(isset($_POST['create'])) {
  $try = $ws->createWorkshop(
      array(
          "name" =>  $_POST['name'],
          "infos" => $_POST['infos'],
          "description" => $_POST['desc'],
          "price" => $_POST['prix'],
          "projects" => $_POST['project']
     ));
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
     ));
}

if(isset($_POST['delete'])) {
  $try = $ws->deleteWorkshop($_POST['id']);
}
?>

<div class="container-fluid">

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading"><h1>Gestion d'atelier</h1></div>
        <div class="panel-body">
          <h3>Créer un atelier</h3>
              <form class="" action="" method="post">

                  <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrer un nom">
                  </div>

                  <div class="form-group">
                    <label for="infos">Infos</label>
                    <input type="text" class="form-control" id="infos" name="infos" placeholder="Entrer les infos">
                  </div>

                  <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="5" cols="30" placeholder="Entrer une description"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="number" class="form-control" id="prix" name="prix" placeholder="Entrer un prix">
                  </div>

                  <div class="form-group">
                    <label for="project">Projets</label>
                    <textarea class="form-control" id="project" name="project" rows="5" cols="30" placeholder="Entrer vos projets"></textarea>
                  </div>

              <button type="submit" class="btn btn-primary" name="create">Créer un atelier</button>
          </form>

          <hr>
          <h3>Modifier Atelier</h3>

          <form class="" action="" method="post">
            <?php
                $ws = new Workshop();
                $atelier = $ws->workshopList();
                $i = 1;

                // $this_atelier = $ws->getWorkshopbyId();
            ?>

              <div class="form-group">
                  <label for="id">Atelier</label>
                  <select class="form-control" id="id" name="id">
                      <?php foreach( $atelier as $at ) : ?>
                        <option value="<?= $at["workshop_id"] ?>"><?= $at["workshop_name"] ?></option>
                        <?php $i++; ?>
                      <?php endforeach; ?>
                  </select>
              </div>

                <div class="form-group">
                  <label for="name">Nom</label>
                  <input type="text" class="form-control" id="name_update" name="name" placeholder="Entrer un nom">
                </div>

                <div class="form-group">
                  <label for="infos">Infos</label>
                  <input type="text" class="form-control" id="infos_update" name="infos" placeholder="Entrer les infos">
                </div>

                <div class="form-group">
                  <label for="desc">Description</label>
                  <textarea class="form-control" id="desc" name="desc" rows="5" cols="30" placeholder="Entrer une description"></textarea>
                </div>

                <div class="form-group">
                  <label for="prix">Prix</label>
                  <input type="number" class="form-control" id="prix_update" name="prix" placeholder="Entrer un prix">
                </div>

                <div class="form-group">
                  <label for="project">Projets</label>
                  <textarea class="form-control" id="project_update" name="project" rows="5" cols="30" placeholder="Entrer vos projets"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" name="update">Modifier l'atelier</button>
        </form>

        </div>
    </div>
</div>

</div>

  </body>
</html>
