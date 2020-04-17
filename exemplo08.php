<?php

//Função dinâmica com vários argumentos
function soma(int ...$valores){

	return array_sum($valores);

}

echo soma(2,2) . "<br>";
echo soma(20,12) . "<br>";
echo soma(1.5,3.2) . "<br>";
echo soma(8,12.2,20) . "<br>";
?>