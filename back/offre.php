<?php

include_once('../controllers/workshop.php');

$ws = new Workshop();
$offres = $ws->workshopList();


foreach( $offres as $at ) {
    if(isset($_POST['update' . $at['workshop_id']])) {
        $try = [
                "id" => $_POST['secretid' . $at['workshop_id']],
                "name" =>  $_POST['name' . $at['workshop_id']],
                "infos" => [],
                "description" => [],
                "price" => [],
                "projects" => []
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

            for ($o = 1; $o <= 4; $o++) {
                if(isset($_POST['nbpers' . $o . '_' . $at['workshop_id']]) && isset($_POST['prix' . $o . '_' . $at['workshop_id']]) && isset($_POST['soit' . $o . '_' . $at['workshop_id']])) {
                    array_push($try['price'], [$_POST['nbpers' . $o . '_' . $at['workshop_id']], $_POST['prix' . $o . '_' . $at['workshop_id']], $_POST['soit' . $o . '_' . $at['workshop_id']]]);
                }
            }

            for ($p = 1; $p <= 3; $p++) {
                if (isset($_POST['project' . $p . '_' . $at['workshop_id']])) {
                    if(strpos($_POST['project' . $p . '_' . $at['workshop_id']], "\n") !== FALSE) {
                        $_POST['project' . $p . '_' . $at['workshop_id']] = preg_replace("/[\r\n]+/", "<br/>", $_POST['project' . $p . '_' . $at['workshop_id']]);
                    }

                    array_push($try['projects'], $_POST['project' . $p . '_' . $at['workshop_id']]);
                } else { die('pas ok');
                    array_push($try['projects'], "");
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
          <div class="panel-heading">Modification</div>
          <div class="panel-body">
          <h3>Modifier les offres</h3>

                <?php
                    $ws = new Workshop();
                    $offres = $ws->workshopList();
                    $i = 1;
                    $j = 1;
                ?>

                <script type="text/javascript">
                    var i = 1;
                </script>

                <div class="row" style="padding-right: 30px; padding-left: 30px; margin-bottom: 10px; margin-top: 20px;">
                    <?php foreach( $offres as $at ) : ?>
                        <button type="button" class="btn btn-primary" style="margin-bottom: 10px;" id="<?= $j ?>" onclick="echoData(this)">
                            <?= $at['workshop_name'] ?>
                        </button>
                        <?php $j++ ?>
                    <?php endforeach; ?>
                </div>

                    <?php foreach( $offres as $at ) : ?>
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

                                    <style media="screen">
                                        .myInputs {
                                            padding: 6px 12px;
                                            font-size: 14px;
                                            line-height: 1.42857143;
                                            color: #555555;
                                            background-color: #ffffff;
                                            border: 1px solid #cccccc;
                                            border-radius: 4px;
                                            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                                            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                                            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                                            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                                            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                                        }
                                    </style>

                                    <div class="form-group" id="updatePrice<?= $at['workshop_id'] ?>">
                                      <div>
                                          <label>Prix</label>
                                      </div>
                                      <div class="col-md-12" style="margin-bottom: 10px;">
                                          <?php $at['workshop_price'] = json_decode($at['workshop_price']); ?>

                                          <input class="col-md-2 myInputs" type="number" name="nbpers1_<?= $at['workshop_id'] ?>" placeholder="Nombre de personnes / zone" style="margin-right: 10px;" value="<?= $at['workshop_price'][0][0] ?>">
                                          <input type="text" class="col-md-7 myInputs" style="margin-right: 10px;" name="prix1_<?= $at['workshop_id'] ?>" placeholder="Entrer un prix | exemple : 90 €" value="<?= $at['workshop_price'][0][1] ?>">
                                          <input class="col-md-2 myInputs" type="text" name="soit1_<?= $at['workshop_id'] ?>" placeholder="Prix par heure | exemple : soit 30 € / h" value="<?= $at['workshop_price'][0][2] ?>">
                                      </div>
                                      <div class="col-md-12" style="margin-bottom: 10px;">
                                          <input class="col-md-2 myInputs" type="number" name="nbpers2_<?= $at['workshop_id'] ?>" placeholder="Nombre de personnes / zone" style="margin-right: 10px;" value="<?= $at['workshop_price'][1][0] ?>">
                                          <input type="text" class="col-md-7 myInputs" style="margin-right: 10px;" name="prix2_<?= $at['workshop_id'] ?>" placeholder="Entrer un prix | exemple : 90 €" value="<?= $at['workshop_price'][1][1] ?>">
                                          <input class="col-md-2 myInputs" type="text" name="soit2_<?= $at['workshop_id'] ?>" placeholder="Prix par heure | exemple : soit 30 € / h" value="<?= $at['workshop_price'][1][2] ?>">
                                      </div>
                                      <div class="col-md-12" style="margin-bottom: 10px;">
                                          <input class="col-md-2 myInputs" type="number" name="nbpers3_<?= $at['workshop_id'] ?>" placeholder="Nombre de personnes / zone" style="margin-right: 10px;" value="<?= $at['workshop_price'][2][0] ?>">
                                          <input type="text" class="col-md-7 myInputs" style="margin-right: 10px;" name="prix3_<?= $at['workshop_id'] ?>" placeholder="Entrer un prix | exemple : 90 €" value="<?= $at['workshop_price'][2][1] ?>">
                                          <input class="col-md-2 myInputs" type="text" name="soit3_<?= $at['workshop_id'] ?>" placeholder="Prix par heure | exemple : soit 30 € / h" value="<?= $at['workshop_price'][2][2] ?>">
                                      </div>
                                      <div class="col-md-12" style="margin-bottom: 30px;">
                                          <input class="col-md-2 myInputs" type="number" name="nbpers4_<?= $at['workshop_id'] ?>" placeholder="Nombre de personnes / zone" style="margin-right: 10px;" value="<?= $at['workshop_price'][3][0] ?>">
                                          <input type="text" class="col-md-7 myInputs" style="margin-right: 10px;" name="prix4_<?= $at['workshop_id'] ?>" placeholder="Entrer un prix | exemple : 90 €" value="<?= $at['workshop_price'][3][1] ?>">
                                          <input class="col-md-2 myInputs" type="text" name="soit4_<?= $at['workshop_id'] ?>" placeholder="Prix par heure | exemple : soit 30 € / h" value="<?= $at['workshop_price'][3][2] ?>">
                                      </div>
                                  </div>

                                    <div class="form-group" id="updateProject<?= $at['workshop_id'] ?>">
                                        <?php $at['workshop_projects'] = json_decode($at['workshop_projects']); //ie(var_dump($at['workshop_projects']));?>
                                      <label for="project">Commentaires sur 3 paragraphes maximum</label>
                                      <textarea class="form-control" id="project_update" name="project1_<?= $at['workshop_id'] ?>" rows="5" cols="30" placeholder="Exemple : Rappel : 1 atelier = 3 heures, chez toi, machine, tissus et fournitures compris" style="margin-bottom: 15px;"><?= $at['workshop_projects'][0] ?></textarea>
                                      <textarea class="form-control" id="project_update" name="project2_<?= $at['workshop_id'] ?>" rows="5" cols="30" placeholder="Exemple : Les tarifs dépendent de ta zone géographique :" style="margin-bottom: 15px;"><?= $at['workshop_projects'][1] ?></textarea>
                                      <textarea class="form-control" id="project_update" name="project3_<?= $at['workshop_id'] ?>" rows="5" cols="30" placeholder="Exemple : Zone 1 : Paris, 92, 93, 95 Zone 2 : 77, 78, 91, 94 Zone 3 : autres" style="margin-bottom: 15px;"><?= $at['workshop_projects'][2] ?></textarea>
                                    </div>

                                    <input type="hidden" name="secretid<?= $at['workshop_id'] ?>" value="<?= $at['workshop_id'] ?>">

                                    <button id="updateButton<?= $at['workshop_id'] ?>" type="submit" class="btn btn-primary" name="update<?= $at['workshop_id'] ?>">Modifier l'offre</button>

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
              <iframe src="iframes/offre.php" width="100%" height="800" sandbox></iframe>
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
