<?php 

$points	= array(10, 5, 9, 0, 8, 7, 8, 8, 9, 7, 6, 5);
$nbr = count($points);
$nombre	= $_GET['nombre'];

$cpt = 0;
$trouve = false;
$fois = 0;
while ($cpt < $nbr) {
	if ($nombre == $points[$cpt]) {
		$trouve = true;
		$fois++;
	}
	$cpt++;
}

if ($trouve == true) {
	echo "Le nombre ".$nombre." a été trouvé ".$fois." fois";
}
else {
	echo "Le nombre ".$nombre." n'a pas été trouvé";
}

?>