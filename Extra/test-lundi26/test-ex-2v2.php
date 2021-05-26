<?php
function recherche($array, $nbr){
	$cpt = 0;
	$nombre = count($array);

	while($cpt<$nombre){
	    if($nbr == $array[$cpt]){    
	    return 1;   
	    }
	    $cpt++;
	}
    return 0;
}