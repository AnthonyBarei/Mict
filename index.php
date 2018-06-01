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
        <script type="text/javascript" src="assets/js/made_in_chez_toi-min.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/style_madeincheztoi.css"/>
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

<body>


<nav class="navbar navbar-inverse navbar-center navbar-fixed-top" role="navigation">

           <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span>Menu</span>

              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a class="scrollTo" href="#home" title="Début">HOME</a></li>
                <li><a class="scrollTo" href="#quoi" title="C'est quoi ?">C'EST QUOI ?</a></li>
                <li><a class="scrollTo" href="#offres" title="Les offres Made in chez toi">OFFRES</a></li>
                <li><a href="ateliers_et_cours_de_couture_a_domicile.php" title="Le détail des ateliers">ATELIERS</a></li>
                <li><a class="scrollTo" href="#contact" title="Je veux contacter Made in chez toi">CONTACT</a></li>
                <li><a href="photo.php" title="Galerie photos">PHOTOS</a></li>
                <li><a class="scrollTo" href="#faq" title="Toutes les réponses sont là !">FÀQ-PROPOS</a></li>
                <li><a href="boutique.php" title="Boutique">BOUTIQUE</a></li>
                <li><a class="scrollTo" href="#partenaires" title="Plus on est de fous...">PARTENAIRES</a></li>
                <li><a href="http://blog.madeincheztoi.com/" title="Les actus en temps réel !">BLOG</a></li>
              </ul>
            </div>

        </nav>

	<a class="scrollTo top" href="#home" Title="Haut de page"></a>

<!-- 	<div class="saison saison1">
		<img src="assets/images/sapin.png" height="200px" alt=""/>
		<img src="assets/images/sapin.png" height="75px" alt=""/>
		<img src="assets/images/sapin.png" height="125px" alt=""/>
	</div>
	<div class="saison saison2">
		<img src="assets/images/sapin.png" height="110px" alt=""/>
		<img src="assets/images/sapin.png" height="175px" alt=""/>
	</div> -->

	<section id="home">
	 <div class="cell1">
	  <div class="contenu">
			<div class="coup_tampon"></div>
		<div class="slide_home">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<?php
				if($dossier = opendir('./assets/uploads/homepageCarousel')){
						$nbfile = count(scandir('./assets/uploads/homepageCarousel')) - 2;
						echo"<ol class='carousel-indicators'>";
						for($i = 0; $i < $nbfile ; $i++){
							echo"<li data-target='#myCarousel' data-slide-to='0' "; if($i == 0){ echo"class='active'";} echo"></li>";
						}
						echo"</ol>";
						echo"<div class='carousel-inner'>";
						$fichier = readdir($dossier);
						$fichier = readdir($dossier);
						if(false !== $fichier = readdir($dossier)){
							echo"<div class='item active'>";
				        echo"<img src='./assets/uploads/homepageCarousel/". $fichier ."' style='width:100%;'>";
				      echo"</div>";
						}
						while(false !== ($fichier = readdir($dossier))){
							echo"<div class='item'>";
								echo"<img src='./assets/uploads/homepageCarousel/" . $fichier ."' style='width:100%;'>";
							echo"</div>";
						}
						//Left and right controls
						echo"<a class='left carousel-control' href='#myCarousel' data-slide='prev'>";
						//echo"<span class='glyphicon glyphicon-chevron-left'></span>";
						echo"<span class='sr-only'>Previous</span>";
						echo"</a>";
						echo"<a class='right carousel-control' href='#myCarousel' data-slide='next'>";
						//echo"<span class='glyphicon glyphicon-chevron-right'></span>";
						echo"<span class='sr-only'>Next</span>";
						echo"</a>";
				}
				?>
			</div>
		</div>
		</div>

        <?php include_once("modeles/newsModel.php");
            $news = new NewsModel();
            $current = $news->getCurrentNews();

            //die(var_dump($current));
        ?>
