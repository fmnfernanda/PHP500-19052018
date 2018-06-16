<?php

require 'conexao.php';

$nome = 'Isabella Bardella';
$email = 'ibardella@4linux.com.br';
$senha = '567';

$query = "INSERT INTO usuarios(nome,email,senha) VALUES('{$nome}','{$email}', '{$senha}')";

echo '<pre>';
echo $query;
echo '<br>';

$result = pg_query($con,$query);
if($result){
	echo 'ok<br>';
}
else {
	echo 'Erro ao inserir';
}

?>