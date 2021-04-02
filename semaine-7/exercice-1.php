<?php 
		
$classes = array(
array('libelle' => 'A1','moyenne' => 13,'nbEleves' => 33),
array('libelle' => 'A2','moyenne' => 19,'nbEleves' => 30),
array('libelle' => 'B1','moyenne' => 12,'nbEleves' => 21),
array('libelle' => 'B2','moyenne' => 12,'nbEleves' => 26),
array('libelle' => 'C1','moyenne' => 15,'nbEleves' => 32),
array('libelle' => 'C2','moyenne' => 20,'nbEleves' => 27),
array('libelle' => 'D1','moyenne' => 15,'nbEleves' => 22),
array('libelle' => 'D2','moyenne' => 12,'nbEleves' => 31),
array('libelle' => 'E1','moyenne' => 16,'nbEleves' => 33),
array('libelle' => 'E2','moyenne' => 19,'nbEleves' => 22),
array('libelle' => 'F1','moyenne' => 15,'nbEleves' => 32),
array('libelle' => 'F2','moyenne' => 12,'nbEleves' => 22),
array('libelle' => 'G1','moyenne' => 12,'nbEleves' => 22),
array('libelle' => 'G2','moyenne' => 13,'nbEleves' => 22),
array('libelle' => 'H1','moyenne' => 19,'nbEleves' => 21),
array('libelle' => 'H2','moyenne' => 12,'nbEleves' => 20),
array('libelle' => 'L1','moyenne' => 18,'nbEleves' => 22),
array('libelle' => 'L2','moyenne' => 16,'nbEleves' => 33),
array('libelle' => 'M1','moyenne' => 20,'nbEleves' => 22),
array('libelle' => 'M2','moyenne' => 15,'nbEleves' => 26),
array('libelle' => 'N1','moyenne' => 17,'nbEleves' => 35),
array('libelle' => 'N2','moyenne' => 17,'nbEleves' => 21),
array('libelle' => 'O1','moyenne' => 12,'nbEleves' => 31),
array('libelle' => 'O2','moyenne' => 12,'nbEleves' => 31)
);

$nbr = count($classes);
$max = $classes[0]['nbEleves'];
$cpt = 0;
while ($cpt < $nbr) {
	if ($classes[$cpt]['nbEleves'] > $max) {
		$max = $classes[$cpt]['nbEleves'];
		$libellemax = $classes[$cpt]['libelle'];
	}
	$cpt++;
}	
echo "1) La classe qui possède le plus d'élèves est la classe ".$libellemax." avec ".$max." élèves"."<br>";

$cpt = 0;
$somme = 0;
while ($cpt < $nbr) {
	$somme = $somme + $classes[$cpt]['moyenne'];
	$cpt++;
}
$moyenne = $somme/$nbr;

echo "2) La moyenne des points de toutes les classes est ".$moyenne."<br>";
		
echo "3) Il y a ".$nbr." classes";

?>