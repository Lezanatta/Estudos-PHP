<?php

	$frase = "A repetição é mãe da retenção.";

	$q = strpos($frase, "mãe");

	$palavra = "mãe";

	$texto = substr($frase, 0,$q);
	var_dump($texto);
	echo "<br/>";

	$texto = substr($frase, $q + strlen($palavra), strlen($frase));
	var_dump($texto);


?>