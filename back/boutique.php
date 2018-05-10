<?php require_once('base-back.php'); ?>


    <div class="container-fluid">


    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Paramètres de connexion de la boutique</div>
        <div class="panel-body">
          <div class="input-group">
              <form method="POST" action="boutique.php">
                <?php
              $boutique = $_POST["boutique"];
              echo "Lien actuel de la boutique : $boutique<br />";
              ?>
              <label for="boutique" style="margin-right: 10px;">Nouveau lien Payfacile de la collection :
              <input type="url" name="boutique" /></label><input type="submit" value="Enregistrer" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Rendu</div>
        <div class="panel-body">
          <p class="centered"> C'est quoi ? </p>
          <p class="centered"> Les seuls ateliers couture chez toi, entre amis, 100% tout inclus ! </p>
        </div>
      </div>
    </div>

	    </div>

  </body>
</html>

