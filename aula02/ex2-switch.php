<?php

//vamos ler 2 numeros
//vamos ler uma opcao
//caso opcao 1 - somar os dois numeros e mostrar o resultado
//caso opcao 2 - subtrair os dois numeros e mostrar o resultado
//caso opcao 3 - multiplicar os dois numeros e mostrar o resultado
//caso opcao 4 - dividir os dois numeros e mostrar o resultado


$valor1 = readline('Digite um numero: ');

$valor2 = readline('Digite um numero: ');

$opcao = readline('Digite a opcao: ');

switch ($opcao){

	case 1:
	 $res = $valor1 + $valor2;
	 echo('A soma dos valores é: '. $res) .PHP_EOL;
	 break;

	case 2:
	 $res = $valor1 - $valor2;
	 echo('A subtracao dos valores é: '. $res) .PHP_EOL;
	 break; 

	case 3:
	 $res = $valor1 / $valor2;
	 echo('A divisao dos valores é: '. $res) .PHP_EOL;
	 break; 
    
    case 4:
	 $res = $valor1 * $valor2;
	 echo('A multiplicacao dos valores é: '. $res) .PHP_EOL;
	 break;
}