<marquee style="margin-top: 20px;"><?= $current['news_body'] ?> <?php if($current['news_link'] !== "") { echo '<a href="'.$current['news_link'].'" style="color: blue;" target="_blank">'.$current['news_title'].'</a>'; } ?></marquee>
		<h1> Ateliers et cours de couture chez toi</h1>
	 <a class="scrollTo" href="#quoi"><div class="suite_fleche"></div></a>
	</section>



        <section id="quoi">
         <div class="cell1">
          <div class="contenu">
	   <h1>Made in chez quoi ?</h1>
	   <div class="accroche">Les seuls ateliers couture chez toi, entre amis, 100% tout inclus !</div>
	   <ul>
	    <li> Ton super livre de couture tout neuf t'attend toujours pour quitter son étagère ?  </li>
	    <li> « Commencer la couture » est sur ta todo-list 2016 ? Oui mais il faut bien une machine ! Et puis, t'y connais rien en tissu... Ok, To-do list 2017 !  </li>
	    <li> Tu couds déjà comme tu peux, et tu en as marre de faire et défaire, et tu as envie de repartir sur des bases solides ?  </li>
	    <li> La création, c'est pas pour toi, t'es tout sauf créa ! Que tu crois...  </li>
	    <li> Tu cours chez ta mère dès que tu as un bouton à recoudre ? </li>
	    <li> Tu en as assez des vêtements du commerce, rien ne te plaît et ça t'énerve de voir ton T-shirt préféré sur les épaules de tout le monde ?  </li>
	    <li> Tu n'as pas le temps de t'y mettre, même si tu en as très envie !!  </li>
	   </ul>
	   <p>(Découpe les mentions inutiles :) )</p>

	   <div id="solution" class="accroche">Tu es au bon endroit !</div>

	   <div class="bouton entier the_solution">
	    <a class="scrollTo" href="#solution" Title="Le Concept Made in chez toi">
		Made in chez toi a LA solution !<br/>
		<img src="assets/images/solution.png" alt="">
	    </a>
	   </div>

	   <div class="row">

	   <div class="boulettes moitie">
	   <h2>Pourquoi participer à un atelier ?</h2>
	   <ul>
	    <li> pour t'initier à la couture sans lourd investissement </li>
	    <li> pour acquérir les bonnes bases communes à tous les projets </li>
	    <li> pour connaître toutes les étapes, du patron aux finitions </li>
	    <li> pour apprendre plein d'astuces qui te simplifieront la vie !</li>
	    <li> pour passer un bon moment avec tes amis ou te faire de nouvelles connaissances autour d'une passion commune</li>
	    <li> pour repartir avec ta propre réalisation </li>
	    <li> pour prendre confiance en ta créativité et ton habileté ! </li>
	   </ul>
	   </div>

	   <div class="boulettes moitie">
	   <h2>Comment ça se passe ?</h2>
	   <ul>
	    <li> 3 heures, de 3 à 6 participants </li>
	    <li> de moins en moins cher si vous êtes nombreux (à partir de 23€ de l'heure par personne !) </li>
	    <li> tout inclus, une machine dernier cri par personne, les tissus, patrons, fils, accessoires...  </li>
	    <li> dans ton salon, ou celui de tes amis </li>
	    <li> dans une ambiance conviviale, accueillante et agréable </li>
	    <li> à Paris ou en région parisienne </li>
	    <li> avec tes amis ou avec de nouvelles connaissances </li>
	    <li> au choix, une grande variété de projets disponibles </li>
	    <li> et des réalisations adaptées au niveau de chacun </li>
	   </ul>
	   </div>

		<div class="surprendre">Laisse-toi te surprendre !</div>

	   </div>

           <h2>Alors, viens coudre chez toi !</h2>

	   <div class="a_suivre">
	   <div class="bouton quart">
	    <a class="scrollTo offres" href="#offres" Title="Les offres">Les offres</a>
	   </div>
	   <div class="bouton quart">
	    <a class="scrollTo" href="ateliers_et_cours_de_couture_a_domicile.php" Title="Les ateliers">Les ateliers</a>
	   </div>
	   <div class="bouton quart">
	    <a href="photo.php" Title="Les photos">Les photos</a>
	   </div>
	   <div class="bouton quart">
	    <a class="scrollTo" href="reserver_atelier_ou_cours_de_couture.php" Title="Je m'inscris !">Je m'inscris !</a>
	   </div>
	   </div>

          </div>
         </div>
        </section>



	<section id="intermediaire_1" class="intermediaire_1">
	</section>



	<section id="offres">
	 <div id="n3" class="cell1">
	  <div class="contenu">
		<h1>Les offres Made in chez toi</h1>

    <div class="a_suivre">
        <?php include_once('modeles/workshopModele.php');
            $offre = new workshopModel();
            $offreList = $offre->getWorkshops();

            $offreList[0]['workshop_infos'] = json_decode($offreList[0]['workshop_infos']);
            $end_infos = end($offreList[0]['workshop_infos']);

            $offreList[0]['workshop_description'] = json_decode($offreList[0]['workshop_description']);
            $offreList[0]['workshop_projects'] = json_decode($offreList[0]['workshop_projects']);
        ?>


	<hr id="les_ateliers">

<div class="n3-1">
    <div class="left clients">
        <div class="image"></div>
        <div class="picto"></div>
    </div>
    <div class="texte">
        <h2><?= $offreList[0]['workshop_name'] ?></h2>
        <div class="acc2">
            <?php foreach ($offreList[0]['workshop_infos'] as $key => $info) : ?>
                <?php if ($info === $end_infos) : ?>
                    <?= $info ?>
                <?php else : ?>
                    <?= $info ?>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <?php foreach ($offreList[0]['workshop_description'] as $key => $paragraphe) : ?>
            <p><?= $paragraphe ?></p>
        <?php endforeach; ?>
    </div>

    <div class="a_suivre">
        <div class="bouton tiers">
            <a href="ateliers_et_cours_de_couture_a_domicile.php" Title="Détail des thèmes">Les thèmes</a>
        </div>
        <div id="toggle_tarif" class="bouton tiers">
            <a href="javascript:void(0)" Title="Les tarifs des ateliers">Les tarifs</a>
        </div>
        <div class="bouton tiers">
            <a href="reserver_atelier_ou_cours_de_couture.php" Title="Réserver">Je réserve !</a>
        </div>
    </div>
<?php $offreList[0]['workshop_price'] = json_decode($offreList[0]['workshop_price']); ?>
    <div class="show_tarifs" style="height: 500px;">
        <div class="tarifs">
            <div class="table">
                <div class="thead">
                    <div class="tcell">Nombre de participants</div>
                    <div class="tcell">Tarif par personne</div>
                    <div class="tcell"></div>
                </div>
                <div class="tligne">
                    <div class="tcell"><?= $offreList[0]['workshop_price'][0][0] ?></div>
                    <div class="tcell"><?= $offreList[0]['workshop_price'][0][1] ?></div>
                    <div class="tcell"><?= $offreList[0]['workshop_price'][0][2] ?></div>
                </div>
                <div class="tligne">
                    <div class="tcell"><?= $offreList[0]['workshop_price'][1][0] ?></div>
                    <div class="tcell"><?= $offreList[0]['workshop_price'][1][1] ?></div>
                    <div class="tcell"><?= $offreList[0]['workshop_price'][1][2] ?></div>
                </div>
                <div class="tligne">
                    <div class="tcell"><?= $offreList[0]['workshop_price'][2][0] ?></div>
                    <div class="tcell"><?= $offreList[0]['workshop_price'][2][1] ?></div>
                    <div class="tcell"><?= $offreList[0]['workshop_price'][2][2] ?></div>
                </div>
                <div class="tligne">
                    <div class="tcell"><?= $offreList[0]['workshop_price'][3][0] ?></div>
                    <div class="tcell"><?= $offreList[0]['workshop_price'][3][1] ?></div>
                    <div class="tcell"><?= $offreList[0]['workshop_price'][3][2] ?></div>
                </div>
            </div>
        </div>
        <div class="caption"><?= $offreList[0]['workshop_projects'][0] ?></div>
        <div class="caption"><?= $offreList[0]['workshop_projects'][1] ?></div>
        <div class="caption"><?= $offreList[0]['workshop_projects'][2] ?></div>
    </div>
</div>

	<hr id="cours_particuliers">

    <?php
    $offreList[1]['workshop_infos'] = json_decode($offreList[1]['workshop_infos']);
    $end_infos = end($offreList[1]['workshop_infos']);

    $offreList[1]['workshop_description'] = json_decode($offreList[1]['workshop_description']);
    $offreList[1]['workshop_projects'] = json_decode($offreList[1]['workshop_projects']);
    ?>

<div class="n3-2">
    <div class="right clients">
        <div class="image"></div>
        <div class="picto"></div>
    </div>
    <div class="texte">
        <h2><?= $offreList[1]['workshop_name'] ?></h2>
        <div class="acc2">
            <?php foreach ($offreList[1]['workshop_infos'] as $key => $info) : ?>
                <?php if ($info === $end_infos) : ?>
                    <?= $info ?>
                <?php else : ?>
                    <?= $info ?>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <?php foreach ($offreList[1]['workshop_description'] as $key => $paragraphe) : ?>
        <p><?= $paragraphe ?></p>
    <?php endforeach; ?>
    </div>
    <div class="a_suivre">
        <div id="toggle_tarif_cp" class="bouton moitie">
            <a href="javascript:void(0)" Title="Les tarifs des cours particuliers">Les tarifs</a>
        </div>
        <div class="bouton moitie">
            <a href="reserver_atelier_ou_cours_de_couture.php?q=cp" Title="Réserver">Je réserve un cours</a>
        </div>
    </div>
<?php $offreList[1]['workshop_price'] = json_decode($offreList[1]['workshop_price']); ?>
    <div class="show_tarifs_cp" style="height: 600px;">
        <div class="introbox">
            <p><?= $offreList[1]['workshop_projects'][0] ?></p>
            <p><?= $offreList[1]['workshop_projects'][1] ?></p>
            <ul><?= $offreList[1]['workshop_projects'][2] ?></ul>
        </div>
        <div class="tarifs">
            <div class="table">
                <div class="thead">
                    <div class="tcell">Zone</div>
                    <div class="tcell">Prix 1 cours</div>
                    <div class="tcell">Carte 5 cours</div>
                </div>
                <div class="tligne">
                    <div class="tcell"><?= $offreList[1]['workshop_price'][0][0] ?></div>
                    <div class="tcell"><?= $offreList[1]['workshop_price'][0][1] ?></div>
                    <div class="tcell"><?= $offreList[1]['workshop_price'][0][2] ?></div>
                </div>
                <div class="tligne">
                    <div class="tcell"><?= $offreList[1]['workshop_price'][1][0] ?></div>
                    <div class="tcell"><?= $offreList[1]['workshop_price'][1][1] ?></div>
                    <div class="tcell"><?= $offreList[1]['workshop_price'][1][2] ?></div>
                </div>
                <div class="tligne">
                    <div class="tcell"><?= $offreList[1]['workshop_price'][2][0] ?></div>
                    <div class="tcell"><?= $offreList[1]['workshop_price'][2][1] ?></div>
                    <div class="tcell"><?= $offreList[1]['workshop_price'][2][2] ?></div>
                </div>
            </div>
        </div>
    </div>

</div>

	<hr id="carte_cadeau">

	<?php
	$offreList[2]['workshop_infos'] = json_decode($offreList[2]['workshop_infos']);
	$end_infos = end($offreList[2]['workshop_infos']);

	$offreList[2]['workshop_description'] = json_decode($offreList[2]['workshop_description']);
	 ?>

<div class="n3-3">
	<div class="left clients">
			<div class="image"></div>
			<div class="picto"></div>
	</div>
	<div class="texte">
			<h2><?= $offreList[2]['workshop_name'] ?></h2>
			<div class="acc2">
					<?php foreach ($offreList[2]['workshop_infos'] as $key => $info) : ?>
							<?php if ($info === $end_infos) : ?>
									<?= $info ?>
							<?php else : ?>
									<?= $info ?>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
							<?php endif; ?>
					<?php endforeach; ?>
			</div>
			<?php foreach ($offreList[2]['workshop_description'] as $key => $paragraphe) : ?>
					<p><?= $paragraphe ?></p>
			<?php endforeach; ?>
	</div>
</div>

	   <div class="a_suivre">
            <div class="bouton entier">
             <a href="commander_carte_cadeau_couture_madeincheztoi.php" Title="Commander">Je commande une carte cadeau !</a>
            </div>
           </div>

	<hr id="CE">

	    <?php
    $offreList[3]['workshop_infos'] = json_decode($offreList[3]['workshop_infos']);
    $end_infos = end($offreList[3]['workshop_infos']);

    $offreList[3]['workshop_description'] = json_decode($offreList[3]['workshop_description']);
     ?>

		<div class="n3-4">
		<div class="right clients">
			<div class="image"></div>
			<div class="picto"></div>
		</div>
		<div class="texte">
			<h2><?= $offreList[3]['workshop_name'] ?></h2>
				<div class="acc2">
			        <?php foreach ($offreList[3]['workshop_infos'] as $key => $info) : ?>
			            <?php if ($info === $end_infos) : ?>
			                <?= $info ?>
			            <?php else : ?>
			                <?= $info ?>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
			            <?php endif; ?>
			        <?php endforeach; ?>
			    </div>
						    <?php foreach ($offreList[3]['workshop_description'] as $key => $paragraphe) : ?>
			        <p><?= $paragraphe ?></p>
			    <?php endforeach; ?>

		</div>
	   <div class="a_suivre">
            <div class="bouton entier">
             <a class="scrollTo" href="#contact" Title="Contact">Je contacte Made in chez toi</a>
            </div>
           </div>
		</div>

	  </div>
	 </div>
	</section>



	<section id="preview_photos">
	 <div class="cell1">
	  <div class="contenu">
	   <div class="photo">
	    <a href="photo.php#assets/images/album1/10.jpg">
	     <img src="assets/images/px.png" alt=""/>
	     <img class="imgphoto" src="assets/images/px.png" alt=""/>
	     <img class="imgactive imgphoto" src="assets/images/px.png" alt="" style="z-index:3"/>

	    </a>
	   </div>
	   <div class="photo">
	    <a href="photo.php#assets/images/album1/19.jpg">
	     <img src="assets/images/px.png" alt=""/>
	     <img class="imgphoto" src="assets/images/px.png" alt=""/>
	     <img class="imgactive imgphoto" src="assets/images/px.png" alt="" style="z-index:5"/>
	     <
	    </a>
	   </div>
	   <div class="photo">
	    <a href="photo.php#assets/images/album1/30.jpg">
	     <img src="assets/images/px.png" alt=""/>
	     <img class="imgphoto" src="assets/images/px.png" alt=""/>
	     <img class="imgactive imgphoto" src="assets/images/px.png" alt="" style="z-index:7"/>

	    </a>
	   </div>
	   <div class="photo">
	    <a href="photo.php#assets/images/album1/26.jpg">
	     <img src="assets/images/px.png" alt=""/>
	     <img class="imgphoto" src="assets/images/px.png" alt=""/>
	     <img class="imgactive imgphoto" src="assets/images/px.png" alt="" style="z-index:9"/>

	    </a>
	   </div>
	  </div>
	 </div>
	</section>



	<section id="intermediaire_2">
	 <div class="cell6">
	  <img class="pict1" src="assets/images/px.png" alt=""/>
	 </div>
	 <div class="cell6">
	  <img class="pict2" src="assets/images/px.png" alt=""/>
	 </div>
	 <div class="cell6">
	  <img class="pict3" src="assets/images/px.png" alt=""/>
	 </div>
	 <div class="cell6">
	  <img class="pict4" src="assets/images/px.png" alt=""/>
	 </div>
	 <div class="cell6">
	  <img class="pict5" src="assets/images/px.png" alt=""/>
	 </div>
	 <div class="cell6">
	  <img class="pict6" src="assets/images/px.png" alt=""/>
	 </div>
	</section>



	<section id="xp">
	 <div class="cell1">
	  <div class="contenu">
		<h1>C'est toi qui en parles le mieux !</h1>
	    <div class="retour_xp retour1">
		<img src="assets/images/portrait1.png" alt="Retour d'expérience"/>
		<h5>
		  Merci Magali pour ce chouette atelier !
		</h5>
		<p>
		  J'ai (enfin) appris à utiliser la machine et je repars avec une super blouse pour mon filleul, et une furieuse envie de coudre ! ;)
--Séverine</p>
	    </div>
	    <div class="retour_xp retour2">
		<img src="assets/images/portrait2.png" alt="Autre retour d'expérience"/>
		<h5>
		  Plein de trucs et astuces, et des explications très claires
		</h5>
		<p>
		  Ma trousse est superbe ! Pour les filles et moi, le prochain, ce sera un vêtement pour femme !
--Marianne
		</p>
	    </div>
	  </div>
	 </div>
	</section>



	<section id="contact">
	 <div class="cell1">
	  <div class="contenu">
	    <h1>Je contacte Made in chez toi !</h1>
	    <div class="gauche">
	      <div class="chapeau">
		<p>Besoin d'en savoir plus<br />sur les sessions Made in chez toi ?</p>
		<p>Besoin d'un devis pour un CE, une école ?<br />Une entreprise ?<br />Un super-goûter-d'anniversaire-inoubliable ?</p>
		<p><u>Remplis le formulaire ci-contre !</u></p>
		<p>Tu veux réserver ton atelier, ou rejoindre un atelier existant ?</p>
		<p><u>Alors clique sur le bouton ci-dessous !</u></p>
	      </div>
	      <div class="bouton entier">
                  <a href="reserver_atelier_ou_cours_de_couture.php" Title="Réserver">Je réserve mon atelier !</a>
              </div>
	    </div>
	    <div class="droite">
	      <form class="form" id="form1" action="email.php" method="post">
      		<p>
        	  <input name="nom" type="text" class="champ" id="nom" placeholder="Nom et Prénom" />
      		</p>
       		<p>
        	  <input name="email" type="email" class="champ" id="email" placeholder="Email" />
      		</p>
      		<p>
        	  <input name="tel" type="tel" class="champ" id="tel" placeholder="Téléphone (optionnel)" />
      		</p>
      		<p>
        	  <input name="ville" type="text" class="champ" id="ville" placeholder="Ville" />
      		</p>
      		<p class="radio">
		  <input type="radio" name="question" value="infos" checked>Je désire en savoir plus sur Made in chez toi...<br />
		  <input type="radio" name="question" value="CE">Je suis intéressé par l'offre CE<br />
		  <input type="radio" name="question" value="devis">Je souhaite un devis pour une prestation sur-mesure<br />
      		</p>
      		<p>
        	  <textarea name="message" rows=5 class="champ" id="message" placeholder="Mon message ou ma question..."></textarea>
      		</p>
        	<input type="submit" value="" class="submit"/>
    	      </form>
	    </div>
	      <p class="backup_contact">Si tu n'as pas de réponse sous 24 heures, essaye par téléphone au +33 6 14 14 25 46, ou par email : contact@madeincheztoi.com</p>
	  </div>
	 </div>
	</section>



	<section id="faq">
	 <div class="cell1">
	  <div class="contenu">
		<img class="qm1" src="assets/images/qm1.png" alt="" />
		<img class="qm2" src="assets/images/qm2.png" alt="" />
		<img class="qm3" src="assets/images/qm3.png" alt="" />
	   <h1>Tout ce que vous avez toujours voulu savoir sur Made in chez toi...</h1>
	    <div class="gauche">
	      <h2>la Foire aux Questions</h2>
	     <ul>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq1">Comment organise-t-on un atelier couture ?</a>
		<div id="faq1" class="faq_detail">
	    <p>
1) Vous formez un groupe de 3 à 6 personnes
</p><p>
2) L'hôtesse (la personne qui héberge l'atelier) entre en contact avec Made in chez toi
</p><p>
3) On détermine ensemble le projet qui vous convient
</p><p>
4) On fixe une date
</p><p>
5) Vous choisissez votre tissu parmi ceux que je vous propose en fonction de votre projet<!-- (voir la question sur le choix du tissu)-->
</p><p>
6) L'hôtesse envoit la réservation pour l'atelier
</p><p>
7) Made in chez toi arrive le jour J avec tout le nécessaire : une machine à coudre par personne avec tous les pieds de biche dont vous pouvez rêver, la mercerie, les accessoires et les tissus
</p><p>
8) 3 heures d'atelier plus tard, chacun repart avec son sac, chapeau, vêtement, accessoire, pochette (sauf si plusieurs ateliers sont nécessaires, voir le détail sur les fiches ateliers).
	    </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq17">Quelle est la zone géographique couverte ?</a>
		<div id="faq17" class="faq_detail">
            <p>
