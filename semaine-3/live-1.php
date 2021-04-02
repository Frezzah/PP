<?php 

	$n1		=	$_GET['nb1'];
	$n2		=	$_GET['nb2'];

	if ($n1 == $n2){
		echo "ERROR";
	}
	elseif ($n1 < $n2){
		$nombre = $n1 + 1;
		while ($nombre < $n2) {
			echo "$nombre ";
			$nombre = $nombre+1;
		}
	}
	elseif ($n1 > $n2){
		$nombre = $n1 - 1;
		while ($nombre > $n2) {
			echo "$nombre ";
			$nombre = $nombre-1;
		}
	}
	
?>