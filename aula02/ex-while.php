<?php 

//utilizando a estrutura de repeticao while, imprima os numeros de 0 a 10
//utilizando a estrutura de repeticao while, imprima os numeros pares de 0 a 20
//utilizando a estrutura de repeticao while, imprima os numeros impares de 0 a 20
//utilizando a estrutura de repeticao while, imprima os numeros multiplos de 5 de 0 a 50


$num = 0;

while ($num <= 10){
	
	echo $num .PHP_EOL;
	
	$num++;

}
echo "Fim" .PHP_EOL;

$num = 0;

while ($num <= 20){

	
	echo $num .PHP_EOL;

	$num = $num +2;	
	
}

echo "Fim" .PHP_EOL;

$num = 1;

while ($num <= 20){

	echo $num .PHP_EOL;

	$num = $num +2;
	
}

echo "Fim" .PHP_EOL;

$num = 0;

while ($num <= 50){

	echo $num .PHP_EOL;

	$num = $num + 5;
	
}

echo "Fim" .PHP_EOL;

$num = 0;

while($num <= 50){

	if ($num %5 == 0)

		echo $num .PHP_EOL;

		$num = $num + 5;

}
echo "Fim" .PHP_EOL;

$num = 0;

while($num <= 50){

	if ($num %2 != 0)

		echo $num .PHP_EOL;

		$num = $num + 1;

}
echo "Fim" .PHP_EOL;


	