Aujourd'hui, les forces vives de Made in chez toi agissent en région parisienne, principalement Paris, la proche banlieue, et la grande banlieue Nord-Ouest. Mais on sait aussi s'adapter ;) donc si tu habites globalement en Région Parisienne, contacte Made in chez toi pour étudier les différentes possibilités !
</p><p>
Pour les heureuses habitantes de province, des ateliers couture seront prévus ponctuellement dans votre région, en fonction de la demande. Là encore, le mieux est de me <a class="scrollTo" href="#contact">contacter</a> pour signaler votre envie, pour étudier vos besoins, et quand plusieurs personnes auront signifié leur désir d'avoir un atelier chez elle, je vous proposerai quelques dates dans votre ville.
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq2">Comment se passe le règlement ?</a>
		<div id="faq2" class="faq_detail">
            <p>
C'est l'hôtesse qui est l'interlocutrice privilégiée de Made in chez toi, et qui se charge du règlement de l'atelier. Ses amies lui remboursent le montant de leur atelier.
</p><p>
Une avance de 100 € sera demandée au plus tard une semaine avant l'atelier, par chèque ou virement, afin de valider la réservation de l'atelier et de prévoir l'achat des fournitures.
</p><p>
Le reste est réglé sur place, par l'hôtesse, le jour de l'atelier.
</p><p>
Attention, je dis «hôtesse», mais «hôte» est aussi tout-à-fait envisageable :o)
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq3">Une personne ne peut plus venir, que faire ?</a>
		<div id="faq3" class="faq_detail">
            <p>
