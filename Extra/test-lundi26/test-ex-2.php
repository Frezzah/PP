<?php
function recherche($array, $nbr){
	$cpt = 0;
	$nombre = count($array);
	$trouve = false;

	while($cpt<$nombre && $trouve == false){
	    if($nbr == $array[$cpt]){
	        $trouve = true;  
	    }
	    $cpt++;
	}

if($trouve == true){
    return 1;
}
else{
    return 0;
}
}