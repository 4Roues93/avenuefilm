<?php
	try{
	$bdd = new PDO('mysql:host=localhost;dbname=avenu613_admin','avenu613_benoit','Bh112244');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e)
	{
        	die('Erreur : '.$e->getMessage());
	}
?>