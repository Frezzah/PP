<?php 

	function estPair($nombre){
		if ($nombre%2 == 0) {
			return true;
		}
		else{
			return false;
		}
	}

// Essayons la fonction avec une boucle qui va regarder si les nombres (de 0 à 10) sont paires.
	$cpt = 0;
	while ($cpt <= 10) {
		if (estPair($cpt)) {
			echo $cpt." est un nombre pair <br>";
		}
		else{
			echo $cpt." est un nombre impair <br>";
		}
		$cpt++;
	}

?>