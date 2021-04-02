<?php 

	$age	=	$_GET['age'];
	$prenom	=	$_GET['prenom'];
	$sexe	=	$_GET['sexe'];

	if ($age<=0 || $age>120) {
		echo "ERREUR";
	}
	elseif ($sexe=='homme' && $age==1) {
		echo "Monsieur ".$prenom." a ".$age." an.";
	}
	elseif ($sexe=='homme' && $age>1) {
		echo "Monsieur ".$prenom." a ".$age." ans.";
	}
	elseif ($sexe=='femme' && $age==1) {
		echo "Madame ".$prenom." a ".$age." an.";
	}
	elseif ($sexe=='femme' && $age>1) {
		echo "Madame ".$prenom." a ".$age." ans.";
	}

?>