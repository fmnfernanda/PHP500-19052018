<?php

//cli 
//criar uma funcao que receba um numero e retorne se ele é par ou impar
//2 - exibir par
//3 - exibir impar


$num1 = readline('Digite um numero: ');

function idade ($num)
{
	if ($num %2 == 0){

		echo 'Numero par'.PHP_EOL ;
	}
	else{
		echo 'Numero impar'.PHP_EOL;
	}
//return ($num %2 ==0) ? 'par' : 'impar'; TERNARIO
}
idade($num1);

echo '<hr>';