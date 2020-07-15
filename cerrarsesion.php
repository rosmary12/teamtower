<?php
	session_start();
	
	$varsession= $_SESSION['nickname'];
	if($varsession== null || $varsession=''){ 
		echo 'Usted no tiene autorizacion';
		die();
	}
	session_destroy();
	header("Location:Index.html")
?>