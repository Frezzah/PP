<?php 

// On peut aussi utiliser la fonction passeALaLigne dans la fonction afficheErreur
	function passeALaLigne(){
			echo "<br>";
	}
	function afficheErreur($message){
		passeALaLigne();
		echo "ERROR : $message";
		passeALaLigne();
	}

	echo "Ligne 1";
	afficheErreur("Problème");
	echo "Ligne 3";
			
?>