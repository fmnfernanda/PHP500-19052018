<?php


$op = readline('Digite uma opcao: ');

switch(true){
    case ($op > 0 && $op < 5):
        echo 'Seu numero esta entre 0 e 5' .PHP_EOL;
        break;

    case ($op > 5 && $op < 10):
        echo 'Seu numero esta entre 5 e 10' .PHP_EOL;  
        break;

    case ($op > 10 && $op < 15):
        echo 'Seu numero esta entre 10 e 15' .PHP_EOL;  
        break;     

    default:
        echo 'Opcao invalida' .PHP_EOL;
        break;

}    