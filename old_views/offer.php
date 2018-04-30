<?php require_once('base.php');
include_once('controllers/workshop.php');?>



  <section id="offres">
   <div id="n3" class="cell1">
    <div class="contenu">
    <h1>Les offres Made in chez toi</h1>

     <div class="a_suivre">
            <div class="bouton quart">
             <a class="scrollTo" href="#les_ateliers" Title="Les ateliers">Les ateliers</a>
            </div>
            <div class="bouton quart">
             <a class="scrollTo" href="#cours_particuliers" Title="Les cours particuliers">Les cours particuliers</a>
            </div>
            <div class="bouton quart">
             <a class="scrollTo" href="#carte_cadeau" Title="Carte cadeau">La carte cadeau</a>
            </div>
            <div class="bouton quart">
             <a class="scrollTo" href="#CE" Title="Entreprises / CE">Entreprises / CE</a>
            </div>
           </div>


 <?php
  $ws = new Workshop();
  $atelier = $ws->workshopList();

  foreach( $atelier as $at ){

    echo('<div class="texte">');
    echo ('<h2>' . $at["workshop_name"].'</h2>');

    //$jsonarray = json_decode('{ "durée": "3 heures", "capacité": "3 à 6 personnes", "contexte": "chez toi ou tes amis", "lieu": "Paris / région parisienne", "complément": "tout inclus" }', true);
    $jsonstring = $at['workshop_infos'];
    $jsonarray = json_decode($jsonstring);

    //echo($jsonarray);
    //echo($at['workshop_infos']);

    //echo($at["workshop_infos"]); //TODO parser ce json pour l'afficher proprement
    echo ('<div class="acc2">3 heures&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;3 à 6 personnes&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;chez toi ou tes amis&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Paris / région parisienne&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;tout inclus</div>');

    echo("<p>" . $at["workshop_description"] . "<p>" );

    echo ('</div>');
    } ?>


