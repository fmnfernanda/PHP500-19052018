<?php

echo '<pre>';

$pessoas = [

	0=> [
		'nome'=> 'Lucas',
		'idade'=> 24
	    ],

	1=> [
		'nome'=> 'Jose',
		'idade'=> 65
	    ],

	2=> [
		'nome'=> 'Maria',
		'idade'=> 22
	    ],

];
//print_r($pessoas);

echo '<br>';

echo $pessoas[1]['nome'] . '<br>';
echo $pessoas[1]['idade'] . '<br>';
