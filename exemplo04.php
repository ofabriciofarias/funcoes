<?php

function ola(){

	//Retorna todos os argumentos adicionados na função
	$argumentos = func_get_args();

	return $argumentos;
}

var_dump(ola("Bom dia"));
echo "<br>";
var_dump(ola("Bom dia", 10, "função sobrecarregada"));

?>

