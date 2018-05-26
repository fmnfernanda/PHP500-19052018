<?php

//cli - switch
//Note - Digite sua nota
//Frequencia - digite sua frequencia
//se esta aprovado
//se esta em recuperacao
//se esta reprovado
//aprovado  - nota >= 7 e frequencia >= 8
//recuperacao - note >= 5 ou nota < 7 e frequencia >= 8
//reprovado - nota < 5 ou frequencia < 8

$nota = readline('Digite sua nota: ');

$freq = readline('Digite sua freqeuncia: ');

switch (true){

	case($nota >= 7 && $freq >= 8):
	 echo('voce esta aprovado') .PHP_EOL;
	 break;

	case($nota >= 5 && $freq >= 8):
	 echo('voce esta em recuperacao') .PHP_EOL;
	 break; 

	case($nota < 5 || $freq < 8):
	 echo('voce esta reprovado') .PHP_EOL;
	 break; 
}