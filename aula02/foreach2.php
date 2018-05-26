<?php


$pessoa = [
	'nome'   => 'Fernanda',
	'idade'  =>  34,
	'e-mail' => 'fmnfernanda@gmail.com',
	'altura' =>  1.70
	];

echo '<pre>';

print_r($pessoa);

echo '<hr>';

foreach ($pessoa as $chave => $valor){
	echo 'chave' .$chave.' - valor '.$valor .'<br>';    
	
}

echo '<hr>';

foreach ($pessoa as $chave => $valor){
	echo 'valor '.$valor .'<br>';    
	
}