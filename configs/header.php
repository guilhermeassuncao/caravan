<?php
	session_start();

	$urlSite = $_SERVER['REQUEST_URI'];
	
	/* Retira Parametros da URL*/
	if (strpos($urlSite,'?')){ 
		$urlSite = substr($urlSite,0,strpos($urlSite,'?'));
	}

	/* Retira a primeira / da String */
	$urlSite = substr($urlSite, 1);

	/* Divive a string em array e separos pelo / */
	$urlSite = explode('/',$urlSite);
?>
