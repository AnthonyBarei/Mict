<?php
include_once('../controllers/partner.php');

$pn = new Partner();

if(isset($_GET['delete'])) {
  $try = $pn->deletePartner($_GET['delete']);
  header("Location: partners.php");
  exit();
  //die();
}

if(isset($_POST['create'])) {
    $_POST['desc'] = preg_replace("/[\r\n]+/", "<br/>", $_POST['desc']);
    $try = [
        "name" =>  $_POST['name'],
        "image" => $_POST['image'],
        "description" => $_POST['desc'],
        "link" => $_POST['link'],
    ];
    $pn->createPartner($try);
    header('Location: partners.php');
    die();
}

$partenaire = $pn->partnerList();


foreach( $partenaire as $par ) {
    if(isset($_POST['update' . $par['partners_id']])) {
      $_POST['desc' . $par['partners_id']] = preg_replace("/[\r\n]+/", "<br/>", $_POST['desc' . $par['partners_id']]);
        $try = [
                "id" => $_POST['secretid' . $par['partners_id']],
                "image" => $_POST['image' . $par['partners_id']],
                "name" =>  $_POST['name' . $par['partners_id']],
                "description" => $_POST['desc' . $par['partners_id']],
                "link" => $_POST['link' . $par['partners_id']]
            ];

        $pn->updatePartner($try);

    }
}

require_once('base-back.php');
?>

<div class="container-fluid col-md-12">
  <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading"><h1>Gestion des images partenaires</h1></div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-6">
              <form action="../controllers/uploadAlbum.php" method="post" enctype="multipart/form-data">
                <h4>Ajouter la photo d'un partenaire :</h4>
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <input type="hidden" name="directorytarget" value="../assets/images/partners/">
                <input type="hidden" name="redirect" value="../back/partners.php">
                <input type="submit" value="Enregistrer l'image" name="submit">
              </form>
            </div><br>
            <div class="col-md-6">
              <h4>Supprimer la photo d'un partenaire :</h4>
              <?php if($dossier = opendir('../assets/images/partners')){ ?>
                <form action="../controllers/deleteFile.php" method="post">
                  <select class="form-control" name="todeletefile">
                    <?php
                      $fichier = readdir($dossier);
                      $fichier = readdir($dossier);
                      while(false !== ($fichier = readdir($dossier))){
                        echo"<option value='../assets/images/partners/". $fichier ."'>". $fichier ." ";
                      }
                    ?>
                  </select> <br>
                  <input type="hidden" name="redirect" value="../back/partners.php">
                  <input type="submit" value="Supprimer l'image de l'album" name="submit">
                </form>
              <?php }else{ echo("L'album est vide"); } ?>
            </div>
          </div>
           </div>
        </div>

      <div class="panel panel-default">
        <div class="panel-heading"><h1>Ajout d'un partenaire</h1></div>
        <div class="panel-body">
              <form class="" action="" method="post" id="createForm">
                  <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrer un nom">
                  </div>
                  <label for="image">Photo du partenaire</label>
                  <select class="form-control" name="image">
                    <?php
                    if($dossier = opendir('../assets/images/partners')){
                      $fichier = readdir($dossier);
                      $fichier = readdir($dossier);
                      while(false !== ($fichier = readdir($dossier))){
                        echo"<option value='assets/images/partners/". $fichier ."'>". $fichier ." ";
                      }
                    }
                    ?>
                  </select>

                  <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="5" cols="30" placeholder="Entrer une description"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="link">Lien</label>
                    <input class="form-control" id="link" name="link" placeholder="Entrer le lien">
                  </div>

              <button type="submit" class="btn btn-primary" name="create">Ajouter le partenaire</button>
          </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading"><h1>Modification des partenaires</h1></div>
        <div class="panel-body">
          <h3>Choisir le partenaire à modifier :</h3>

                <?php
                    $pn = new Partner();
                    $partenaire = $pn->partnerList();
                    $i = 1;
                    $j = 1;
                ?>

                <script type="text/javascript">
                    var i = 1;
                </script>

                <div class="row" style="padding-right: 30px; padding-left: 30px; margin-bottom: 10px; margin-top: 20px;">
                    <?php foreach( $partenaire as $pa ) : ?>
                        <button type="button" class="btn btn-primary" style="margin-bottom: 10px;" id="<?= $j ?>" onclick="echoData(this)">
                            <?= $pa['partner_name'] ?>
                        </button>
                        <?php $j++ ?>
                    <?php endforeach; ?>
                </div>

                    <?php foreach( $partenaire as $pa ) : ?>
                        <?php/* $k = 0; $pa['partner_infos'] = ($pa['partner_infos'] !== null) ? json_decode($pa['partner_infos']) : null;
                                $total_infos = count($pa['partner_infos']);*/
                        ?>

                            <div class="PARTNER<?= $i ?>">
                                <form class="" action="" method="post">
                                    <div class="form-group" id="updateName<?= $pa['partners_id'] ?>">
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" id="name_update" name="name<?= $pa['partners_id'] ?>" value="<?= $pa['partner_name'] ?>" placeholder="Entrer un nom">
                                    </div>

                                    <label for="image">Photo du partenaire</label>
                                    <select class="form-control" name="image<?= $pa['partners_id'] ?>">
                                      <?php
                                      if($dossier = opendir('../assets/images/partners')){
                                        $fichier = readdir($dossier);
                                        $fichier = readdir($dossier);
                                        while(false !== ($fichier = readdir($dossier))){
                                          echo"<option value='assets/images/partners/". $fichier ."'>". $fichier ." ";
                                        }
                                      }
                                      ?>
                                    </select>

                                    <div class="form-group" id="updateDescription<?= $pa['partners_id'] ?>">
                                      <label for="desc">Description</label>
                                      <textarea class="form-control" id="desc" name="desc<?= $pa['partners_id'] ?>" rows="5" cols="30" placeholder="Entrer une description"><?= $pa['partner_description'] ?></textarea>
                                    </div>

                                    <div class="form-group" id="updateLink<?= $pa['partners_id'] ?>">
                                        <label for="link">Lien</label>
                                        <input type="text" class="form-control" id="link_update" name="link<?= $pa['partners_id'] ?>" value="<?= $pa['partner_link'] ?>" placeholder="Entrer un lien">
                                    </div>

                                    <input type="hidden" name="secretid<?= $pa['partners_id'] ?>" value="<?= $pa['partners_id'] ?>">

                                    <button id="updateButton<?= $pa['partners_id'] ?>" type="submit" class="btn btn-primary" name="update<?= $pa['partners_id'] ?>">Sauvegarder les modifications</button>
                                    <a href="partners.php?delete=<?= $pa['partners_id'] ?>" onclick="return confirm('êtes vous sûr de vouloir supprimer ce partenaire?');"><i class="fas fa-times fa-2x" style="float: right; margin-top: 5px;"></i></a>
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
    <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading"><h1>Rendu</h1></div>
          <div class="panel-body">
            <iframe
            src="iframes/partenaires.php" width="100%" height="500" sandbox="allow-same-origin allow-scripts"></iframe>
          </div>
        </div>
      </div>
</div>


<script type="text/javascript">
    for(j = 1; j < i; j++) {
        $('.PARTNER' + j).hide();
    }

    function echoData(elem) {
        for(j = 1; j < i; j++) {
            $('.PARTNER' + j).hide();
        }

        var id = $(elem).attr("id");
        $('.PARTNER' + id).show();
    }
</script>


  </body>
</html>
