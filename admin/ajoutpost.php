<?php
	if(isset($_POST['nom']) && isset($_FILES['video'])){
		include("../admin/includes/bdd.php");
		$req = $bdd->prepare('INSERT INTO films VALUES(id, :titre, :description, :photo, :date, :categorie, :video)');
		$req->execute(array(
		'titre' => $_POST['nom'],
		'description' => $_POST['description'],
		'photo' => $_FILES['photo']['name'],
		'date' => $_POST['date'],
		'categorie' => $_POST['categorie'],
		'video' => $_FILES['video']['name']
		));
		move_uploaded_file($_FILES['photo']['tmp_name'], 'telechargement/images/'.basename($_FILES['photo']['name']));
 		move_uploaded_file($_FILES['video']['tmp_name'], 'telechargement/films/'.basename($_FILES['video']['name']));

		header('Location: confirm.php');
	}
	else{
		header('Location: refus.php');
	}
?>
