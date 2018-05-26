<?php

function olamundo()
{

	echo 'Ola Mundo'. '<br>';
}

olamundo();

echo '<hr>';

function olaUsuario($nome)
{
	echo 'Ola '. $nome. '<br>';
}

olaUsuario('Lucas');
olaUsuario('Maria');
echo '<hr>';

function olaUsuario2($nome = '4Linux')
{
	echo 'Ola '. $nome. '<br>';
}

olaUsuario2('Lucas');
olaUsuario2();
echo '<hr>';

function soma($num1,$num2)
{
	echo $num1 + $num2 . '<br>';
}

soma (3,4);
echo '<hr>';

function soma2(int $num1,int $num2)
{
	echo $num1 + $num2 . '<br>';
}

//soma2 ('abc',4);
soma2 (6,4);
echo '<hr>';

// (int $idade) - forca tipagem parametro
// :bool -  forca tipagem retorno
function verificaMaiorIdade (int $idade) : bool
{
	if($idade >= 18){
		return true;
	}
	else
		return false;

	//return ($idade >= 18 ? true : false)
}

$var = verificaMaiorIdade(16);
var_dump($var);
echo '<hr>';

function negrito(string $txt) : string
{
	return '<strong>' .$txt .'</strong>';
}

echo negrito ('4Linux');

echo '<hr>';

function italico ()
{
	//usando variavel de escopo global
	//nao é mt bom de usar mas as vezes é necessário
	global $msg;
	echo '<i>' . $msg .'</i>';
}

$msg = '4Linux - PHP';

italico();

echo '<hr>';

function adicionar(&$fruta)
{
	++$fruta;
}

//adicionar (10) assim nao funciona pois tem q passar um endereço e nao um valor

$laranjas = 5;
echo $laranjas . '<br>';
++$laranjas;
echo $laranjas . '<br>';
adicionar($laranjas);
echo $laranjas . '<br>';
++$laranjas;
echo $laranjas . '<br>';

echo '<hr>';

