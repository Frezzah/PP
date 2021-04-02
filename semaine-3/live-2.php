<?php 

	$n1			=	$_GET['nb1'];
	$couleur	=	$_GET['couleur'];

	if ($n1%2 == 0 || $couleur == "bleu"){
		echo"ok";
	}
	else{
		echo "nok";
	}

?>