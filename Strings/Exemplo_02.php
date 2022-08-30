<?php

	$text = "novo teste";

	echo strtoupper($text);

	echo "<br/>";

	echo strtolower($text);

	echo "<br/>";

	//deixa primeira letra maiuscula
	echo ucfirst($text);

	echo "<br/>";

	// Deixa primeira letra de cada palavra maiuscula

	$text = "teste para novo exemplo";
	echo ucwords($text);

	echo "<br/>";

?>