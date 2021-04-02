<?php 

	$n1		=	$_GET['nb1'];
	$n2		=	$_GET['nb2'];
	$ope	=	$_GET['operation'];

	if ($n2 == 0 && $ope == '/') {
		echo "ERREUR!!! Il n’est pas possible de diviser $n1 par 0!";
	}
	elseif ($ope == '+') {
		$resultat = $n1+$n2;
		echo "Le résultat de l'addition : ".$n1." ".$ope." ".$n2. " = ".$resultat;
	}
	elseif ($ope == '-') {
		$resultat = $n1-$n2;
		echo "Le résultat de la soustraction : ".$n1." ".$ope." ".$n2. " = ".$resultat;
	}
	elseif ($ope == '*') {
		$resultat = $n1*$n2;
		echo "Le résultat de la multiplication : ".$n1." ".$ope." ".$n2. " = ".$resultat;
	}
	elseif ($ope == '/') {
		$resultat = $n1/$n2;
		echo "Le résultat de la division : ".$n1." ".$ope." ".$n2. " = ".$resultat;
	}

?>