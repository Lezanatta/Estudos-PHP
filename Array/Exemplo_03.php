<?php

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Leandro',
	'idade' => 23
));

//print_r($pessoas);

echo $pessoas[0]["nome"];


?>