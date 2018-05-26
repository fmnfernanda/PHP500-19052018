<?php

//criar uma funcao que receba uma idade e retorne se ele é maior de idade ou nao
//18 retornar true
//14 retornar false

$num1 = readline('Digite uma idade: ');

function parImpar ($num)
{
	if ($num >= 18){

		echo 'Maior de idade'.PHP_EOL ;
	}
	else{
		echo 'Menor de idade'.PHP_EOL;
	}

}
parImpar($num1);

echo '<hr>';

//echo parImpar ($num)? 'maior' : 'menor';