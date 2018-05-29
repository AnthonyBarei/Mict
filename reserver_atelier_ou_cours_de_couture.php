<?php
if (isset($_GET['q'])) {$requete = $_GET['q']; }
?>
<!DOCTYPE html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns#">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="rights" content="Copyright 2014/2016 - Made in chez toi (FR)"/> 
        <title>Ateliers et cours de couture • Made in chez toi • Réservation</title>
        <meta name="description" content="Ateliers couture collectifs ou cours particuliers, dans ton salon ou chez tes amis • Réserve ton atelier, ou rejoins un atelier existant !"/> 
        <meta name="keywords" content="couture, cours, lecons, reservation, reserver, debuter, debutant, commencer, apprendre, facile, paris, region parisienne, atelier, ateliers, domicile, particulier, inclus, lecon, formation, gratuit, amies, amis, debutante, made in chez toi, idf, made, in, chez, toi"/> 
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
        <link rel="stylesheet" href="assets/css/style_madeincheztoi.css" />
         <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="author" href="http://www.madeincheztoi.com/index.html#faq11" />
        <link rel="canonical" href="http://www.madeincheztoi.com/reserver_atelier_ou_cours_de_couture.php" />

<meta property="og:locale" content="fr_FR" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Ateliers et cours de couture • Made in chez toi • Réservation" />
<meta property="og:description" content="Ateliers couture collectifs ou cours particuliers, dans ton salon ou chez tes amis • Réserve ton atelier, ou rejoins un atelier existant !" />
<meta property="og:url" content="http://www.madeincheztoi.com/reserver_atelier_ou_cours_de_couture.php" />
<meta property="og:site_name" content="Made in chez toi" />
<meta property="og:image" content="http://www.madeincheztoi.com/assets/images/madeincheztoi-og_thumb.jpg" />
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="Ateliers et cours de couture • Made in chez toi • Réservation"/>
<meta name="twitter:description" content="Ateliers couture collectifs ou cours particuliers, dans ton salon ou chez tes amis • Réserve ton atelier, ou rejoins un atelier existant !"/>
<meta name="twitter:domain" content="Made in chez toi"/>
<meta name="twitter:image:src" content="http://www.madeincheztoi.com/assets/images/madeincheztoi-og_thumb.jpg"/>
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

  <section id="reserver">
   <div class="cell1">
    <div class="contenu">
      <h1>Je réserve mon atelier !</h1>
            <div class="gauche">
              <div class="chapeau">
                <p>Ça y est, tu as choisi le thème qui te branche pour ton prochain atelier ?</p>
                <p>À moins que tu n'aies simplement envie de rejoindre un atelier ou de réserver un cours particulier ?</p>
                <p><u>Remplis le formulaire ci-contre !</u></p>
                <p>Tu vas être recontacté sous peu pour vérifier les disponibilités pour ton atelier ou ton cours, et pour fixer tous les petits détails techniques.</p>
              </div>
            </div>
            <div class="droite">
              <form class="form" id="form1" action="email.php" method="post">
                  <input name="nom" type="text" class="champ full" id="nom" placeholder="Nom et Prénom" />
                  <input name="email" type="email" class="champ full" id="email" placeholder="Email" />
                  <input name="tel" type="tel" class="champ full" id="tel" placeholder="Téléphone (optionnel)" />
                  <input name="ville" type="text" class="champ full" id="ville" placeholder="Ville" />
    <hr />
      <input type="radio" name="question" value="heberger" id="heberger" <?php unset($ref_theme); if ($requete == "heberger") { echo "checked"; } if (preg_match('/^theme([0-9]+)$/',$requete,$ref_theme)) { echo "checked"; } ?>>Je veux héberger un atelier chez moi !<br />
      <input type="radio" name="question" value="participer" id="participer" <?php if (preg_match('/^atelier([0-9]+)$/',$requete,$ref_atelier)) { echo "checked"; } ?>>Je veux rejoindre un atelier existant.<br />
      <input type="radio" name="question" value="particulier" id="particulier" <?php if ($requete == "cp") { echo "checked"; } ?>>Je veux avoir des cours particuliers !<br />
    <hr />
    <div class="sf-heb">
      <label for="date">Date souhaitée : </label>
      <input name="date" type="date" class="champ" id="date" /><br />
      <label for="time">Heure souhaitée : </label>
                  <input name="time" type="text" class="champ" id="time" placeholder="9h30"/><br />
      <label for="theme">Thème de l'atelier : </label>
                  <select name="theme" id="theme_atelier_sel">
<?php
  $themes_list = array('','Initiation à la couture','Vêtements bébé','Vêtements enfant','Accessoires bébé / enfant','Vêtements femme','Vêtements homme','Pour chez toi','Recyclage et détournement','Techniques de couture','Ateliers événements','Sacs, chapeaux et accessoires');
  if (isset($ref_theme[1])) { 
    for($i=1;$i<=11;$i++) {
      echo "<option value=\"theme" . $i . "\"";
      if ($ref_theme[1] == $i) { echo " selected"; }
      echo ">" . $themes_list[$i] . "</option>\r\n";
    }
  } else {
    for($i=1;$i<=11;$i++) {
      echo "<option value=\"theme" . $i . "\">" . $themes_list[$i] . "</option>\r\n";
    }
  }
    
?>
      </select>
      <hr />
    </div>
    <div class="sf-rj">
      <label for="ref">Référence de l'atelier souhaité : </label>
        <input name="ref" type="text" class="champ" id="ref" value="<?php echo $ref_atelier[1];?>"/> 
      <hr />
    </div>
    <div class="sf-cp">
      <label for="date_cp">Date souhaitée : </label>
      <input name="date_cp" type="date" class="champ" id="date_cp" /><br />
      <label for="time_cp">Heure souhaitée : </label>
      <input name="time_cp" type="text" class="champ" id="time_cp" placeholder="9h30" /> 
      <hr />
    </div>
    <textarea name="message" rows=5 class="champ full" id="message" placeholder="Des précisions à apporter ?"></textarea>
    <input type="submit" value="Je réserve !" class="submit"/>
  </form>
</div>
<p class="backup_contact">Si tu n'as pas de réponse sous 24 heures, essaye par téléphone au +33 6 14 14 25 46, ou par email : contact@madeincheztoi.com</p>

    </div>
   </div>
  </section>
	

	<script type="text/javascript" src="assets/js/madeincheztoi-min.js"></script>

</body>
</html>
