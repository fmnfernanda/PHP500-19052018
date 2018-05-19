<?php

$idade = 17;
$temHabilitacao = false;

if($idade >= 18 && $temHabilitacao){
	echo 'Pode dirigir';
}
else if ($idade >=18){
	echo 'Nao pode dirigir, mas pode tirar habilitacao';
}
else {
	echo 'Nao pode dirigir e nem tirar habilitacao';
}