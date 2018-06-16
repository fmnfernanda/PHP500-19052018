<?php

require 'conexao.php';

/*
	nome
	email
	senha

*/

$nome = 'Fernanda Nunes';
$email = 'fnunes@4linux.com.br';
$senha = '123456';
$id = 1;

$query = "UPDATE usuarios SET nome='{$nome}',email='{$email}',senha='{$senha}' WHERE id='{$id}'";

$result = mysqli_query($con,$query);
if($result){
	echo 'ok<br>';
}
else {
	echo 'Erro ao inserir';
}	

