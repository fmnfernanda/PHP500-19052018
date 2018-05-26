<?php

//numeros de 0 a 10, para quando chegar no 6

for ($i=0; $i <= 10; $i++){
	if($i == 6){
		break;
	}

	echo $i .PHP_EOL;

}

echo'....................';

//numeros de 0 a 10 pulando o 7

for($i=0; $i <= 10; $i++){
	if($i == 7){
		continue;
	}
	echo $i .PHP_EOL;
}
