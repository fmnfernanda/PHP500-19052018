<?php

// Criar uma função que receba dois números e retorne o maior
// Exibir o Maior numero


$num1 = readline('Digite um numero: ');
$num2 = readline('Digite um numero: ');

function maior ($num1,$num2)
{
	if ($num1 >= $num2){

		echo 'O numero maior é: '. $num1 .PHP_EOL ;
	}
	else{
		
		echo 'O numero maior é: '. $num2 .PHP_EOL ;
	}

}
maior($num1,$num2);

echo '<hr>';