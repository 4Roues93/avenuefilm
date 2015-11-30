<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>streaming</title>
    <meta name="description" content="streaming compatible tablette & smartphhone">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    
    <link href="..css/bootstrap-3.3.2/disk/css/bootstrap.css" rel="stylesheet"/>
    <link href="..css/style.css" rel="stylesheet"/>
    <link href="..css/bootstrap-3.3.2/disk/css/bootstrap.min.css" rel="stylesheet">
    <link href="..css/full-slider.css" rel="stylesheet">
    <link href="..css/video-default.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
body {
	padding:3em;
	text-align:center;
	background:#000;
	color: white;
}
</style>
</head>

<body>
	<div class="container">
    		<!-- Navigation -->
    		<?php
      			include("includes/menu.php");
    		?>
	</div>
	<?php
		include("../admin/includes/bdd.php");
		$reponse = $bdd->query('SELECT * FROM films');?>

<video autostart loop controls>
  <source src="../admin/telechargement/films/<?php echo $_GET['video'];?>" type="video/mp4"/>
  <source src="../admin/telechargement/films/<?php echo $_GET['video'];?>" type="video/wmv" />
  <!-- Texte alternatif en cas de non prise en charge de la balise video -->
  <p class="warning">Le format *.mp4 n'est pas pris en charge par votre navigateur</p>
</video>	

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
