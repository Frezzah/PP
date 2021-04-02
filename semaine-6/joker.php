<?php 
		
$tableau = array();

$cpt = 0;
while ($cpt < 6) {
	$tableau[] = rand(0, 9);
	$cpt++;
}

$jeu = implode(", ", $tableau);
echo $jeu;

?>