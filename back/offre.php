<?php

include_once('../controllers/workshop.php');

$ws = new Workshop();
$atelier = $ws->workshopList();


foreach( $atelier as $at ) {
    if(isset($_POST['update' . $at['workshop_id']])) {
        $try = [
                "id" => $_POST['secretid' . $at['workshop_id']],
                "name" =>  $_POST['name' . $at['workshop_id']],
                "infos" => [],
                "description" => [],
                "price" => $_POST['prix' . $at['workshop_id']],
                "projects" => $_POST['project' . $at['workshop_id']]
            ];

            // nombre d'infos limitées à 10
            for($i = 0; $i <= 10; $i++) {
                if(isset($_POST['exists_update_infos' . "_" . $i])) {
                    array_push($try["infos"], $_POST['exists_update_infos' . "_" . $i]);
                }
            }

            for ($n = 0; $n < 10; $n++) {
                if(isset($_POST['update_infos' . "_" . $n])) {
                    array_push($try["infos"], $_POST['update_infos' . "_" . $n]);
                }
            }

            for($j = 0; $j <= 20; $j++) {
                if(isset($_POST['exists_desc' . $j])) {
                    array_push($try["description"], $_POST['exists_desc' . $j]);
                }
            }

            for ($m = 0; $m <= 20; $m++) {
                if(isset($_POST['desc' . $m])) {
                    array_push($try["description"], $_POST['desc' . $m]);
                }
            }

        $ws->updateWorkshop($try);

    }
}

require_once('base-back.php');
?>

