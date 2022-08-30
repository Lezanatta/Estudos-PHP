<?php

	//qualquer informação que vir por get ou post é uma string
	$nome = (int)$_GET["a"];
	//var_dump($nome);

	//consigo pegar o ip dinâmico do usuário que está acessando o site
	$ip = $_SERVER["REMOTE_ADDR"];

	//consigo pegar o nome do arquivo
	$ip2 = $_SERVER["SCRIPT_NAME"];

	echo $ip2;

?>