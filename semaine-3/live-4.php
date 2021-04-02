<?php 
	$positif	=	 $_GET['nombre'];
	$negatif	=	-$_GET['nombre'];

	$nombre = $negatif;
	while ($nombre <= $positif) {
		echo "$nombre ";
		$nombre = $nombre+1;
	}
?>