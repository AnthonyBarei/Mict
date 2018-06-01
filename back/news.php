<?php
include_once('../controllers/news.php');

 $ws = new News();
 if(isset($_POST['create'])) {
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

 if(isset($_POST['update'])) {
     $try = $ws->updateNews(
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
     $try = $ws->deleteNews($_POST['id']);
 }

 require_once('base-back.php');
?>

<div class="container-fluid">

    <div class="col-md-6" style="padding: 10px;">
        <div class="panel panel-default">
            <div class="panel-heading">Créer une news</div>
            <div class="panel-body">

                <form class="" action="" method="post">
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
                        <input type="checkbox" class="form-check-input" name="reccurrence" id="reccurrence" value="1">
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

                <?php $newsList = $ws->NewsList(); //die(var_dump($newsList)); ?>



                <div class="form-group">
                    <label for="list">Liste des news</label>
                    <select class="form-control" name="list" id="list" onchange="changeUpdate();">
                        <?php foreach ($newsList as $key => $news) : ?>
                            <option value="<?= $news['id'] ?>" name="<?= $key ?>"><?= $news['news_title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <form class="" action="" method="post">
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
                        <label for="update_reccurrence" style="margin-right: 20px;">Tout les ans ?</label>
                        <input type="checkbox" class="form-check-input" name="update_reccurrence" id="update_reccurrence" value="1">
                    </div>

                    <button id="update" type="submit" class="btn btn-primary" name="update">Modifier News</button>
                </form>
            </div>
        </div>
    </div>

<script type="text/javascript">
    var selected = $('#list').find(":selected").text(); console.log(selected);

    function changeUpdate() {
        var selected = $('#list').find(":selected"); console.log(selected);

        $('#update_title').val();
    }
</script>

  </body>
</html>
