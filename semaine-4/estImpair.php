<?php 

	function estImpair($nombre){
		if ($nombre%2 == 1) {
			return true;
		}
		else{
			return false;
		}
	}

// Essayons la fonction avec une boucle qui va regarder si les nombres (de 0 à 10) sont impaires.
	$cpt = 0;
	while ($cpt <= 10) {
		if (estImpair($cpt)) {
			echo $cpt." est un nombre impair <br>";
		}
		else{
			echo $cpt." est un nombre pair <br>";
		}
		$cpt++;
	}

?>