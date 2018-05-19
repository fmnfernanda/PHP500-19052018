<?php

//CLI - Command Line Interface
// Interface de Linha de Comando

$nome = readline('Digite seu nome: ');
$idade = readline('Digite sua idade: ');
$cidade = readline('Digite sua cidade: ');

echo "Meu nome é {$nome } tenho {$idade} anos e sou de {$cidade}" . PHP_EOL;