<?/*  <hr id="les_ateliers">

    <div class="n3-1">
    <div class="left clients">
      <div class="image"></div>
      <div class="picto"></div>
    </div>
    <div class="texte">
     <h2>Les ateliers</h2>
  <div class="acc2">3 heures&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;3 à 6 personnes&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;chez toi ou tes amis&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Paris / région parisienne&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;tout inclus</div>
<p>
L'essence même de Made in chez toi, c'est de coudre ensemble, de partager de bons moments avec ses amis ou avec de nouvelles connaissances, le tout dans un environnement agréable et cosy.
</p><p>
Les ateliers, c'est l'expression naturelle de ce concept. On se retrouve tous chez toi, ou lui, ou elle, dans un salon ou un séjour -- ce qui est beaucoup plus agréable que de se retrouver dans une salle de « cours » froide et impersonnelle !
</p><p>
Apprendre la couture doit pouvoir être universel : tout le monde est bienvenu, de la personne qui n'a jamais touché une machine ou une bobine à celle qui a déjà de bonnes réalisations à son actif.
</p><p>
C'est pourquoi Made in chez toi s'occupe de tout, et surtout de fournir tout le nécessaire au bon déroulement de l'atelier : les machines -- une machine électronique haut de gamme par personne --, les tissus adaptés au thème de l'atelier, le fil, le biais, le passe-poil, les fermetures, boutons, règles, ciseaux, découseurs... Tout ce qu'il faut pour pouvoir coudre sans avoir à investir soi-même dans du matériel plus ou moins coûteux. D'ailleurs, chaque atelier est l'occasion de viser ou réviser les concepts de base de la couture, en fonction de votre niveau.
</p><p>
Quand tu choisis un atelier, il faut choisir le thème qui sera abordé. Tu peux cliquer sur le bouton ci-dessous pour consulter les thèmes que Made in chez toi t'a bichonnés. Une fois le thème sélectionné, et l'atelier réservé, je t'appelle pour te donner tous les détails. Chacun devra ensuite choisir son projet spécifique, parmi la liste de projets proposés dans le thème, afin que je puisse apporter le jour J le matériel nécessaire pour chacun (patrons, tissus...).
</p><p>
Pas de stress, je peux vous conseiller sur ce point, en fonction du niveau et des attentes de chacun. En effet, certains projets sont plus ou moins faciles. D'autres sont plus ou moins longs. Dans tous les cas, même pour les projets les plus simples, il est possible d'adapter le niveau de difficulté avec des options (doublures, passepoils, réversible...), pour que tout le monde se fasse plaisir !
</p><p>
Si tes amis ne sont pas intéressés, si vous n'avez jamais les mêmes créneaux, ou si tu veux rencontrer de nouvelles personnes, tu peux joindre un atelier déjà planifié et où il reste de la place. En effet, même quand tu organises un atelier chez toi, tu peux l'« ouvrir au public » et proposer à d'autres d'y participer. Intéressant pour rencontrer du monde, intéressant aussi car plus vous êtes nombreux, plus le prix individuel diminue ! Clique sur le bouton « Les tarifs » ci-dessous pour en savoir plus.
</p><p>
Enfin, pense à Made in chez toi pour tous tes événements festifs. Noël, Pâques, Halloween, anniversaires, EVJF, fête des mères (et des pères :) ), Made in chez toi a <a href="ateliers_et_cours_de_couture_a_domicile.php#theme10">des ateliers spécifiques et sur-mesure</a> prévus pour passer de bons moments avec tes amis et tes proches !
</p>
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

       <div class="show_tarifs">
        <div class="tarifs">
         <div class="table">
    <div class="thead">
      <div class="tcell">Nombre de participants</div>
      <div class="tcell">Tarif par personne</div>
      <div class="tcell"></div>
    </div>
    <div class="tligne">
      <div class="tcell">3</div>
      <div class="tcell">90 €</div>
      <div class="tcell">soit 30 € / h</div>
    </div>
    <div class="tligne">
      <div class="tcell">4</div>
      <div class="tcell">80 €</div>
      <div class="tcell">soit 27 € / h</div>
    </div>
    <div class="tligne">
      <div class="tcell">5</div>
      <div class="tcell">75 €</div>
      <div class="tcell">soit 25 € / h</div>
    </div>
    <div class="tligne">
      <div class="tcell">6</div>
      <div class="tcell">70 €</div>
      <div class="tcell">soit 23 € / h</div>
    </div>
         </div>
        </div>
    <div class="caption">Rappel : 1 atelier = 3 heures, chez toi, machine, tissus et fournitures compris</div>
       </div>

                </div>

  <hr id="cours_particuliers">

    <div class="n3-2">
    <div class="right clients">
      <div class="image"></div>
      <div class="picto"></div>
    </div>
    <div class="texte">
     <h2>Les cours particuliers</h2>
  <div class="acc2">3 heures&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;chez toi&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Paris / région parisienne&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;cours sur-mesure</div>
    <p>Tu te reconnais bien ci-dessus mais... pas de chance ! Toutes tes copines qui étaient partantes pour l'atelier se laissent rattraper par... tu sais... les enfants... le boulot... les courses... la famille... Bref, difficile de trouver un créneau pour tout le monde !</p>

    <p>Tu décides de ne plus attendre pour sortir ton livre de couture de l'étagère :) Made in chez toi pense aussi à toi ! La formule Cours Particuliers, c'est le sur-mesure de l'apprentissage de la couture !</p>

    <p>Tu débutes ? On commence pas à pas en détaillant chaque étape, et tu repars vite avec une de tes réalisations ; parce qu'elle est importante, cette première...</p>

    <p>Tu t'y connais déjà un peu ? Made in chez toi arrive là où ça coince ! Tu avances ton projet autant que tu peux/veux, et on se penche sur les difficultés en temps réel pour un temps d'enseignement optimisé.</p>

    <p>Tu n'as pas de machine à coudre ? Tu peux quand même suivre un cours particulier, Made in chez toi t'en fournit une. Oui ! Il faut bien s'y frotter pour s'y piquer, à la couture ! En revanche, les fournitures, elles, ne sont pas fournies.</p>
                </div>
     <div class="a_suivre">
            <div id="toggle_tarif_cp" class="bouton moitie">
             <a href="javascript:void(0)" Title="Les tarifs des cours particuliers">Les tarifs</a>
            </div>
            <div class="bouton moitie">
             <a href="reserver_atelier_ou_cours_de_couture.php?q=cp" Title="Réserver">Je réserve un cours</a>
            </div>
           </div>

       <div class="show_tarifs_cp">
    <div class="introbox">
     <p>Les prix correspondent à des cours de 3 heures, chez toi. Tu peux aussi opter pour la carte de 5 cours, valable 1 an, pour économiser 10 € sur le prix de chaque atelier !</p>
     <p>Les tarifs dépendent de ta zone géographique :</p>
     <ul>
      <li>Zone 1 : Paris, 92, 93, 95</li>
      <li>Zone 2 : 77, 78, 91, 94</li>
      <li>Zone 3 : autres</li>
     </ul>
    </div>
        <div class="tarifs">
         <div class="table">
    <div class="thead">
      <div class="tcell">Zone</div>
      <div class="tcell">Prix 1 cours</div>
      <div class="tcell">Carte 5 cours</div>
    </div>
    <div class="tligne">
      <div class="tcell">1</div>
      <div class="tcell">90 €</div>
      <div class="tcell">400 €</div>
    </div>
    <div class="tligne">
      <div class="tcell">2</div>
      <div class="tcell">100 €</div>
      <div class="tcell">450 €</div>
    </div>
    <div class="tligne">
      <div class="tcell">3</div>
      <div class="tcell">sur devis</div>
      <div class="tcell">sur devis</div>
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
   */?>
  </section>
