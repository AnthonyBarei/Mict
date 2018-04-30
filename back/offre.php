<?php

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
    header("Location: /Mict/back/offre.php");
    die();
}

$atelier = $ws->workshopList();

foreach( $atelier as $at ) {
    if(isset($_POST['update' . $at['workshop_id']])) {
        $try = $ws->updateWorkshop(
          array(
              "id" => $_POST['secretid' . $at['workshop_id']],
              "name" =>  $_POST['name' . $at['workshop_id']],
              "infos" => $_POST['infos' . $at['workshop_id']],
              "description" => $_POST['desc' . $at['workshop_id']],
              "price" => $_POST['prix' . $at['workshop_id']],
              "projects" => $_POST['project' . $at['workshop_id']]
         ));
    }
}

if(isset($_GET['delete'])) {
  $try = $ws->deleteWorkshop($_GET['delete']);
  header("Location: /Mict/back/offre.php");
  die();
}

require_once('base-back.php');
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

                <?php
                    $ws = new Workshop();
                    $atelier = $ws->workshopList();
                    $i = 1;
                    $j = 1;
                ?>

                <script type="text/javascript">
                    var i = 1;
                </script>

                <div class="row" style="padding-right: 30px; padding-left: 30px; margin-bottom: 10px; margin-top: 20px;">
                    <?php foreach( $atelier as $at ) : ?>
                        <button type="button" class="btn btn-primary" style="margin-bottom: 10px;" id="<?= $j ?>" onclick="echoData(this)">
                            <?= $at['workshop_name'] ?>
                        </button>
                        <?php $j++ ?>
                    <?php endforeach; ?>
                </div>

                    <?php foreach( $atelier as $at ) : ?>

                            <div class="WORKSHOP<?= $i ?>">
                                <form class="" action="" method="post">
                                    <div class="form-group" id="updateName<?= $at['workshop_id'] ?>">
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" id="name_update" name="name<?= $at['workshop_id'] ?>" value="<?= $at['workshop_name'] ?>" placeholder="Entrer un nom">
                                    </div>

                                    <div class="form-group" id="updateInfos<?= $at['workshop_id'] ?>">
                                      <label for="infos">Infos</label>
                                      <input type="text" class="form-control" id="infos_update" name="infos<?= $at['workshop_id'] ?>" value="<?= $at['workshop_infos'] ?>" placeholder="Entrer les infos">
                                    </div>

                                    <div class="form-group" id="updateDescription<?= $at['workshop_id'] ?>">
                                      <label for="desc">Description</label>
                                      <textarea class="form-control" id="desc" name="desc<?= $at['workshop_id'] ?>" rows="5" cols="30" placeholder="Entrer une description"><?= $at['workshop_description'] ?></textarea>
                                    </div>

                                    <div class="form-group" id="updatePrice<?= $at['workshop_id'] ?>">
                                      <label for="prix">Prix</label>
                                      <input type="number" class="form-control" id="prix_update" name="prix<?= $at['workshop_id'] ?>" value="<?= $at['workshop_price'] ?>" placeholder="Entrer un prix">
                                    </div>

                                    <div class="form-group" id="updateProject<?= $at['workshop_id'] ?>">
                                      <label for="project">Projets</label>
                                      <textarea class="form-control" id="project_update" name="project<?= $at['workshop_id'] ?>" rows="5" cols="30" placeholder="Entrer vos projets"><?= $at['workshop_projects'] ?></textarea>
                                    </div>

                                    <input type="hidden" name="secretid<?= $at['workshop_id'] ?>" value="<?= $at['workshop_id'] ?>">

                                    <button id="updateButton<?= $at['workshop_id'] ?>" type="submit" class="btn btn-primary" name="update<?= $at['workshop_id'] ?>">Modifier l'atelier</button>
                                <a href="/Mict/back/offre.php?delete=<?= $at['workshop_id'] ?>" onclick="return confirm('êtes vous sûr de vouloir supprimer cet atelier ?');"><i class="fas fa-times fa-2x" style="float: right; margin-top: 5px;"></i></a>
                                </form>
                            </div>

                        <?php $i++; ?>
                        <script type="text/javascript">
                            i++;
                        </script>
                    <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    for(j = 1; j < i; j++) {
        $('.WORKSHOP' + j).hide();
    }

    function echoData(elem) {
        for(j = 1; j < i; j++) {
            $('.WORKSHOP' + j).hide();
        }

        var id = $(elem).attr("id");
        $('.WORKSHOP' + id).show();
    }

    // var str = document.getElementById("demo").innerHTML;
    // var res = str.replace("Microsoft", "W3Schools");
    // document.getElementById("demo").innerHTML = res;
</script>


  </body>
</html>
