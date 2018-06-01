<!DOCTYPE html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="rights" content="Copyright 2014/2016 - Made in chez toi (FR)"/>
	<title>Ateliers et cours de couture chez les particuliers • Made in chez toi</title>
        <meta name="description" content="Ateliers couture collectifs ou cours particuliers, dans ton salon ou chez tes amis :) • Machines et tissus inclus • Pour tous les niveaux !"/>
        <meta name="keywords" content="couture, cours, lecons, debuter, debutant, commencer, apprendre, facile, paris, region parisienne, 92, 95, 75, 78, 93, 91, 94, atelier, ateliers, domicile, particulier, inclus, lecon, formation, gratuit, amies, amis, debutante, made in chez toi, idf, made, in, chez, toi"/>
	<link rel="shortcut icon" href="../../assets/images/favicon.png?v=2" type="image/png" />
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="../../assets/js/made_in_chez_toi-min.js"></script>
        <link rel="stylesheet" href="../../assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="../../assets/css/style_madeincheztoi.css"/>
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

<style media="screen">
.clients { width:200px; height:450px; padding:30px 0 0; margin: 0 50px; position:relative;}
.clients .image { width:180px; height:180px; border-radius:25px;}
.clients .picto { position:absolute; top:30px; width:150px; height:150px; margin:35px 25px; }

.n3-1 .image {background:url('../../assets/images/bg/atelier_madeincheztoi.jpg') no-repeat;}
.n3-1 .picto {background:url('../../assets/images/bg/picto_client1.png') no-repeat;}
.n3-2 .image {background:url('../../assets/images/bg/cours_particulier_madeincheztoi.jpg') no-repeat;}
.n3-2 .picto {background:url('../../assets/images/bg/picto_client2.png') no-repeat;}
.n3-3 .image {background:url('../../assets/images/bg/carte_cadeau_madeincheztoi.jpg') no-repeat;}
.n3-3 .picto {background:url('../../assets/images/bg/picto_client3.png?v=2') no-repeat;}
.n3-4 .image {background:url('../../assets/images/bg/offre_sur_mesure_madeincheztoi.jpg') no-repeat;}
.n3-4 .picto {background:url('../../assets/images/bg/picto_client4.png') no-repeat;}
</style>

<body>

    <?php
    include_once('../../modeles/partnerModele.php');
    $pa = new partnerModel();
    $partnerlist = $pa->getPartners();
    ?>

    <section id="partenaires">
	 <div class="cell1">
	  <div class="contenu">
		  <h1>Les amis de Made in chez toi</h1>
		  <p id="la_modette">... parce que ce serait dommage de ne pas profiter de leur savoir-faire<br />et des bons plans que Made in chez toi t'a dénichés !</p>
			<?php
				for($i = 0; $i < count($partnerlist); $i++){
					echo"<div class='partner_a "; if ($i % 2 == 0 || $i % 2 == 0 ){ echo "impair";}else {echo "pair";} echo"'>";
						echo"<div class='partner'>";
							echo"<a href='". $partnerlist[$i]['partner_link']."' target='_blank'>";
						 		echo"<img src='../../". $partnerlist[$i]['partner_image']."' alt='' />";
							echo"</a>";
							echo"<div class='desc'>";
								echo"<a href='". $partnerlist[$i]['partner_link']."' target='_blank'>";
							 		echo"<h2>".$partnerlist[$i]['partner_name'] ."</h2>";
								echo"</a>";
								echo"<p>".$partnerlist[$i]['partner_description']."</p>";
								echo"<aside>Découvres-en plus : <a href='". $partnerlist[$i]['partner_link']."' target='_blank'>". $partnerlist[$i]['partner_link']."</a></aside>";
							echo"</div>";
					 	echo"</div>";
		 	   	echo"</div>";
				}
			?>
	  </div>
	 </div>
	</section>

</body>
</html>
