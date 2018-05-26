<?php

//cli
//usando array numerico e usando array associativo
//ler informacoes de uma pessoa
//armazenar as informacoes em um array
//exibir as informacoes vindas do array
//nome, idade, email, empresa


$arr[] = readline('Digite seu nome: ');
$arr[] = readline('Digite seu idade: ');
$arr[] = readline('Digite seu e-mail: ');
$arr[] = readline('Digite seu empresa: ');

echo 'Seu nome: '. $arr[0].PHP_EOL;
echo 'Sua idade: '. $arr[1].PHP_EOL;
echo 'Seu e-mail: '. $arr[2].PHP_EOL;
echo 'Sua empresa: '. $arr[3].PHP_EOL;

echo '.....................................'.PHP_EOL;

for($i=0; $i<4; $i++){
	echo $arr [$i] .PHP_EOL;

}