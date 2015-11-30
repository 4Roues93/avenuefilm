<?php
	if(isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['nom'])){
		$destinataire = "benoitha@hotmail.fr";
		$sujet = "Ajout de film";
		$message = "Voici le message :\n\n
		Nom du film :" . $_POST['nom'] . "\n
		Email :" . $_POST['email'] . "\n
		Date de sortie :" . $_POST['annee'] . "\n
		Categorie du film :" . $_POST['categorie'] . "\n\n
		Description du film :\n" . $_POST['description']
		
		;
		mail($destinataire, $sujet, $message);
		echo "envoi reussi";
	}

?>
