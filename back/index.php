<?php
// echo "<p>Full path to a .htpasswd file in this dir: " . dirname(__FILE__) . "/.htpasswd" . "</p>";
// die();
?>

<?php require_once('base-back.php'); ?>

    <div class="container-fluid">

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Ajout d'image carrousel</div>
        <div class="panel-body">
          <form action="../controllers/uploadCarousel.php" method="post" enctype="multipart/form-data">
            Selectionnez une image à afficher dans le carrousel:
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="Upload Image" name="submit">
        </form>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Supprimer une image du carrousel</div>
        <div class="panel-body">
          <?php if($dossier = opendir('../assets/uploads/homepageCarousel')){ ?>
            <form action="../controllers/deleteCarouselFile.php" method="post">
              <select class="form-control" name="todeletefile">
                <?php
                  $fichier = readdir($dossier);
                  $fichier = readdir($dossier);
                  while(false !== ($fichier = readdir($dossier))){
      							echo"<option value='../assets/uploads/homepageCarousel/". $fichier ."'>". $fichier ." ";
      						}
                ?>
              </select> <br>
              <input type="submit" value="Supprimer le fichier du Carousel" name="submit">
            </form>
          <?php }else{ echo("Le carousel est vide"); } ?>
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Rendu</div>
        <div class="panel-body">
          <iframe 
 src="../index.php#home"
 width="100%" height="500"
 sandbox>
</iframe>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Personnalisation</div>
        <div class="panel-body">
          <p>Images deroulantes</p>
          <div class="input-group" style="margin-bottom: 10px;">
            <input type="file" name="picture">
          </div>
          <div class="input-group" style="margin-bottom: 10px;">
            <input type="file" name="picture">
          </div>
          <div class="input-group" style="margin-bottom: 10px;">
            <input type="file" name="picture">
          </div>
          <div class="input-group" style="margin-bottom: 10px;">
            <input type="file" name="picture">
          </div>
          <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
          <br/>
          <hr>
          <p>C'est quoi ?</p>
          <div class="input-group" style="margin-bottom: 10px;">
            <input type="text" class="form-control" placeholder="Descrition 1">
          </div>
          <div class="input-group" style="margin-bottom: 10px;">
            <input type="text" class="form-control" placeholder="Descrition 2">
          </div>
          <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
        </div>
      </div>
    </div>

	    </div>

  </body>
</html>
