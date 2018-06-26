<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="rights" content="Copyright 2014/2016 - Made in chez toi (FR)"/>
	<title>Ateliers et cours de couture chez les particuliers • Made in chez toi</title>
        <meta name="description" content="Ateliers couture collectifs ou cours particuliers, dans ton salon ou chez tes amis :) • Machines et tissus inclus • Pour tous les niveaux !"/>
        <meta name="keywords" content="couture, cours, lecons, debuter, debutant, commencer, apprendre, facile, paris, region parisienne, 92, 95, 75, 78, 93, 91, 94, atelier, ateliers, domicile, particulier, inclus, lecon, formation, gratuit, amies, amis, debutante, made in chez toi, idf, made, in, chez, toi"/>
	<link rel="shortcut icon" href="assets/images/favicon.png?v=2" type="image/png" />
	<link rel="stylesheet" href="assets/css/style_madeincheztoi.css" />
	 <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
	<link rel="author" href="http://www.madeincheztoi.com/index.html#faq11" />
	<link rel="canonical" href="http://www.madeincheztoi.com/" />

  <meta property="og:locale" content="fr_FR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Ateliers et cours de couture chez les particuliers • Made in chez toi" />
  <meta property="og:description" content="Ateliers couture collectifs ou cours particuliers, dans ton salon ou chez tes amis :) • Machines et tissus inclus • Pour tous les niveaux !" />
  <meta property="og:url" content="http://www.madeincheztoi.com/" />
  <meta property="og:site_name" content="Made in chez toi" />
  <meta property="og:image" content="http://www.madeincheztoi.com/assets/images/madeincheztoi-og_thumb.jpg" />
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:title" content="Ateliers et cours de couture chez les particuliers • Made in chez toi"/>
  <meta name="twitter:description" content="Ateliers couture collectifs ou cours particuliers, dans ton salon ou chez tes amis :) • Machines et tissus inclus • Pour tous les niveaux !"/>
  <meta name="twitter:domain" content="Made in chez toi"/>
  <meta name="twitter:image:src" content="http://www.madeincheztoi.com/assets/images/madeincheztoi-og_thumb.jpg"/>
</head>

  <body >
<nav class="navbar navbar-inverse navbar-center" role="navigation">

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
<?php
// Connexion à MySQL
$base=mysqli_connect("localhost", "root", "root", "mict");
// lancement de la requete
$req = "SELECT Lien FROM boutique WHERE id=1";
$res = $base->query($req);
$data = mysqli_fetch_array($res);
?>
<div class="container" style="height: 100%;width: 100%;">
<iframe
 src="<?php echo $data['Lien'] ?>"
 width="100%" height="100%"
 sandbox="allow-same-origin allow-scripts">
</iframe>
</div>
  </body>
</html>
