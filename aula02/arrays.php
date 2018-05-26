<?php

//array

//[o] = valor
//[1] = valor2

echo '<pre>';

//$arr = ['valor' , 'valor2'];

//echo $arr; nao funciona

//$arr = array('string', true, 1,2.3);

//$arr[]= 'string';
//$arr[3]=123;
//$arr[3]=456;

$arr = ['Fernanda', 34, 'fmnfernanda@gmail.com', 1.70];


print_r($arr); //funciona
//var_dump($arr); //funciona

echo $arr[0] . '<br>';
echo $arr[1] . '<br>';
echo $arr[2] . '<br>';
echo $arr[3] . '<br>';

echo '<hr>';

for ($i=0; $i<4; $i++){
	echo $arr [$i] . '<br>';

}

echo '<hr>';

//array associativo


$pessoa = [
	'nome'   => 'Fernanda',
	// 0 => Fernanda
	'idade'  =>  34,
	//1=> 34
	'e-mail' => 'fmnfernanda@gmail.com',
	//2=> fmnfernanda@gmail.com
	'altura' =>  1.70
	//3=>1.70
	];

	print_r($pessoa);

echo '<hr>';

echo $pessoa['nome'] . '<br>';
echo $pessoa['idade'] . '<br>';
echo $pessoa['e-mail'] . '<br>';
echo $pessoa['altura'] . '<br>';
