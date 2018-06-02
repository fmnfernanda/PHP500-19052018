<?php

function fatorial($x){
	if ($x != 0){
		return $x * fatorial ($x-1);
	}
}

echo fatorial(4);