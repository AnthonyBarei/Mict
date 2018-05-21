<?php require_once('base-back.php'); ?>
<?php

include_once('../controllers/partner.php');

$pn = new Partner();
if(isset($_POST['create'])) {
    $try = [
        "name" =>  $_POST['name'],
        "description" => $_POST['desc'],
        "link" => $_POST['link'],
    ];
        $pn->createPartner($try);
    header("Location: /Mict/back/partners.php");
    die();
}

$partenaire = $pn->partnerList();


foreach( $partenaire as $par ) {
    if(isset($_POST['update' . $par['partners_id']])) {
        $try = [
                "id" => $_POST['secretid' . $par['partners_id']],
                "name" =>  $_POST['name' . $par['partners_id']],
                "description" => $_POST['desc' . $par['partners_id']],
                "link" => $_POST['link' . $par['partners_id']],
            ];

        $pn->updatePartner($try);

    }
}

if(isset($_GET['delete'])) {
  $try = $pn->deletePartner($_GET['delete']);
  header("Location: /Mict/back/partner.php");
  die();
}

require_once('base-back.php');
?>

<div class="container-fluid">

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading"><h1>Gestion des partenaires</h1></div>
        <div class="panel-body">
          <h3>Créer un partenaire</h3>
              <form class="" action="" method="post" id="createForm">

                  <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrer un nom">
                  </div>

                  <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="5" cols="30" placeholder="Entrer une description"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="link">Lien</label>
                    <input class="form-control" id="link" name="link" placeholder="Entrer le lien">
                  </div>

              <button type="submit" class="btn btn-primary" name="create">Créer un atelier</button>
          </form>

          <hr>
          <h3>Modifier Partenaire</h3>

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

                                    <div class="form-group" id="updateDescription<?= $pa['partners_id'] ?>">
                                      <label for="desc">Description</label>
                                      <textarea class="form-control" id="desc" name="desc<?= $pa['partners_id'] ?>" rows="5" cols="30" placeholder="Entrer une description"><?= $pa['partner_description'] ?></textarea>
                                    </div>

                                    <div class="form-group" id="updateLink<?= $pa['partners_id'] ?>">
                                        <label for="link">Lien</label>
                                        <input type="text" class="form-control" id="link_update" name="link<?= $pa['partners_id'] ?>" value="<?= $pa['partner_link'] ?>" placeholder="Entrer un lien">
                                    </div>

                                    <input type="hidden" name="secretid<?= $pa['partners_id'] ?>" value="<?= $pa['partners_id'] ?>">

                                    <button id="updateButton<?= $pa['partners_id'] ?>" type="submit" class="btn btn-primary" name="update<?= $pa['partners_id'] ?>">Modifier l'atelier</button>
                                    <a href="/Mict/back/offre.php?delete=<?= $pa['partners_id'] ?>" onclick="return confirm('êtes vous sûr de vouloir supprimer cet atelier ?');"><i class="fas fa-times fa-2x" style="float: right; margin-top: 5px;"></i></a>
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

    var info_row = 0;
    var create_info_row = 0;

    function addInfo(id, row_number) {
        row_number += info_row;
        if(row_number < 10) {
            var row = `<div id="infos_${info_row}">
                            <input type="text" class="form-control" id="infos_update" name="update_infos_${info_row}" placeholder="Entrer l'info" style="margin-top: 10px; width: 96%; display: inline;">
                            <a href="#updateInfos${id}" id="remove_info" onclick="removeInfo(false, ${info_row})">
                                <i class="fas fa-times fa-2x" style="float: right; margin-top: 13px;"></i>
                            </a>
                        </div>`;
            $('#updateInfos' + id).append(row);
            info_row++;
            window.scrollTo(0,document.querySelector("#updateInfos" + id).scrollHeight);
        } else { console.log("Le nombre d'informations ne peut pas dépasser 10.");
            if($("#error-infos").length === 0) {
                var row = `<div class="alert alert-danger" role="alert" id="error-infos" style="margin-top: 20px;">
                              Vous ne pouver ajouter que 10 informations pour une offre.
                            </div>`;

                $('#updateInfos' + id).append(row);

                $("#error-infos").fadeTo(5000, 500).slideUp(500, function(){
                    $("#error-infos").slideUp(500);
                });

                window.scrollTo(0,document.querySelector("#updateInfos" + id).scrollHeight);
            }
        }
    }

    function createAddInfo() {
        if(create_info_row < 9) {
            var row = `<div id="infos_${info_row}">
                            <input type="text" class="form-control" id="infos_update" name="infos_${create_info_row}" placeholder="Entrer l'info" style="margin-top: 10px; width: 96%; display: inline;">
                            <a href="#createInfos" id="remove_info" onclick="removeInfo(false, ${create_info_row})">
                                <i class="fas fa-times fa-2x" style="float: right; margin-top: 13px;"></i>
                            </a>
                        </div>`;
            $('#createInfos').append(row);
            create_info_row++;
            window.scrollTo(0,document.querySelector("#createForm").scrollHeight);
        } else { console.log("Le nombre d'informations ne peut pas dépasser 10.");
            if($("#error-infos").length === 0) {
                var row = `<div class="alert alert-danger" role="alert" id="error-infos" style="margin-top: 20px;">
                              Vous ne pouver ajouter que 10 informations pour une offre.
                            </div>`;

                $('#createInfos').append(row);

                $("#error-infos").fadeTo(5000, 500).slideUp(500, function(){
                    $("#error-infos").slideUp(500);
                });

                window.scrollTo(0,document.querySelector("#createForm").scrollHeight);
            }
        }
    }

    function removeInfo(exists, id) {
        var element = "";
        console.log(info_row);

        if(exists === true) {
            element = $('#existsInfos_' + id);
            $('exists_update_infos_' + id).removeAttr('value');
            element.remove();
            info_row--;
        } else {
            element = $('#infos_' + id);
            element.remove();
            info_row--;
        }
    }

</script>


  </body>
</html>
