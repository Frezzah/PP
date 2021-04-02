<?php

$points	= array(10, 5, 9, 0, 8, 7, 8, 8, 9, 7, 6, 5);
$nbr = count($points);

$cpt = 0;
$somme = 0;
while ($cpt < $nbr) {
	$somme = $somme + $points[$cpt];
	$cpt++;
}

echo "La moyenne est ".$somme/$nbr."<br>";

$cpt = 0;
$max = $points[0];
while ($cpt < $nbr) {
	if ($points[$cpt] > $max) {
		$max = $points[$cpt];
	}
	$cpt++;
}

echo "La valeur max est ".$max."<br>";

echo "Il y a ".$nbr." valeurs dans le tableau";

?>