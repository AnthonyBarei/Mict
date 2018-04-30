<!DOCTYPE html>

<?php
include_once('controllers/news.php');
?>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>Made in chez toi !</title>
        <script src="assets/js/madeincheztoi-min.js"></script>
        <script src="assets/js/made_in_chez_toi-min.js"></script>
        <script src="assets/js/gallery.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <link rel="stylesheet" href="assets/css/style_madeincheztoi.css"/>
        <link rel="stylesheet" href="assets/css/style_email.css"/>
        <link rel="stylesheet" href="assets/css/baguetteBox.min.css"/>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <!-- lien pour Onepage -->
        <link rel="stylesheet" href="assets/css/style_madeincheztoi.css"/>
        <link rel="stylesheet" href="assets/css/style_email.css"/>
        <link rel="stylesheet" href="assets/css/baguetteBox.min.css"/>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    </head>
    <body>
<!-- NavBar Menu Start -->
        <nav>
    <div id="menu_call"><img src="assets/images/bg/bottom.png" alt=""/> MENU</div>
    <ul id="menutop" class="menu">
    <li><a class="scrollTo" href="#home" title="Début">Home</a></li>
    <li><a class="scrollTo" href="#quoi" title="C'est quoi ?">C'est quoi ?</a></li>
    <li><a class="scrollTo" href="#offres" title="Les offres Made in chez toi">Offres</a></li>
    <li><a href="ateliers_et_cours_de_couture_a_domicile.php" title="Le détail des ateliers">Ateliers</a></li>
    <li><a class="scrollTo" href="#contact" title="Je veux contacter Made in chez toi">Contact</a></li>
    <li><a href="photos_realisations_ateliers_et_cours_de_couture.html" title="Galerie photos">Photzos</a></li>
    <li><a class="scrollTo" href="#faq" title="Toutes les réponses sont là !">FÀQ-propos</a></li>
    <li><a class="scrollTo" href="#partenaires" title="Plus on est de fous...">Partenaires</a></li>
    <li><a href="http://blog.madeincheztoi.com/" title="Les actus en temps réel !">Blog</a></li>
    </ul>
  </nav>
<!-- NavBar Menu End -->

      <?php
        $news = new News();

        $currentNews = $news->getCurrentNews();

        foreach ($currentNews as $new) {
          echo($new['news_body']);
        }
      ?>

    </body>

</html>
