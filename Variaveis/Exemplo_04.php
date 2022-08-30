<?php

	$nome = "Glaucio";


	function teste(){
		//Global eu informo que a variável dentro da função tem o mesmo valor que fora dela
		global $nome;
		echo $nome;
	}

	function teste2(){

		echo "<br/>";

		//Por conta do escopo da variável criar um outra com o mesmo nome não afeta em nada
		$nome = "João";
		echo $nome . " Agora no teste 2";
	}

	teste();
	teste2();
?>