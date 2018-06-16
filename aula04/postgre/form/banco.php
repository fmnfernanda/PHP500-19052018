<?php

function conectar()
{
	return pg_connect('host=localhost port=5432 dbname=aula user=fernanda password=kitkat');
}

function desconectar($con)
{
	pg_close($con);
}

echo '<pre>';
$con = conectar();
var_dump($con);
desconectar($con);
var_dump($con);

/*

	$tabela = usuarios
	$dados = ['nome'=> 'Lucas','email'=>'lucas@4linux.com', 'senha' => '123'

*/

function inserir (string $tabela, array $dados)
{
	foreach ($dados as $campo => $valor) {
		$campos[] = $campo;
		$valores[] = "'{$valor" 
	}
}