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
    
    <!-- Navigation -->
    <?php
      include("includes/menu.php");
    ?>

    <!-- Full Page Image Background Carousel Header -->
      <header id="myCarousel" class="carousel slide">
	
	<!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
	  <div class="item active">
          
	    <!-- Set the first background image using inline CSS below. -->
	      <div class="fill" style="background-image:url('fonts/lone_ranger_banner.jpg');"></div>
		<div class="carousel-caption">
		</div>
	      </div>
            
	      <div class="item">
                
                <!-- Set the second background image using inline CSS below. -->
		  <div class="fill" style="background-image:url('fonts/600X274batman-bannier.jpg');"></div>
		    <div class="carousel-caption">
		    </div>
		  </div>
            
	      <div class="item">
		
		<!-- Set the third background image using inline CSS below. -->
		  <div class="fill" style="background-image:url('fonts/Arrow-S2-03.jpg');"></div>
		    <div class="carousel-caption">
		    </div>
		</div>
	    </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Bienvenue !!!</h1>
                <p>Ce site est un site de streaming totalement gratuit. Grâce à ce site, vous pourrez visionner des films, series, et mangas(anime).<br>
		Pensez a installer flash player pour evitez les problémes de lecture des vidéos du site.<br>
		Pour tous problème avec le site web n'exitez pas a me contacter via le formulaire qui est dans le menu "posez une question".		
		</p>
            </div>
        </div>

        <hr>
      <?php
		include("includes/pied.php");
	?>

    </div>
    <!-- /.container -->

<?php
$monfichier = fopen('includes/compteur.txt', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues++; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
fclose($monfichier);

?>    

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
