<?php
	if(isset($_POST) && isset($_POST['email']) && isset($_POST['mdp'])){
		
		include('includes/bdd.php');
		$reponse = $bdd->query('SELECT * FROM admin');
		$donnees = $reponse->fetch();		

		if((isset($_POST['email']) == $donnees['email']) && (isset($_POST['mdp']) == $donnees['mdp']))	{
			header('Location: ajout.php');	
		}
		else{
			header('Location: index.php');
		}
	}
	else{
			header('Location: index.php');
		}
?>


