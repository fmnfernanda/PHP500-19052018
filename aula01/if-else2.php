<?php

//cli
//receber uma idade
//Exibir Voe é maior de idade
//senao Exibir voce é menor de idade

$idade = readline ('Digite sua idade: ');

if ($idade >= 18){
	echo 'Voce é maior de idade' . PHP_EOL;
}
else {
	echo 'Voce é menor de idade' . PHP_EOL;;
}
