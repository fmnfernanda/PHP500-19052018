<?php

$num1 = 10;
$num2 = '10';

echo "<pre>";

echo 'Igual == ';
var_dump($num1 == $num2);

echo 'Diferente !=';
var_dump($num1 != $num2);

echo 'Identico ===';
var_dump($num1 === $num2);

echo 'Nao Identico !==';
var_dump($num1 !== $num2);

echo 'Maior >';
var_dump($num1 > $num2);

echo 'Maior ou Igual >=';
var_dump($num1 >= $num2);

echo 'Menor < ';
var_dump($num1 < $num2);

echo 'Menor ou Igual <=';
var_dump($num1 <= $num2);

echo '<hr>';

echo 'Operador Spaceship';
//$a<=>$b
var_dump(1<=>0);
var_dump(1<=>1);
var_dump(1<=>2);


