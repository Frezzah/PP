<?php 

$xoxo	= array('X', 'X', 'X', 'O', 'O', 'X', 'X', 'O', 'X', 'O', 'X', 'O', 'O', 'O', 'O');
$nbr	= count($xoxo);

$cpt = 0;
$x = 0;
$o = 0;
while ($cpt < $nbr) {
	if ($xoxo[$cpt] == "X") {
		$x++;
		}
	else{
		$o++;
		}
	$cpt++;
}

echo "Il y a ".$x." fois X dans le tableau <br>";
echo "Il y a ".$o." fois O dans le tableau <br>";
	

if ($x == $o) {
	echo "Il y a autant de X que de O";
}
elseif ($x > $o) {
	echo "Il y a plus de X (".$x.")";
}
else {
	echo "Il y a plus de O (".$o.")";
}

?>