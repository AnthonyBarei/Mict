<?php
include_once('../controllers/news.php');

 $ws = new News();
 $checkList = $ws->NewsList();
$error = "";

 if(isset($_POST['create'])) {

     foreach ($checkList as $key => $value) {

         $dateverif = date('Y-m-d', strtotime($_POST['datedebut']));
         $datedebutverif = date('Y-m-d', strtotime($value['news_start']));
         $datefinverif = date('Y-m-d', strtotime($value['news_end']));

        //die(var_dump($datedebutverif));

         if($_POST['datedebut'] === $value['news_start'] || ($dateverif >= $datedebutverif) && ($dateverif <= $datefinverif)) {
             $error = "Une news existe déjà pour cette date";
             break;
         }
     }

     if($error === "") {
         if(!isset($_POST['reccurrence'])) {
             $_POST['reccurrence'] = false;
         } else {
             $_POST['reccurrence'] = true;
         }
         //die(var_dump($_POST['reccurrence']));
         $try = $ws->createNews(
             array(
               "title" =>  $_POST['title'],
               "body" => $_POST['body'],
               "link" => $_POST['link'],
               "start" => $_POST['datedebut'],
               "end" => $_POST['datefin'],
               "rec" => $_POST['reccurrence']
            )
        );
     }
 }

 if(isset($_POST['update'])) {
     $try = $ws->updateNews(
         array(
             "id" => $_POST['update_id'],
             "title" =>  $_POST['update_title'],
             "body" => $_POST['update_body'],
             "link" => $_POST['update_link'],
             "start" => $_POST['update_datedebut'],
             "end" => $_POST['update_datefin'],
             "rec" => $_POST['update_rec']
        )
    );
 }

 if(isset($_GET['delete'])) {
     $try = $ws->deleteNews($_GET['delete']);
     header('Location: news.php');
     die();
 }

 require_once('base-back.php');
?>

<div class="container-fluid">

    <div class="col-md-6" style="padding: 10px;">
        <div class="panel panel-default">
            <div class="panel-heading">Créer une news</div>
            <div class="panel-body">

                <form class="" action="" method="post">

                    <?php if ($error !== "") : ?>
                        <div class="alert alert-danger" role="alert" id="error-infos" style="margin-top: 20px;">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="title">Nom</label>
                        <input type="text" class="form-control" name="title" id="title" value="">
                    </div>

                    <div class="form-group">
                        <label for="body">Texte</label>
                        <input type="text" class="form-control" name="body" id="body" value="">
                    </div>

                    <div class="form-group">
                        <label for="link">Lien</label>
                        <input type="text" class="form-control" name="link" id="link" value="">
                    </div>

                    <div class="form-group">
                        <label for="datedebut">Date de début</label>
                        <input type="date" class="form-control" name="datedebut" id="datedebut" value="">
                    </div>

                    <div class="form-group">
                        <label for="datefin">Date de Fin</label>
                        <input type="date" class="form-control" name="datefin" id="datefin" value="">
                    </div>

                    <div class="form-group">
                        <label for="reccurrence" style="margin-right: 20px;">Tout les ans ?</label>
                        <input type="radio" class="form-check-input" name="rec" id="recOui" value="1"> Oui
                        <input type="radio" class="form-check-input" name="rec" id="recNon" style="margin-left: 10px;" value="0"> Non
                    </div>

                    <button id="create" type="submit" class="btn btn-primary" name="create">Créer News</button>

                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6" style="padding: 10px;">
        <div class="panel panel-default">
            <div class="panel-heading">Modifier une news</div>
            <div class="panel-body">

                <?php $newsList = $ws->NewsList(); //print_r($newsList);
                        $jsarray = json_encode($newsList);
                ?>

                <div class="form-group">
                    <label for="list">Liste des news</label>
                    <select class="form-control" name="list" id="list" onchange="changeUpdate();">
                        <?php foreach ($newsList as $key => $news) : ?>
                            <option value="<?= $news['id'] ?>" name="<?= $key ?>"><?= $news['news_title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <form class="" action="" method="post">

                    <input type="hidden" name="update_id" id="update_id" value="">

                    <div class="form-group">
                        <label for="update_title">Nom</label>
                        <input type="text" class="form-control" name="update_title" id="update_title" value="">
                    </div>

                    <div class="form-group">
                        <label for="update_body">Texte</label>
                        <input type="text" class="form-control" name="update_body" id="update_body" value="">
                    </div>

                    <div class="form-group">
                        <label for="update_link">Lien</label>
                        <input type="text" class="form-control" name="update_link" id="update_link" value="">
                    </div>

                    <div class="form-group">
                        <label for="update_datedebut">Date de début</label>
                        <input type="date" class="form-control" name="update_datedebut" id="update_datedebut" value="">
                    </div>

                    <div class="form-group">
                        <label for="update_datefin">Date de Fin</label>
                        <input type="date" class="form-control" name="update_datefin" id="update_datefin" value="">
                    </div>

                    <div class="form-group">
                        <label for="update_rec" style="margin-right: 20px;">Tout les ans ?</label>
                        <input type="radio" class="form-check-input" name="update_rec" id="update_recOui" value="1"> Oui
                        <input type="radio" class="form-check-input" name="update_rec" id="update_recNon" style="margin-left: 10px;" value="0"> Non
                    </div>

                    <button id="update" type="submit" class="btn btn-primary" name="update">Modifier News</button>

                    <a href="" id="delete">
                        <i class="fas fa-times fa-2x" style="float: right; font-size: 35px;"></i>
                    </a>

                </form>
            </div>
        </div>
    </div>

<script type="text/javascript">

    $('#recNon').prop('checked', true);

    values = <?= $jsarray ?>;

    $('#delete').attr('href', 'news.php?delete=' + values[0][0]);
    $('#update_id').val(values[0][0]);
    $('#update_title').val(values[0][1]);
    $('#update_body').val(values[0][2]);
    $('#update_link').val(values[0][3]);
    $('#update_datedebut').val(values[0][4]);
    $('#update_datefin').val(values[0][5]);

    if(values[0][6] == 1) {
        $('#update_recOui').prop('checked', true);
    } else {
        $('#update_recNon').prop('checked', true);
    }

    function changeUpdate() {
        var selected = $('#list').find(":selected");
        var id = selected.attr("name");

        // console.log(id);
        //
        // console.log(values[id][1]);
        $('#update_id').val(values[id][0]);
        $('#update_title').val(values[id][1]);
        $('#update_body').val(values[id][2]);
        $('#update_link').val(values[id][3]);
        $('#update_datedebut').val(values[id][4]);
        $('#update_datefin').val(values[id][5]);

        if(values[id][6] == 1) {
            $('#update_recOui').prop('checked', true);
        } else {
            $('#update_recNon').prop('checked', true);
        }

    }

    $('#delete').click(function() { console.log("delete");
        confirm('Êtes vous sûr de vouloir supprimer cette news ?');
    });
</script>

  </body>
</html>
