<?php 
	
	$lignes = $_GET['lignes'];	
	$colonnes = $_GET['colonnes'];	
	
	function afficheCase($couleur){
		if ($couleur%2 == 0) {
			echo "Noir";
		}
		else{
			echo "Blanc";
		}
	}

	echo "<table>";
	$cptl=0;
	while ($cptl<$lignes) {
		echo "<tr>";
		$cptc=0;
		while ($cptc<$colonnes) {
			echo "<td>";
				$variable = $cptl+$cptc;
				echo afficheCase($variable);
			echo "</td>";
			$cptc++;
		}
		echo "</tr>";
		$cptl++;
	}
	echo "</table>";

?>