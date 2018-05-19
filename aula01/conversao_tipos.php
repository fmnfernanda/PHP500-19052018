<?php 

echo '<pre>';

$var = 10;
var_dump($var);
$var = (bool) $var;
echo '<hr>';
var_dump($var);
echo '<hr>';
$var = (int) $var;
var_dump($var);
echo '<hr>';
$var = (float) $var;
var_dump($var);
echo '<hr>';
$var = (string) $var;
var_dump($var);
echo '<hr>';
