<?php

$str = 'O rato roeu a roupa do rei de roma';

echo strtoupper($str);

echo '<hr>';

echo strtolower($str);

echo '<hr>';

echo ucfirst($str);

echo '<hr>';

echo ucwords($str);

echo '<hr>';

// Quantidade de caracteres
echo strlen($str);

echo '<hr>';

//Substitui valores da string conforme parametros
echo str_replace('rato', 'cachorro', $str);

echo '<br>';

echo str_replace(['rato', 'roeu'], ['cachorro', 'comeu'], $str);

echo '<hr>';

//parte de uma string

echo substr($str, 6);

echo '<br>';

echo substr($str, 6, 10);

echo '<hr>';

//procura pedaco da string

echo strpos($str, 'rei');

echo '<hr>';
