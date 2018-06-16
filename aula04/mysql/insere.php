<?php

require 'conexao.php';

$nome = 'Milena Bardella';
$email = 'mbardella@4linux.com.br';
$senha = '678';

$query = "INSERT INTO usuarios(nome,email,senha) VALUES('{$nome}','{$email}', '{$senha}')";

echo '<pre>';
echo $query;
echo '<br>';

$result = mysqli_query($con,$query);
if($result){
	echo 'ok<br>';
}
else {
	echo 'Erro ao inserir';
}

?>

	