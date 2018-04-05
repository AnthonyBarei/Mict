<?php require_once('base-back.php');
include_once('../controllers/news.php');

 $ws = new News();
 if(isset($_POST['create'])) {
     $try = $ws->createNews(
         array(
           "title" =>  $_POST['title'],
           "body" => $_POST['body'],
           "link" => $_POST['link'],
           "start" => $_POST['start'],
           "end" => $_POST['end'],
           "rec" => $_POST['rec']
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
?>
<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label>Titre</label><input type="text" name="title"><br>
      <label>body</label><textarea name="body" rows="8" cols="80"></textarea><br>
      <label>link</label><input type="text" name="link" value=""><br>
      <label>Date de début</label><input type="date" name="start"><br>
      <label>Date de fin</label><input type="date" name="end"><br>
      <label>Recurrence ?</label> <input type="checkbox" name="rec" value="0" checked>Non
                                  <input type="checkbox" name="rec" value="1" > Oui<br>
      <button type="submit" name="create">Créer une News</button>
    </form>

  </body>
</html>
