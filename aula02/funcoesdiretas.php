<?php

function parImpar ($num)
{
	if ($num %2 == 0){

		return 'Par'.PHP_EOL ;
	}
	else{
		return 'Impar'.PHP_EOL;
	}
//return ($num %2 ==0) ? 'par' : 'impar'; TERNARIO
}


function idade ($num)
{
	if ($num >= 18){

		return 'Maior de idade'.PHP_EOL ;
	}
	else{
		return 'Menor de idade'.PHP_EOL;
	}

}

function maior ($num1,$num2)
{
	if ($num1 >= $num2){

		return $num1 .PHP_EOL ;
	}
	else{
		
		return $num2 .PHP_EOL ;
	}

}

echo 'Descubra se o numero é par ou impar' .PHP_EOL ;

$num1 = readline('Digite um numero: ');

echo 'O numero é: ' .parImpar ($num1);

echo PHP_EOL ;

echo 'Maior ou Menor de Idade'.PHP_EOL;

$num1 = readline('Digite uma idade: ');

echo 'Voce é ' .idade ($num1).PHP_EOL;

echo PHP_EOL ;

echo 'Descubra o maior numero' .PHP_EOL ;

$num1 = readline('Digite um numero: ');
$num2 = readline('Digite um numero: ');

echo 'O numero maior é ' .maior ($num1,$num2);


