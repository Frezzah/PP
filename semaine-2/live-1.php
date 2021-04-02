<?php 

	$nombre1	=	$_GET['nb1'];
	$nombre2	=	$_GET['nb2'];

	if ($nombre1 < $nombre2) {
		echo $nombre1 . " est plus petit que " . $nombre2;
	}
	elseif ($nombre1 > $nombre2) {
		echo $nombre1 . " est plus grand que " . $nombre2;
	}
	elseif ($nombre1 = $nombre2) {
		echo $nombre1 . " est égal à " . $nombre2;
	}

?>