Le minimum de personnes participant à un atelier est de 3 personnes.
</p><p>
Jusqu'à 48 heures avant l'atelier, l'hôtesse a la possibilité d'en décaler la date.
</p><p>
Dans le cas où l'atelier est maintenu (soit l'hôtesse ne veut pas décaler la date, soit il est trop tard pour le faire), deux possibilités :
</p><p>
- s'il reste 3 personnes ou plus, l'atelier se fera normalement, le tarif par personne reflétant le nombre de personnes présentes lors de l'atelier ;
</p><p>
- s'il reste moins de 3 participants, l'atelier est là encore maintenu, mais au tarif de 3 participants, soit 3 x 90€ = 270€. Autant dire que cette situation n'est pas recommandée et qu'il est fortement recommandé de valider la disponibilité de ses amis ! ;o)
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq4">J'ai déjà ma machine à coudre !</a>
		<div id="faq4" class="faq_detail">
            <p>
Toute personne qui apporte sa machine à coudre bénéficie d'une réduction de 5% sur le prix de l'atelier.  Cette réduction n'est pas cumulable avec des offres promotionnelles temporaires.
</p><p>
La machine doit bien sûr être complète et en bon état. Ne comptez pas faire un atelier avec la vieille Singer à roue de votre grand-mère !
</p><p>
Soyez sûrs du bon fonctionnement de votre machine car Made in chez toi n'apportera pas de machine supplémentaire.
</p><p>
Il peut quand même être intéressant de tester une machine électronique très performante et découvrir le plaisir des points de broderie, des boutonnières et de l'enfilage automatiques. Bien sûr, si l'on souhaite apprendre les boutonnières traditionnelles, les machines modernes savent le faire aussi ! ;)
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq5">Et si j'ai déjà mon tissu ?</a>
		<div id="faq5" class="faq_detail">
            <p>
