<?php

	require "array_contenido.php";
	// function getUserLanguage() {
	// 	$language = 'es';
	// 	// $language = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
	// 	return $language;
	// }
	require_once 'vendor/autoload.php';

	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader, array(
			'debug' => true
	));
	$twig->addExtension(new Twig_Extensions_Extension_Array());
	$twig->addExtension(new Twig_Extensions_Extension_Text());
	$twig->addExtension(new Twig_Extension_Debug());
?>