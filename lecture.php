<?php
session_start();

$_SESSION['nom'] = $_GET['nom'];
?>

<!DOCTYPE html>
<html lang="FR">

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
<link href="css/video-default.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="css/video-default.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/jquery.video-ui.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/video-default.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/jquery.video-ui.js"></script>
  </head>

  <body>
     <div class="container">
    <!-- Navigation -->
    <?php
      include("includes/menu.php");
    ?>
</div>
	<div class="container">
	   <div id="content" class="row">
		<?php
			include("admin/includes/bdd.php");
			$reponse = $bdd->query('SELECT * FROM films');
				 ?>
<div class="row">
            <div class="col-lg-12" style="margin:10% 0 0 0;">
                <h1><?php echo $_GET['titre'];?></h1>
            </div>
		
        </div>
		
	<div class="row">
		<section class="col-sm-4" table-responsive">
  			<div class="videoUiWrapper thumbnail" align="center">
<video controls="true" height="256" width="604">
    				<source src="01.mp4" type="video/mp4">
  				</video>
 			</div>
			
		</section>
		<section>
			
<div class="videoUiWrapper thumbnail">
  <video width="370" height="214" id="demo1">
    <source src="01.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

		</section>			
	</div>

    </div>
	
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

<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/jquery.video-ui.js"></script>

  </body>

</html>
