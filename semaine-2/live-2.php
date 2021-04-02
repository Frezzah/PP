<?php 

	$n1	=	$_GET['nb1'];
	$n2	=	$_GET['nb2'];
	$n3	=	$_GET['nb3'];

	if (($n1==$n2)||($n1==$n3)||($n2==$n3)) {
		echo "Un des trois chiffres est identique...";
	}
	elseif (($n1>$n2)&&($n1>$n3)){
		echo $n1." est plus grand que ".$n2." et ".$n3;
	}
	elseif (($n2>$n1)&&($n2>$n3)){
		echo $n2." est plus grand que ".$n1." et ".$n3;
	}
	elseif (($n3>$n1)&&($n3>$n2)){
		echo $n3." est plus grand que ".$n1." et ".$n2;
	}
	else{
		echo "ERREUR";
	}

?>