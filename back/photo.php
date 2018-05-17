<?php require_once('base-back.php'); ?>


    <div class="container-fluid">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Ajout d'image Album 1</div>
        <div class="panel-body">
          <form action="../controllers/uploadAlbum1.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Supprimer une image de l'album 1</div>
        <div class="panel-body">
          <?php if($dossier = opendir('../assets/images/album1')){ ?>
            <form action="../controllers/deleteFile.php" method="post">
              <select class="form-control" name="todeletefile">
                <?php
                  $fichier = readdir($dossier);
                  $fichier = readdir($dossier);
                  while(false !== ($fichier = readdir($dossier))){
                    echo"<option value='../assets/images/album1/". $fichier ."'>". $fichier ." ";
                  }
                ?>
              </select> <br>
              <input type="submit" value="Supprimer le fichier de l'album" name="submit">
            </form>
          <?php }else{ echo("L'album est vide"); } ?>
        </div>
      </div>
    </div>
        <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Ajout d'image Album2</div>
        <div class="panel-body">
          <form action="../controllers/uploadAlbum2.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Supprimer une image de l'album 2</div>
        <div class="panel-body">
          <?php if($dossier = opendir('../assets/images/album1')){ ?>
            <form action="../controllers/deleteFile.php" method="post">
              <select class="form-control" name="todeletefile">
                <?php
                  $fichier = readdir($dossier);
                  $fichier = readdir($dossier);
                  while(false !== ($fichier = readdir($dossier))){
                    echo"<option value='../assets/images/album1/". $fichier ."'>". $fichier ." ";
                  }
                ?>
              </select> <br>
              <input type="submit" value="Supprimer le fichier de l'album" name="submit">
            </form>
          <?php }else{ echo("L'album est vide"); } ?>
        </div>
      </div>
    </div>
        <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Ajout d'image Album 3</div>
        <div class="panel-body">
          <form action="../controllers/uploadAlbum3.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Supprimer une image de l'album 3</div>
        <div class="panel-body">
          <?php if($dossier = opendir('../assets/images/album3')){ ?>
            <form action="../controllers/deleteFile.php" method="post">
              <select class="form-control" name="todeletefile">
                <?php
                  $fichier = readdir($dossier);
                  $fichier = readdir($dossier);
                  while(false !== ($fichier = readdir($dossier))){
                    echo"<option value='../assets/images/album3/". $fichier ."'>". $fichier ." ";
                  }
                ?>
              </select> <br>
              <input type="submit" value="Supprimer le fichier de l'album" name="submit">
            </form>
          <?php }else{ echo("L'album est vide"); } ?>
        </div>
      </div>
    </div>
	    </div>

  </body>
</html>

