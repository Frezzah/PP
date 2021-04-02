<?php 
			
	$fp = fopen("File_1.txt", "r");

	while (!feof($fp)) {
		$ligne = fgetc($fp);
		echo $ligne."</br>";
	}
			
?>