Tu peux venir avec ton tissu à condition qu'il respecte les indications de Made in chez toi, afin qu'il soit adapté au projet. Une réduction de 5% est accordée, elle n'est pas cumulable avec des offres promotionnelles temporaires.
</p><p>
Les tissus de Made in chez toi sont tous de qualité et sélectionnés avec soin. À belles matières et bons outils, beaux résultats.
</p><p>
Il est aussi possible d'acheter du tissu chez notre partenaire La Modette, en supplément de l'atelier mais à des tarifs préférentiels. Pour en savoir plus sur La Modette, voir la <a class="scrollTo" href="#partenaires">section partenaires</a>.
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq6">Je voudrais offrir un atelier, est-ce possible ?</a>
		<div id="faq6" class="faq_detail">
            <p>
Oui, c'est possible !
</p><p>
Il suffit d'<a class="scrollTo" href="#contact">envoyer un message</a> à contact@madeincheztoi.com en demandant une carte cadeau.
</p><p>
Elle vous sera envoyée par email et est valable un an.
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq7">Quelle ambiance y a-t-il lors d'un atelier ?</a>
		<div id="faq7" class="faq_detail">
            <p>
Oh là là, je ne m'y attendais pas à celle-là ! ;)
</p><p>
L'ambiance est assez différente d'un atelier à l'autre puisque les groupes sont différents (bon, ça c'est dit ! :) ).
</p><p>
Certains sont très appliqués et calmes, d'autres discutent plus et se charient. Cela dépend des relations d'amitié entre chacun, je pense, tout simplement.
</p><p>
L'hôtesse qui accueille chez elle joue aussi un grand rôle, elle prépare souvent thé et petits gâteaux. Certaines aiment coudre en silence, d'autres avec une musique de fond.
</p><p>
L'avantage d'être à domicile, c'est que c'est confortable, adaptable à l'ambiance que l'on souhaite, bref, que l'on s'y sent bien !
</p><p>
Les ateliers sont tous différents mais il y a quand même pas mal de points commun : la bienveillance, la patience et la satisfaction d'avoir créé de ses mains !
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq9">Et si mon salon est trop petit ?</a>
		<div id="faq9" class="faq_detail">
            <p>
