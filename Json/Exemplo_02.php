<?php

$json =
'[{"nome": "João","idade": 20},
  	{"nome": "Leandro","idade": 23}]';

$data = json_decode($json,true);

var_dump($data);
?>