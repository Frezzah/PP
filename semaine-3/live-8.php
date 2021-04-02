<?php

	$participants	=	$_GET['participants'];

	if ($participants < 0) {
		echo "ERROR";
	}
	elseif ($participants%20 == 0) {
		$result = $participants/20;
		echo "$result";
	}
	else{
		$result = (int)($participants/20) + 1;
		echo "$result";
	}
	
?>