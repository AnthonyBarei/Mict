<!DOCTYPE html>


<html lang="fr-FR" prefix="og: http://ogp.me/ns#">
    <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="rights" content="Copyright 2014/2016 - Made in chez toi (FR)"/>
    <title>Ateliers et cours de couture chez les particuliers • Made in chez toi</title>
        <meta name="description" content="Ateliers couture collectifs ou cours particuliers, dans ton salon ou chez tes amis :) • Machines et tissus inclus • Pour tous les niveaux !"/>
        <meta name="keywords" content="couture, cours, lecons, debuter, debutant, commencer, apprendre, facile, paris, region parisienne, 92, 95, 75, 78, 93, 91, 94, atelier, ateliers, domicile, particulier, inclus, lecon, formation, gratuit, amies, amis, debutante, made in chez toi, idf, made, in, chez, toi"/>
    <link rel="shortcut icon" href="assets/images/favicon.png?v=2" type="image/png" />
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
         <link rel="stylesheet" href="assets/css/style_madeincheztoi.css"/>
        <script src="assets/js/gallery.js"></script>
        <link rel="stylesheet" href="assets/css/baguetteBox.min.css"/>

    </head>
    <body>

  <nav class="navbar navbar-inverse navbar-center navbar-fixed-top" role="navigation">

           <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span>Menu</span>

              </button>
            </div>
                        <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a class="scrollTo" href="index.php#home" title="Début">HOME</a></li>
                <li><a class="scrollTo" href="index.php#quoi" title="C'est quoi ?">C'EST QUOI ?</a></li>
                <li><a class="scrollTo" href="index.php#offres" title="Les offres Made in chez toi">OFFRES</a></li>
                <li><a href="ateliers_et_cours_de_couture_a_domicile.php" title="Le détail des ateliers">ATELIERS</a></li>
                <li><a class="scrollTo" href="index.php#contact" title="Je veux contacter Made in chez toi">CONTACT</a></li>
                <li><a href="photo.php" title="Galerie photos">PHOTOS</a></li>
                <li><a class="scrollTo" href="index.php#faq" title="Toutes les réponses sont là !">FÀQ-PROPOS</a></li>
                <li><a href="boutique.php" title="Boutique">BOUTIQUE</a></li>
                <li><a class="scrollTo" href="index.php#partenaires" title="Plus on est de fous...">PARTENAIRES</a></li>
                <li><a href="http://blog.madeincheztoi.com/" title="Les actus en temps réel !">BLOG</a></li>
              </ul>
            </div>
        </nav>

 <div class="container" id="photos">

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top: 15%">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="more-less glyphicon glyphicon-minus"></i>
                        Nos Réalisations
                    </a>
                </h4>
            </div>

            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                <div class="panel-body">
                    <div class="tz-gallery">
                      <?php
                        if($dossier = opendir('./assets/images/album1')){
                          while(false !== ($fichier = readdir($dossier))){
                            if ($fichier != "." && $fichier != ".." AND (stristr($fichier,'.gif') OR stristr($fichier,'.jpg') OR stristr($fichier,'.png'))){
                              echo "<a class='lightbox' href='assets/images/album1/" . $fichier ."'>";
                              echo "<img style='height: 150px; width: 150px; padding-right: 10px;' src='assets/images/album1/". $fichier ."'>";
                              echo "</a>";
                            }
                          }
                        }
                      ?>
                    </div>
                </div>
            </div>
        </div>
<div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h2 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                       Ambiances
                    </a>
                </h2>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                     <div class="tz-gallery">
                       <?php
                         if($dossier = opendir('./assets/images/album2')){
                           while(false !== ($fichier = readdir($dossier))){
                             if ($fichier != "." && $fichier != ".." AND (stristr($fichier,'.gif') OR stristr($fichier,'.jpg') OR stristr($fichier,'.png'))){
                               echo "<a class='lightbox' href='assets/images/album2/" . $fichier ."'>";
                               echo "<img style='height: 150px; width: 150px; padding-right: 10px;' src='assets/images/album2/". $fichier ."'>";
                               echo "</a>";
                             }
                           }
                         }
                       ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h2 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Partenaires
                    </a>
                </h2>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                     <div class="tz-gallery">
                       <?php
                         if($dossier = opendir('./assets/images/album3')){
                           while(false !== ($fichier = readdir($dossier))){
                             if ($fichier != "." && $fichier != ".." AND (stristr($fichier,'.gif') OR stristr($fichier,'.jpg') OR stristr($fichier,'.png'))){
                               echo "<a class='lightbox' href='assets/images/album3/" . $fichier ."'>";
                               echo "<img style='height: 150px; width: 150px; padding-right: 10px;' src='assets/images/album3/". $fichier ."'>";
                               echo "</a>";
                             }
                           }
                         }
                       ?>
                </div>
                </div>
            </div>
        </div>

    </div><!-- panel-group -->


</div><!-- container -->

</body>
<script>
    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);

    baguetteBox.run('.tz-gallery');

</script>

</html>
