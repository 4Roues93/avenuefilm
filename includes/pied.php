<?php
$monfichier = fopen('includes/compteur.txt', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)

fclose($monfichier);
?>     

	 <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2015 by 4Roues93 | Vous êtes le <?php echo $pages_vues;?> ème visiteurs</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>