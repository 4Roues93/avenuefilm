<?php
	if(isset($_POST['nom']) && isset($_POST['video'])){
		include("../admin/includes/bdd.php");
		$req = $bdd->prepare('INSERT INTO films VALUES(id, :titre, :description, :photo, :date, :categorie, :video)');
		$req->execute(array(
		'titre' => $_POST['nom'],
		'description' => $_POST['description'],
		'photo' => $_FILES['photo']['name'],
		'date' => $_POST['date'],
		'categorie' => $_POST['categorie'],
		'video' => $_POST['video']
		));
		move_uploaded_file($_FILES['photo']['tmp_name'], 'telechargement/images/'.basename($_FILES['photo']['name']));

		header('Location: confirm.php');
	}
	else{
		header('Location: refus.php');
	}
?>
