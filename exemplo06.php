<?php

$a = 10;

//Passagem de parametro por referência
function trocaValor(&$a){

	$a += 50;
	return $a;
}

echo $a . "<br>";

echo trocaValor($a) . "<br>";

echo $a . "<br>";

echo trocaValor($a) . "<br>";


?>