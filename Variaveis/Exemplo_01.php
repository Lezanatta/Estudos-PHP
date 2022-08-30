<?php

	$nome = "Leandro";
	$nome2 = "Maik";

	// "." serve para concatenação
	$nomeCompleto = $nome . " " . $nome2;

	echo $nome;
	echo "<br/>";
	var_dump($nome);

	echo "<br/>";

	//Para destruir a variável
	unset($nome);

	//Só vai exibir na tela caso existir a variável ou exisitir um valor;
	if(isset($nome)){
		echo "$nome";
	}

	echo "<br/>";
	echo($nomeCompleto);	

?>