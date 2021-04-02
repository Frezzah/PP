<?php 

	$n1			=	$_GET['nb1'];
	$n2			=	$_GET['nb2'];
	$etape		=	$_GET['etape'];

	if ($n1 < $n2){
		$nombre = $n1 + $etape;
		while ($nombre < $n2) {
			echo "$nombre ";
			$nombre = $nombre + $etape;
		}
	}
	elseif ($n2 < $n1){
		$nombre = $n2 + $etape;
		while ($nombre < $n1) {
			echo "$nombre ";
			$nombre = $nombre + $etape;
		}
	}

?>