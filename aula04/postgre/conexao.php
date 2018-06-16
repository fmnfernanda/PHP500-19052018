<?php

$host = 'localhost';
$port =  '5432';
$db = 'aula';
$user = 'fernanda';
$pass = 'kitkat';

$conString = "host={$host} port={$port} dbname={$db} user={$user} password={$pass}";

//echo '<pre>';
//echo $conString;
//echo '<br>';
$con = pg_connect($conString);
//var_dump($con);

