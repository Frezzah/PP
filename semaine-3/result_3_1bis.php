<?php 
			
	$fp = fopen("File_1.txt", "r");

	$pair = 0;
	while (!feof($fp)) {
		$car = fgetc($fp);
		if ($pair%2 == 0) {
			echo $car."<br>";
		}
		$pair++;
	}
			
?>