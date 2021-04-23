<?php 
	
	$nbr = $_GET['nombre'];	
	$fp = fopen("./File_7_1.txt", "r");

	// Création du tableau
	$tableau = array();
	fgets($fp);

	// Incrémentation du fichier au tableau
	while (!feof($fp)) {
		$tableau[]= fgets($fp);
	}

	// Vérification du nombre du formulaire dans le tableau
	$cpt = 0;
	$nbrtableau = count($tableau);
	$trouve = false;
	$inf = 0;
	$sup = 0;
	while ( $cpt < $nbrtableau) {
		if ($nbr == (int)$tableau[$cpt]) {
			$trouve = true;
			// (1)
		}
		elseif ((int)$tableau[$cpt]<$nbr){
			$inf++;
		}
		elseif ((int)$tableau[$cpt]>$nbr){
			$sup++;
		}
		$cpt++;
	}
	if ($trouve == true) { // ou if($trouve){
		echo $nbr." a été trouvé"."<br>";
	} // Cette condition if pourrait être enlevée. Il faudrait alors mettre echo à "(1)" juste au dessus.
	else{
		echo $nbr." n'a pas été trouvé"."<br>";
	}
	echo "Il y a ".$inf." nombre(s) inférieur à ".$nbr."<br>";
	echo "Il y a ".$sup." nombre(s) supérieur à ".$nbr."<br>";

	/* (i)

	while (!feof($fp)) à la ligne 8 veut dire "tant que le fichier contient quelque chose (caractères/nombre/autre), je continue. Si on arrive à la fin du fichier, feof($fp) devient true, !feop($fp) devient donc false et la boucle s'arrête. On l'utilise pour parcourire l'entièreté du fichier et créer notre tableau au complet.

	fgets($fp) vient lire et prendre la chaîne de caractère (s pour string) dans le fichier $fp. Un fois lu, le lecteur va passer à la ligne suivante (c'est automatique).
	On l'utilise à la ligne 7 pour ne pas prendre en compte la prmière chaîne de caractère qui est "nombre" parce qu'on ne veut pas cela dans notre tableau.
	A la ligne 9, elle est utilise dans la boucle. On vient incrémenter à chaque passage de la boucle une nouvelle chaîne de caractère dans notre tableau.
	--> $tableau[] = permet d'ajouter une valeur/chaîne de caractère dans notre tableau.

	$inf et $sup sont les compteurs que l'on démarre à zéro à la ligne 14 et 15 pour additionner par la suite (ligne 21 à 26) les valeurs qui sont inférieur ou supérieur au nombre indiqué dans le formulaire.
	On pourra donc ensuite utiliser ces compteurs à la fin (ligne 35 et 36).

	(int) est utilisé pour transformer la chaîne de caractère en nombre entier (ex: "24" en 24) et permettre la comparaison de deux nombres entiers.

	*/
?>