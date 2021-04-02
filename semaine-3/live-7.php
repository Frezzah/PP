<?php 
	$parts		=	$_GET['parts'];
	$invites	=	$_GET['invites'];

	$result = $parts%$invites;
	echo "$result";
?>