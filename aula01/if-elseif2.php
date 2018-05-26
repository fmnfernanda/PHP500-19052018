<?php

//CLI
//Nota - Digite sua nota
//Frequencia - Digite sua frequencia
//Se esta aprovado
//se esta em recuperacao
//se esta reprovado
//aprovado nota >=7 e frequencia >= 8
//recuperacao nota >= 5 ou nota < 7 e frequencia >= 8
//reprovado nota < 5 ou frequencia < 8

$nota = readline ('Digite sua nota: ');
$frequencia = readline ('Digite sua frequencia: ');

if ($nota >=7 && $frequencia >= 8){
	echo 'APROVADO' . PHP_EOL;
}
//$nota >= 5 && $frequencia >= 8 || $nota < 7 && $frequencia >= 8
elseif ($nota >= 5 && $frequencia >= 8){
	echo 'ESTA DE RECUPERACAO' . PHP_EOL;
}
else {
	echo 'ESTA REPROVADO' . PHP_EOL;
}

