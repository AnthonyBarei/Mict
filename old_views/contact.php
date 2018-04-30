<?php require_once('views/base.php'); ?>
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
