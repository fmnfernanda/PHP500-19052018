<?php

//array $pessoa -> nome, idade e email
//exibir na tela o conteudo de cada informacao seguindo o exemplo
//meu nome é:
//tenho xxx anos
//meu email é:


echo '<pre>';

$pessoas = [

	[
		'nome'=> 'Joao',
		'idade'=> 36,
		'email'=> 'jsilva@uol.com.br'
	    ],

	[
		'nome'=> 'Jose',
		'idade'=> 65,
		'email'=> 'jsantos@uol.com.br'
	    ],

    [
		'nome'=> 'Amelia',
		'idade'=> 46,
		'email'=> 'asouza@uol.com.br'
	    ],

];

echo 'Meu nome é: '.$pessoas[0]['nome'] . '<br>';
echo 'Minha idade é: '.$pessoas[0]['idade'] . '<br>';
echo 'Meu e-mail é: '.$pessoas[0]['email'] . '<br>';

echo '<br>';

echo 'Meu nome é: '.$pessoas[1]['nome'] . '<br>';
echo 'Minha idade é: '.$pessoas[1]['idade'] . '<br>';
echo 'Meu e-mail é: '.$pessoas[1]['email'] . '<br>';

echo '<br>';

echo 'Meu nome é: '.$pessoas[2]['nome'] . '<br>';
echo 'Minha idade é: '.$pessoas[2]['idade'] . '<br>';
echo 'Meu e-mail é: '.$pessoas[2]['email'] . '<br>';

echo '<hr>';

//array pessoas onde termos 3 pessoas
//cada pessoa possui nome idade e email
//exibir na tela o conteudo de cada informacao seguindo o exemplo
//meu nome é:
//tenho xxx anos
//meu email é:

foreach ($pessoas as $pessoa){
	echo 'Meu nome é: '.$pessoa['nome'] . '<br>';
	echo 'Minha idade é: '.$pessoa['idade'] . ' anos'. '<br>';
	echo 'Meu e-mail é: '.$pessoa['email'] . '<br>';  
	echo '<hr>'; 
}

