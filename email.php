<!DOCTYPE html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns#">
<head>
        <meta charset="utf-8" />

<?php
	$maintenance = 0;

	$themes_list = array(
		"theme1"	=>	"Initiation à la couture",
                "theme2"        =>      "Vêtements bébé",
                "theme3"        =>      "Vêtements enfant",
                "theme4"        =>      "Accessoires bébé / enfant",
                "theme5"        =>      "Vêtements femme",
                "theme6"        =>      "Vêtements homme",
                "theme7"        =>      "Pour chez toi",
                "theme8"        =>      "Recyclage et détournement",
                "theme9"        =>      "Techniques de couture",
                "theme10"       =>      "Ateliers événements",
                "theme11"       =>      "Sacs, chapeaux et accessoires"
	);


	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {	
	$to = "contact@madeincheztoi.com, lbernable@gmail.com";
	$subject = "Contact site web Made in Chez Toi";
	$message =
	"Nom et prenom : " . $_POST['nom'] . "\r\n" .
	"Adresse mail : " . $_POST['email'] . "\r\n" .
	"Téléphone : " . $_POST['tel'] . "\r\n" .
	"Ville : " . $_POST['ville'] . "\r\n" .
	"\r\n" .
	"Raison : ";
	switch ($_POST['question']) {
    		case "infos":
		$message .= "Souhaite avoir des infos générales";
        break;
    		case "particulier":
		$message .= "Souhaite avoir des cours particuliers\r\n";
		if ($_POST['date_cp'] != "") {
			$message .= "Date souhaitée : " . $_POST['date_cp'] . "\r\n";
		} else {
			$message .= "Date souhaitée : information non précisée\r\n";
		}
		if ($_POST['time_cp'] != "") {
			$message .= "Heure souhaitée : " . $_POST['time_cp'] . "\r\n";
		} else {
			$message .= "Heure souhaitée : 9h30 (valeur par défaut non changée)\r\n";
		}
        break;
	    	case "participer":
		$message .= "Souhaite participer à un atelier existant\r\n";
		$message .= "Référence de l'atelier : " . $_POST['ref'];
        break;
    		case "heberger":
		$message .= "Souhaite héberger un atelier\r\n";
		if ($_POST['date'] != "") {
			$message .= "Date souhaitée : " . $_POST['date'] . "\r\n";
		} else {
			$message .= "Date souhaitée : information non précisée\r\n";
		}
		if ($_POST['time'] != "") {
			$message .= "Heure souhaitée : " . $_POST['time'] . "\r\n";
		} else {
			$message .= "Heure souhaitée : 9h30 (valeur par défaut non changée)\r\n";
		}
		$message .= "Thème : " . $themes_list[$_POST['theme']];
        break;
    		case "CE":
		$message .= "Est intéressé par l'offre CE";
        break;
    		case "devis":
		$message .= "Souhaite un devis pour une prestation sur-mesure";
        break;
    		case "cadeau":
		$message .= "Souhaite offrir une carte cadeau\r\n";
		if ($_POST['date_cadeau'] != "") {
                        $message .= "Date du cadeau : " . $_POST['date_cadeau'] . "\r\n";
                } else {
                        $message .= "Date du cadeau : information non précisée\r\n";
                }
		$message .= "Prénom du bénéficiaire : " . $_POST['prenom_cadeau'];
        break;
}
	$message .= "\r\n" . 
	"\r\n" .
	"Message: " . $_POST['message'];
	$from=$_POST['email'];
	$headers = "From: $from" . "\r\n";
	mail($to,$subject,$message,$headers);
	$valide=1;
	if (!$maintenance) { print "<meta http-equiv=\"refresh\" content=\"6;index.html\" />"; }
} else {
	$valide=0;
}
	
?>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="rights" content="Copyright 2014/2016 - Made in chez toi (FR)"/> 
        <title>Ateliers et cours de couture à domicile entre amis • Made in chez toi</title>
        <meta name="description" content="Ateliers couture collectifs ou cours particuliers, dans ton salon ou chez tes amis - Plein de projets adaptés à tous les niveaux !"/> 
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
        <link rel="stylesheet" href="assets/css/style_madeincheztoi.css" />
        <!--<link rel="alternate" type="application/rss+xml" title="Made in chez toi • Actus" href="http://blog.madeincheztoi.com/feed/" />-->
        <link rel="author" href="http://www.madeincheztoi.com/index.html#faq11" />
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
</head>

<body>

        <nav>
          <div id="menu_call"><img src="assets/images/bottom.png" alt=""/> MENU</div>
          <ul id="menutop" class="menu">
                <li><a href="index.html#home" title="Début">Home</a></li>
                <li><a href="index.html#quoi" title="C'est quoi ?">C'est quoi ?</a></li>
                <li><a href="index.html#offres" title="Les offres Made in chez toi">Offres</a></li>
                <li><a href="ateliers_et_cours_de_couture_a_domicile.php" title="Le détail des ateliers">Ateliers</a></li>
                <li><a href="index.html#contact" title="Je veux contacter Made in chez toi">Contact</a></li>
                <li><a href="photos.html" title="Galerie photos">Photos</a></li>
                <li><a href="index.html#faq" title="Toutes les réponses sont là !">FÀQ-propos</a></li>
                <li><a href="index.html#partenaires" title="Plus on est de fous...">Partenaires</a></li>
                <li><a href="http://blog.madeincheztoi.com/" title="Les actus en temps réel !">Blog</a></li>
          </ul>
        </nav>


	<section id="faq">
	 <div class="cell1">
	  <div class="contenu">
<?php
	if($valide && !$maintenance) {
		print "<h1>Merci !</h1>";
	} else {
		print "<h1>Attention !</h1>";
	}
	print "<p>";
	if($maintenance) {
		print "<h2>Le système d'envoi de mail est en maintenance.<br />Merci de réessayer d'ici quelques minutes !</h2>";
//		print "<br />Message envoyé :<br />" . $message ;
	} else if($valide) {
		print "<h2>Votre message a bien été envoyé !<br /> Nous reviendrons vers vous dans les plus brefs délais.<br /><br />À très bientôt !</h2>";
	} else {
		print "<h2>Votre adresse email est erronée...<br />Merci de préciser une adresse email valide !";
		print "<br /><br /><a href=\"javascript:history.go(-1)\"><b>Revenir au formulaire</b></a></h2>";
	} 
?>
	   </p>
	  </div>
	 </div>
	</section>

        <script type="text/javascript" src="assets/js/madeincheztoi-min.js"></script>

</body>
</html>