Ahhh, les appartements parisiens... quand c'est tout ton appart' qui fait 30m² et pas que ton salon ! :)
</p><p>
L'atelier peut se tenir dans une salle à Paris 17ème moyennant une participation forfaitaire de 15 euros pour le groupe.
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq8">Peut-on avoir des cours particuliers ?</a>
		<div id="faq8" class="faq_detail">
            <p>
Oui, c'est possible !
</p><p>
L'essence de Made in chez toi, c'est l'atelier partagé, le moment de convivialité, le partage de connaissances et d'expériences.
</p><p>
Il existe cependant deux offres supplémentaires, adaptées aux cours particuliers : l'offre solo, et l'offre duo... qui veulent bien dire ce qu'elles disent :)
</p><p>
<a class="scrollTo" href="#contact">Contactez-moi</a> afin que je vous détaille ces formules et que vous m'expliquiez vos attentes particulières !
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq10">Et pour les entreprises, les CE ?</a>
		<div id="faq10" class="faq_detail">
            <p>
Une offre spécifique aux entreprises et aux Comités d'Entreprise a été concoctée pour répondre au mieux aux attentes des salariés et des bénéficiaires des CE.
</p><p>
<a class="scrollTo" href="#contact">Contactez-moi</a> directement pour avoir plus de détails sur ces offres : contact@madeincheztoi.com ou par téléphone !
            </p>
		</div>
	      </li>

	     </ul>
	    </div>

	    <div class="droite">
	      <h2>À propos - mes valeurs</h2>
	     <ul>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq11">Et toi, qui es-tu ?</a>
		<div id="faq11" class="faq_detail">
            <p>