<div class="container-fluid">

    <div class="col-md-6" style="padding: 10px;">
      <div class="panel panel-default">
          <div class="panel-heading">Rendu</div>
          <div class="panel-body">
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
                        <?php
                            $k = 0;
                            $l = 0;

                            //die(var_dump($at['workshop_infos']));
                            $at['workshop_infos'] = ($at['workshop_infos'] !== null) ? json_decode($at['workshop_infos']) : null;

                            $at['workshop_description'] = ($at['workshop_description'] !== null) ? json_decode($at['workshop_description']) : null;
                            //$descriptions = json_decode($at['workshop_description']);
                            //die(var_dump($descriptions));

                            $total_infos = count($at['workshop_infos']);

                            $total_desc = count($at['workshop_description']);

                            //die(var_dump($at['workshop_description']));
                            // $total_description = count($at['workshop_description']);
                        ?>

                            <div class="WORKSHOP<?= $i ?>">
                                <form class="" action="" method="post">
                                    <div class="form-group" id="updateName<?= $at['workshop_id'] ?>">
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" id="name_update" name="name<?= $at['workshop_id'] ?>" value="<?= $at['workshop_name'] ?>" placeholder="Entrer un nom">
                                    </div>

                                    <div class="form-group" id="updateInfos<?= $at['workshop_id'] ?>">
                                      <label for="infos" style="margin-bottom: 15px;">Infos</label>
                                      <a href="#updateInfos<?= $at['workshop_id'] ?>" id="add_info" onclick="addInfo(<?= $at['workshop_id'] ?>, <?= $total_infos ?>)">
                                          <i class="fas fa-plus fa-2x" style="float: right;"></i>
                                      </a>
                                    <?php if($at['workshop_infos'] !== null) : ?>
                                        <?php foreach ($at['workshop_infos'] as $key => $info) : ?>
                                            <div id="existsInfos_<?= $k ?>">
                                                <input type="text" class="form-control" id="infos_update" name="exists_update_infos_<?= $k ?>" value="<?= $info ?>" placeholder="Entrer les infos" style="margin-bottom: 10px; width: 90%; display: inline;">
                                                <a href="#updateInfos<?= $k ?>" id="remove_info" onclick="removeInfo(true, <?= $k ?>)">
                                                    <i class="fas fa-times fa-2x" style="float: right; margin-top: 5px;"></i>
                                                </a>
                                            </div>
                                            <?php $k++ ?>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <input type="text" class="form-control" id="infos_update" name="exists_update_infos_<?= $k ?>" placeholder="Entrer les infos" style="margin-bottom: 10px;">
                                        <?php $k++ ?>
                                    <?php endif; ?>
                                    </div>

                                    <div class="form-group" id="updateDescription<?= $at['workshop_id'] ?>">
                                      <label for="desc" style="margin-bottom: 15px;">Description par paragraphe</label>
                                      <a href="#updateDescription<?= $at['workshop_id'] ?>" id="add_description" onclick="addDescription(<?= $at['workshop_id'] ?>, <?= $total_desc ?>)">
                                          <i class="fas fa-plus fa-2x" style="float: right;"></i>
                                      </a>
                                      <?php if($at['workshop_description'] !== null) : ?>
                                          <?php foreach ($at['workshop_description'] as $key => $paragraphe) : ?>
                                              <div id="existsDescription_<?= $l ?>">
                                                  <textarea class="form-control" id="desc" name="exists_desc<?= $l ?>" rows="5" cols="30" placeholder="Entrer une description" value="<?= $paragraphe ?>" style="margin-bottom: 10px; width: 90%; display: inline;"><?= $paragraphe ?></textarea>
                                                  <a href="#updateDescription<?= $l ?>" id="remove_description" onclick="removeDescription(true, <?= $l ?>)">
                                                      <i class="fas fa-times fa-2x" style="float: right; margin-top: 5px;"></i>
                                                  </a>
                                              </div>
                                              <?php $l++ ?>
                                          <?php endforeach; ?>
                                      <?php else : ?>
                                          <textarea class="form-control" id="desc" name="desc<?= $at['workshop_id'] ?>" rows="5" cols="30" placeholder="Entrer une description"></textarea>
                                      <?php endif; ?>
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
            <div class="panel-heading">Rendu</div>
            <div class="panel-body">
              <iframe src="../index.php#offres" width="100%" height="500" sandbox>
              </iframe>
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
    var description_row = 0;
    //var create_info_row = 0;

    function addInfo(id, row_number) {
        row_number += info_row;
        if(row_number < 10) {
            var row = `<div id="infos_${info_row}">
                            <input type="text" class="form-control" id="infos_update" name="update_infos_${info_row}" placeholder="Entrer l'info" style="margin-top: 10px; width: 90%; display: inline;">
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

    function addDescription(id, row_number) {
        row_number += description_row;
        if(row_number < 20) {
            var row = `<div id="description_${description_row}">
                            <textarea class="form-control" id="desc" name="desc${description_row}" rows="5" cols="30" placeholder="Entrer un paragraphe" style="margin-top: 10px; width: 90%; display: inline;"></textarea>
                            <a href="#updateInfos${id}" id="remove_description" onclick="removeDescription(false, ${description_row})">
                                <i class="fas fa-times fa-2x" style="float: right; margin-top: 13px;"></i>
                            </a>
                        </div>`;
            $('#updateDescription' + id).append(row);
            description_row++;
            window.scrollTo(0,document.querySelector("#updateDescription" + id).scrollHeight);
        } else { console.log("Le nombre de paragraphe ne peut pas dépasser 20.");
            if($("#error-description").length === 0) {
                var row = `<div class="alert alert-danger" role="alert" id="error-description" style="margin-top: 20px;">
                              Vous ne pouver ajouter que 20 paragraphes pour une description.
                            </div>`;

                $('#updateDescription' + id).append(row);

                $("#error-description").fadeTo(5000, 500).slideUp(500, function(){
                    $("#error-description").slideUp(500);
                });

                window.scrollTo(0,document.querySelector("#updateDescription" + id).scrollHeight);
            }
        }
    }

    function removeInfo(exists, id) {
        var element = "";
        // console.log(info_row);

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

    function removeDescription(exists, id) {
        var element = "";
        // console.log(description_row);

        if(exists === true) {
            element = $('#existsDescription_' + id);
            $('exists_desc' + id).removeAttr('value');
            element.remove();
            description_row--;
        } else {
            element = $('#description_' + id);
            element.remove();
            description_row--;
        }

    }

</script>


  </body>
</html>
