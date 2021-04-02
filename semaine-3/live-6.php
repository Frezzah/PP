<?php 
	$parts		=	$_GET['parts'];
	$invites	=	$_GET['invites'];

	if ($parts == 0 || $invites == 0) {
		echo "ERROR";
	}
	else {
	$result = (int)($parts/$invites);
	echo $result;	
	}
?>