Magali BERNABLE, 36 ans et 2 enfants !
</p><p>
La couture m’est venue comme une envie de femme enceinte.
</p><p>
Envie de coudre des vêtements uniques à mes petits, de trouver moi-même des solutions aux besoins du quotidien. Cela implique des créations et réalisations très diverses : bonnets, robe de chambre Reine des Flocons :), sac rock'n roll pour homme, organiseurs de sacs, robes, jupes, jeux, poussettes, beaucoup de cadeaux de naissance mais aussi du recyclage de belles matières que l'on ne porte plus.
</p><p>
Made in chez toi est un tournant dans ma vie, le résultat d'une reconversion. J'étais responsable juridique chez un opérateur télécom avant d'avoir mes enfants. Moi-même enfant unique, je voulais prendre le temps avec mes petits, alors j'ai pris un congé parental qui m'a permis de mûrir et d'aboutir à ce projet en accord avec ma vision de la vie.
</p><p>
Porter des vêtements uniques, offrir des cadeaux faits-main, ressentir le plaisir de la création terminée et en être fière, partager ces moments autour d’un thé, dans la convivialité du foyer et entre amis, voilà ce qui me fait vibrer ! C’est ainsi que je veux transmettre ma passion pour la couture.
</p><p>
L'enseignement a toujours été un dénominateur commun à mes différentes activités, qu'il s'agisse de droit, de danse, de chant, ou de couture, et ce à de nombreuses reprises.
</p><p>
En effet, la danse et le chant sont mes deux autres passions, que je pratique chaque semaine, la danse modern-jazz et le chant lyrique. La couture s’inscrit dans la même dynamique, c’est un mode d’expression. Par le choix des matières et la variété des associations, on peut voyager dans le temps, être avant-gardiste ou vintage, inspirer le confort, la quiétude ou bien le peps et l’énergie !
</p><p>
Une seule barrière à franchir, celle de se lancer et de laisser libre cours à sa créativité...
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq12">Comment es-tu venue à la couture ?</a>
		<div id="faq12" class="faq_detail">
            <p>
Comme ça, un jour, l'envie m'a prise ! C'est vraiment aussi simple et inexplicable que cela.
</p><p>
Ensuite, le Père Noël qui a des oreilles partout m'a offert un livre de couture pour Bébé : Les Intemporels pour bébé d'Astrid le Provost.
</p><p>
Et tout s'est enchaîné, les premières armes, les tutos, beaucoup de temps, les essais, le décryptage de magazines allemands et japonais, les premiers vêtements, la robe de parrainage de ma fille... Puis j'ai pris des cours grâce à la Mairie de Paris, pour ensuite en donner de mon côté, cours collectifs, cours particuliers...
</p><p>
Le virus était attrapé :)
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq13">Pourquoi avoir créé Made in chez toi ?</a>
		<div id="faq13" class="faq_detail">
	    <p>
