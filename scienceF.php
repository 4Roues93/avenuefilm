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

	<link href="assets/css/video-default.css" rel="stylesheet">



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
	   <div id="content" class="row">
			<div class="row">
				<div class="liste">
		<?php
			include("admin/includes/bdd.php");
			
			$nombre_max_page = 3;
			$depart = 1;
					if(isset($_GET['p'])){
						$depart = $_GET['p'];
					}
			$reponse = $bdd->query("SELECT * FROM films WHERE categorie='ScienceF' ORDER BY titre ASC LIMIT ".(($depart-1)*$nombre_max_page).",$nombre_max_page" );
			
			while($donnees = $reponse->fetch()){
				 ?>
		<section class="col-sm-4" table-responsive">
  			<table class="table table-bordered table-striped table-condensed">
				 <dl id="deco-table">
				<dt class="col-sm-12"><h4><?php echo $donnees['titre'];?></h4></dt>
					<dd><div class="col-lg-2"><img src="admin/telechargement/images/<?php echo $donnees['photo'];?>" width="155" height="50" alt="Video" class="img-thumbnail"></div>

			</dd>
			<dd><div class="col-lg-2"><div class="overflow"><p><b>Date de sortie :</b><br><?php echo $donnees['date'];?><br><b><u>la synopsis :</u></b><br><?php echo $donnees['description'];?></p></div></div>
				<dd class="col-sm-12">
					<a href="lecteur/lecteur.php?id=<?php echo $donnees['id'];?>&titre=<?php echo $donnees['titre'];?>&video=<?php echo $donnees['video'];?>"><button class="btn-primary">Voir la vidéo</button></a>
</dd>
				</table>
			</section>
<?php
			}
		?>
				
		</div>

    </div>
	
	</div>
	

    <div id="page_navigation">
		Page :
		<?php
			$total_tab = $bdd->query("SELECT COUNT(*) AS total FROM films WHERE categorie='ScienceF' ORDER BY titre ASC");
			$donnees_total_tab = $total_tab->fetch();
			$total = $donnees_total_tab['total'];
		
			$nombreDePages = ceil($total / $nombre_max_page);
		
			for($i = 1; $i <= $nombreDePages; $i++){
				echo " <a href=\"scienceF.php?p=$i\"> $i - </a>";
			}
		?>
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
