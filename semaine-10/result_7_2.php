<?php 
	
	$nbr = $_GET['nombre'];	
	$fp = fopen("./File_7_2.txt", "r");

	// Création du tableau
	$tableau = array();

	// Incrémentation du fichier au tableau
	while (!feof($fp)) {
		$tableau[] = fgets($fp);
	}

	// Vérification du nombre du formulaire dans le tableau
	$cpt = 0;
	$nbrtableau = count($tableau);
	$trouve = false;

	while ($cpt < $nbrtableau AND (!$trouve)) {
		if ($nbr == (int)$tableau[$cpt]) {
			$trouve = true;
			// (1)
		}
		$cpt++;
	}
	if ($trouve) { // ou if($trouve == true){
		echo $nbr." a été trouvé"."<br>";
	}	// Cette condition if pourrait être enlevée. Il faudrait alors mettre echo à "(1)" juste au dessus.
	else{
		echo $nbr." n'a pas été trouvé"."<br>";
	}

	/* (i)

	La seule différence avec l'éxercice précédent est qu'on optimise la recherche à la ligne 19. On demande juste à arrêté la boucle au moment ou le nombre du formulaire est trouvé.
	ATTENTION, il y a encore moyen d'améliorer la recherche. On peut encore l'améliorer dans ce cas si étant donné que les données sont triées (dans l'ordre croissant par exemple).
	--> Pour encore améliorer la recherche, voir cours "PP-7-Recherche" aux slides 10 à 17 (et/ou V2 si je l'ai faite)

	RAPPEL:

	while (!feof($fp)) à la ligne 10 veut dire "tant que le fichier contient quelque chose (caractères/nombre/autre), je continue. Si on arrive à la fin du fichier, feof($fp) devient true, !feop($fp) devient donc false et la boucle s'arrête. On l'utilise pour parcourire l'entièreté du fichier et créer notre tableau au complet.

	fgets($fp) vient lire et prendre la chaîne de caractère (s pour string) dans le fichier $fp. Un fois lu, le lecteur va passer à la ligne suivante (c'est automatique).
	A la ligne 11, elle est utilisé dans la boucle. On vient incrémenter à chaque passage de la boucle une nouvelle chaîne de caractère dans notre tableau.
	--> $tableau[] = permet d'ajouter une valeur/chaîne de caractère dans notre tableau.

	(int) est utilisé pour transformer la chaîne de caractère en nombre entier (ex: "24" en 24) et permettre la comparaison de deux nombres entiers.

	*/

?>