- Parce que c'est l'entreprise que j'aurais aimé trouver, quand j'avais envie de changement, de nouveauté, de redonner un coup de frais sur ma vie, mes relations et mon travail !
</p><p>
- Parce qu’on est souvent dans le « tout intellectuel » et que se laisser aller à la créativité, c’est se détendre sans se juger
</p><p>
- Parce que l’on repart fiers de d’avoir réalisé de A à Z un projet de ses mains !
</p><p>
- Parce que c’est se faire de beaux souvenirs ensemble et resserrer les liens avec ses amis (c'est vrai quoi ! Il n'y a pas que spa, resto, sauna, ciné, shopping, apéro, hammam et footing !)
</p><p>
- Parce que les cours de couture, c’est avec des inconnus, que le regard et le jugement des autres peut être pesant ; là, on est entre amis, chez soi, on peut laisser l’inspiration venir sereinement
</p><p>
- Parce que chez toi devient « the place to be » le temps d’un atelier et que tout le monde ne peut pas en dire autant !
</p><p>
- Parce que la création participe au bonheur (ça résume bien, non ?)
	    </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq14">Qu'est-ce que tu aimes coudre ?</a>
		<div id="faq14" class="faq_detail">
            <p>
Les vêtements pour enfants, mes premières amours. Tout est permis ou presque !
</p><p>
Ce que j'aime particulièrement en ce moment, c'est travailler d'autres matières comme le cuir, le bulgomme, ou détourner des vêtements et/ou objets de leurs fonctions initiales, dans le but d'obtenir des créations originales.
</p><p>
C'est ça, le grand détournement :)
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq15">Quel mot te caractérise le plus ?</a>
		<div id="faq15" class="faq_detail">
            <p>
Enthousiasme !
</p><p>
Envie de bien faire, aussi, mais on est déjà à 4 mots !
</p><p>
Je m’enthousiasme pour beaucoup de projets, en danse, en chant, en équitation que je pratique toutes les semaines. Je m’enthousiasme aussi beaucoup pour Made in chez toi car c'est un projet qui me ressemble, qui porte son lot de doutes mais qui m'a déjà donné beaucoup de plaisir. J'y ai rencontré de belles personnes, avec qui je travaille désormais en partenariat.
</p><p>
Je trouve que l'enthousiasme est le moteur et le plaisir la récompense ! ;)
            </p>
		</div>
	      </li>

	      <li>
		<a class="faq_sum" href="javascript:void(0)" data-div="faq16">Quelles sont tes prochains objectifs ?</a>
		<div id="faq16" class="faq_detail">
            <p>
Conquérir le Monde, MouahahahAHAHAHAHAH !
</p><p>
(avec un beau crescendo bien sûr ;) )
            </p>
		</div>
	      </li>

	     </ul>
	    </div>
	  </div>
	 </div>
	</section>

	<?php
	include_once('modeles/partnerModele.php');
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
						 		echo"<img src='". $partnerlist[$i]['partner_image']."' alt='' />";
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



	<footer>
	 <div class="cell1">
	  <div class="contenu">
		<p class="baseline"><span class="madein">Made in... <em>Chez toi !</em></span></p>
		<p>Parce que c'est <u>Chez Toi</u> que ça se passe !!!</p>

	  </div>
	 </div>
	 <div class="copyright">
		Copyright Made in chez toi - 2014/2016 - <a href="sitemap.xml"><h5>SiteMap</h5></a> - <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"><h5>Crédits</h5></a><!-- - <a href=""><h5>CGU/CGV</h5></a> - <a href=""><h5>Mentions légales</h5></a>-->
	 </div>
		<div id="light" class="credits">
		<div class="credits_bis">
			<p>Ce site n'aurait pu voir le jour sans :</p>
			<p>- une bonne dose de patience et une conception from scratch</p>
			<p>- tout plein de logiciels libres : <a href="http://ubuntu-fr.org/" target="_blank">Linux</a>, <a href="http://www.gimp.org/" target="_blank">Gimp</a>, <a href="https://www.mozilla.org/fr/" target="_blank">Firefox</a>, <a href="http://jquery.com/" target="_blank">jQuery</a>...</p>
			<p>- les excellents conseils d'<a href="http://www.alsacreations.com/" target="_blank">Alsacréations</a>, de <a href="http://www.w3schools.com/" target="_blank">w3schools</a> et de <a href="http://www.design-fluide.com/" target="_blank">design-fluide</a></p>
			<p>- des icones from <a href="http://www.freepik.com/" target="_blank">Freepik</a>, <a href="http://www.flaticon.com/" target="_blank">flaticon</a></p>
			<p>- des fonds d'écran de <a href="http://bgfons.com/" target="_blank">bgfons</a> et de <a href="http://textures8.com/" target="_blank">Textures8</a></p>
			<p>- <a href="http://jgallery.jakubkowalczyk.pl/" target="_blank">jGallery</a> pour l'album photos</p>
			<p>- des polices de caractère (!) trouvées sur <a href="http://fr.fontriver.com/" target="_blank">Font River</a></p>
			<p>- les photos des réalisations de mes fidèles Padawan...</p>
			<p>... et pas mal de nuits blanches passées sur écrans noirs par Mister Lo ! ;o)
			<br /><br />Ce site a été conçu dans une logique éco-responsable.</p>

			<div class="close_credits"><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">X</a></div>
		</div>
		</div>
    		<div id="fade" class="black_overlay"></div>
	</footer>
<!-- 	<script type="text/javascript" src="assets/js/madeincheztoi-min.js"></script> -->

</body>
</html>
