<?php 

//utilizando a estrutura de repeticao while, imprima os numeros de 0 a 10
//utilizando a estrutura de repeticao while, imprima os numeros pares de 0 a 20
//utilizando a estrutura de repeticao while, imprima os numeros impares de 0 a 20
//utilizando a estrutura de repeticao while, imprima os numeros multiplos de 5 de 0 a 50


for ($i=0; $i <= 20 ; $i++) { 
	
	echo $i .PHP_EOL;
}
echo "Fim" .PHP_EOL;

for ($i=0; $i <= 20 ; $i+=2) { 
	
	echo $i .PHP_EOL;
}
echo "Fim" .PHP_EOL;

for ($i=1; $i <= 20 ; $i+=2) { 
	
	echo $i .PHP_EOL;
}
echo "Fim" .PHP_EOL;

for ($i=0; $i <= 50 ; $i+=5) { 
	
	echo $i .PHP_EOL;
}
echo "Fim" .PHP_EOL;

//if ternario

echo ($idade > 18) ? 'True' : 'False';

//operador elvis

echo ($idade) ?: 'falso'