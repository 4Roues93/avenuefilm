Page :
<?php
		
		
			
			
			$total_tab = $bdd->query("SELECT COUNT(*) AS total FROM films");
			$donnees_total_tab = $total_tab->fetch();
			$total = $donnees_total_tab['total'];
		
		
		$nombreDePages = ceil($total / $nombre_max_page);
		
		for($i = 1; $i <= $nombreDePages; $i++){
			echo " <a href=\"scienceS.php?p=$i\"> $i - </a>";
		}
		?>