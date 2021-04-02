<?php
 
	$n1		=	$_GET['nb1'];
	$n2		=	$_GET['nb2'];
	$negatif = false;

	// Si n2 est négatif on assigne true à $negatif et on inverse $n2 pour la suite
	if ($n2 < 0) {
		$n2 = -$n2;
		$negatif = true;
	}

	$multi = 0;
	$rep = 0;
	while ($multi < $n2) {
		$rep = $rep + $n1;
		$multi = $multi + 1;
	}


	// On donne la réponse en fonction du signe du nombre 2 ($n2)
	if ($negatif == true) {
		$rep = -$rep;
		echo "$rep";
	}
	else{
		echo "$rep";
	}

?>