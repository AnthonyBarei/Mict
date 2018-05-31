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

<body>

    <section id="offres">
     <div id="n3" class="cell1">
      <div class="contenu">
        <h1>Les offres Made in chez toi</h1>

    <div class="a_suivre">
        <?php require_once('../../modeles/workshopModele.php');
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
    <div class="show_tarifs">
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
    <div class="show_tarifs_cp">
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

        <div class="n3-3">
        <div class="left clients">
            <div class="image"></div>
            <div class="picto"></div>
        </div>
        <div class="texte">
       <h2>La carte cadeau Made in chez toi</h2>
    <div class="acc2">90 €&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Valable un an&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Ateliers ou cours particuliers&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Paris / région parisienne&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Son coupe-fil offert</div>
<p>
Tu es à la recherche d'un cadeau original et personnalisé pour Noël ? Pour un anniversaire ? Une fête de famille ? Un départ en retraite ?
</p><p>
Avec la carte cadeau Made in chez toi, tu peux offrir un cadeau inédit, convivial et, par dessus tout, utile !
</p><p>
Pour toi, au même tarif qu'un cours ou un atelier classique, c'est la réception rapide (par lettre prioritaire) d'une carte cadeau réelle, tangible, personnalisée et très originale (bien plus qu'un simple code à taper dans un champ "code promotionnel"...) qui mettra très vite l'eau à la bouche de son destinataire.
</p><p>
Pour l'heureux bénéficiaire, c'est l'assurance de pouvoir participer sous un an à un atelier ou un cours particulier de son choix, avec les mêmes avantages que les autres clients (ateliers collectifs tout inclus, cours particuliers sur-mesure...). Mais comme ce n'est tout de même pas un client comme un autre, un accessoire indispensable lui sera offert le jour de la prestation !
</p><p>
Alors n'hésite plus et fais découvrir la passion de la couture à tes proches !
</p>
                </div>
           </div>

       <div class="a_suivre">
            <div class="bouton entier">
             <a href="commander_carte_cadeau_couture_madeincheztoi.php" Title="Commander">Je commande une carte cadeau !</a>
            </div>
           </div>

    <hr id="CE">

        <div class="n3-4">
        <div class="right clients">
            <div class="image"></div>
            <div class="picto"></div>
        </div>
        <div class="texte">
       <h2>Entreprises, CE et projets sur mesure</h2>
    <div class="acc2">Plusieurs formules&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;à domicile ou dans l'entreprise&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;ateliers ou stages&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;tout inclus</div>
        <p>Made in chez toi n'oublie pas le monde du travail ! Parce que ce que l'on peut coudre entre amis, on peut le coudre entre collègues :)</p>

        <p>Plusieurs formules sont possibles : subvention de cours ou d'ateliers chez les salariés sous forme de bons d'achat, ateliers dans vos locaux ou à proximité, animation de stage de couture, pendant l'année ou lors de vacances scolaires... Le tout avec des prix agressifs et dégressifs :) Votre devis et tous les détails sur demande, <a class="scrollTo" href="#contact" Title="Contact">ici.</a></p>

        <p>Comme pour les ateliers, tout est inclus : une machine à coudre haut de gamme par personne, les tissus, fil, accessoires, outils... Rien à apporter, et à la fin de l'atelier, une création à emporter !</p>

        <p>En plus des CE, Made in chez toi anime aussi des <a href="http://blog.madeincheztoi.com/la-couture-prend-le-chemin-de-lecole/" target="_blank">ateliers découverte de la couture par les enfants</a>. Une offre complète est disponible, des goûters et animations d'anniversaires (de 6 à 15 ans) jusqu'aux animations scolaires (dès le CP), en passant par des stages ou par des ateliers 4 mains (mères / filles) pour transmettre ensemble la passion de la couture à vos enfants.</p>

        <p>Quels qu'ils soient, discutons de vos projets !</p>

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

</body>
</html>
