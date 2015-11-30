<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>streaming</title>
    <meta name="description" content="streaming compatible tablette & smartphhone">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    
    <link href="css/bootstrap-3.3.2/disk/css/bootstrap.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/bootstrap-3.3.2/disk/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
  </head>

  <body>
     <div class="container">
    <!-- Navigation -->
    <?php
      include("includes/menu.php");
    ?>
</div>
	<div class="container">
	<div class="demande">
		<p>Ce formulaire permet de demander la mise en ligne d'une vidéo que vous ne trouvez pas sur le site. Une fois mit en ligne vous serez avertis par e-mail. Vous pouvez me poser toutes les questions que vous voulez ici</p>
		<form action="envoi_demande.php" method="POST">
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="name" name="nom"/>
			</div>
			<div class="form-group">
				<label for="email">Votre email :</label>
				<input type="text" class="form-control" id="email" name="email"/>
			</div>
			<div class="form-group">
				<label for="annee">Année de sortie :</label>
				<input type="text" class="form-control" id="annee" name="annee"/>
			</div>
			<div class="form-group">
				<label for="categorie">Catégorie du film :</label>
				<input type="text" class="form-control" id="categorie" name="categorie"/>
			</div>
			<div class="form-group">
				<label for="description">Description du film :</label>
				<textarea type="text" class="form-control" id="description" name="description">
				</textarea>
			</div>
			<div class="form-group" style="color:black;">
				<input type="submit" value="Envoi la demande"/>
			</div>
		</form>
	</div>
</div>
      <?php
		include("includes/pied.php");
	?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

      
  </body>

</html>
