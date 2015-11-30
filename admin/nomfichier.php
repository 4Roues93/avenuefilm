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

  <body><br><br><br><br>
     <div class="container">
    <!-- Navigation -->
    <?php
      include("includes/menu.php");
    ?>
</div>
	<div class="container">
	<div class="demande">
		<form action="ajoutpost2.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
			<p><a href="#">Modifier vidéos</a> | <a href="#">Supprimer vidéo</a> | <a href="#">ajout nom fichier</a></p>
				<label for="nom">Nom du film :</label>
				<input type="text" class="form-control" id="nom" name="nom"/>
			</div>
			<div class="form-group">
				<label for="date">Année de sortie :</label>
				<input type="text" class="form-control" id="date" name="date"/>
			</div>
			<div class="form-group">
				<label for="categorie">Categorie :</label>
				<select class="form-control" id="categorie" name="categorie">
				<optgroup label="Film">
				<option value="ActionF" name="categorie">Action/Aventure</option>
				<option value="ComedieF" name="categorie">Comedie</option>
				<option value="DessinF" name="categorie">Dessin animé</option>
				<option value="HorreurF" name="categorie">Horreur</option>
				<option value="ScienceF" name="categorie">Science fiction/Fanstastique</option>
				<option value="TrillerF" name="categorie">Triller</option>
				<option value="DiversF" name="categorie">Divers</option>
				</optgroup>

				<optgroup label="Series">
				<option value="ActionS" name="categorie">Action/Aventure</option>
				<option value="ComedieS" name="categorie">Comedie</option>
				<option value="HorreurS" name="categorie">Horreur</option>
				<option value="ScienceS" name="categorie">Science fiction/Fanstastique</option>
				<option value="TrillerS" name="categorie">Triller</option>
				</optgroup>

				<optgroup label="Mangas">
				<option value="mangas" name="categorie">Mangas</option>
				</optgroup>
				</select>
			</div> 

			<div class="form-group">
				<label for="description">Description :</label><br>
				<textarea cols="114" rows="6" name="description" style="color:black;"></textarea>
			</div>

			<div class="form-group">
				<label for="photo">Ajout image :</label><br>
				<input type="file" name="photo"/>
			</div>

			<div class="form-group">
				<label for="video">Ajout nom fichier :</label><br>
				<input type="text" class="form-control" id="video" name="video"/>
			</div>
			             
			<div class="form-group" style="color:black;">
				<input type="submit" value="Ajout"/>
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
