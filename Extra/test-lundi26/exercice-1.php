<?php
	
	$ferrari = array(
	array('prix' => 'Monaco'	,'moyenne' => 123),
	array('prix' => 'Belgique'	,'moyenne' => 176),
	array('prix' => 'Singapour'	,'moyenne' => 156),
	array('prix' => 'Bresil'	,'moyenne' => 192)
	);

	$mercedes = array(
	array('prix' => 'Monaco'	,'moyenne' => 129),
	array('prix' => 'Belgique'	,'moyenne' => 171),
	array('prix' => 'Singapour'	,'moyenne' => 0),
	array('prix' => 'Bresil'	,'moyenne' => 197)
	);

	$mclaren = array(
	array('prix' => 'Monaco'	,'moyenne' => 127),
	array('prix' => 'Belgique'	,'moyenne' => 178),
	array('prix' => 'Singapour'	,'moyenne' => 153),
	array('prix' => 'Bresil'	,'moyenne' => 201)
	);

	


	function indice($ecurie){
		$cpt = 0;
		$nbr = count($ecurie);
		$max = $ecurie[0]['moyenne'];

		while ($cpt<$nbr) {
			if ($ecurie[$cpt]['moyenne']>$max) {
				$max = $ecurie[$cpt]['moyenne'];

			}
			$cpt++;
		}
	}

	//indice($ferrari);
	

// 4) Nombre de forfaits pour chaque écurie

	function forfait($ecurie){
		$cpt = 0;
		$nbr = count($ecurie);
		$forf = 0;
		while ($cpt < $nbr) {
			if ($ecurie[$cpt]['moyenne']==0) {
				$forf++;
			}
			$cpt++;
		}
		echo "L'écurie ".$ecurie." a fait ".$forf." forfaits.<br>";
	}

	forfait(mercedes);

?>