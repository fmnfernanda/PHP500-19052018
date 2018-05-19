<?php

echo '<pre>';
echo 'Operador AND && <br>';
echo 'true and true ';
var_dump(true and true);
echo 'true and false ';
var_dump(true && false);
echo 'false and true ';
var_dump(false && true);
echo 'false and false ';
var_dump(false && false);
echo '<hr>';

echo 'Operador OR || <br>';
echo 'true or true ';
var_dump(true or true);
echo 'true or false ';
var_dump(true || false);
echo 'false or true ';
var_dump(false || true);
echo 'false or false ';
var_dump(false || false);
echo '<hr>';

echo 'Operador XOR <br>';
echo 'true xor true ';
var_dump(true xor true);
echo 'true xor false ';
var_dump(true xor false);
echo 'false xor true ';
var_dump(false xor true);
echo 'false xor false ';
var_dump(false xor false);
echo '<hr>';

echo 'Operador de Negacao ! <br>';
echo '!false ';
var_dump(!false);
echo '!true ';
var_dump(!true );
echo '<hr>';