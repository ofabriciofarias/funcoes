<?php

//subrotina
function ola(){

	echo "Ola, estou na função.<br>";
}

//função retorna algo em php
function ola2(){
	return "Ola, estou na função.<br>";
}


ola();
ola();

echo ola2();

$frase = ola2();

echo strlen($frase);

?>