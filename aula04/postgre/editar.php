<?php

require 'conexao.php';

/*
	nome
	email
	senha

*/

$nome = 'Isabela Bardella';
$email = 'ibardella@4linux.com.br';
$senha = '123456';
$id = 4;

$query = "UPDATE usuarios SET nome='{$nome}',email='{$email}',senha='{$senha}' WHERE id='{$id}'";

$result = pg_query($con,$query);
if($result){
	echo 'ok<br>';
}
else {
	echo 'Erro ao inserir';
}	
