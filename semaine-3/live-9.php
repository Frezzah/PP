<?php 

	$n1	=	$_GET['nb1'];

	if ($n1 < 0) {
		echo "ERROR";
	}
	else {
		$cpt = 0;
		$trouve = false;
		while ($cpt <= 15000) {
			if ($cpt == $n1) {
				$trouve = true;
			}
			$cpt++;
		}
		if ($trouve == true) {
			echo "Le chiffre $n1 a été trouvé dans la boucle, il y a eu $cpt passages dans la boucle.";
		}
		else {
			echo "Le chiffre $n1 n'a pas été trouvé dans la boucle, il y a eu $cpt passages dans la boucle.";
		}
	}

?>