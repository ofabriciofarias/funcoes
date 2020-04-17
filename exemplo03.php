<?php

function ola($texto){

	//return "Ola funções!<br>";
	return "Ola $texto!<br>";
}

function ola2($texto = "Programadores"){

	//return "Ola funções!<br>";
	return "Ola $texto!<br>";
}

function ola3($texto = "Programadores", $periodo = "Bom dia"){

	//return "Ola funções!<br>";
	return "Ola $texto! $periodo<br>";
}

//Os valores obrigatórios devem estar à esquerda dos argumentos.
function ola4($texto, $periodo = "Bom dia"){

	//return "Ola funções!<br>";
	return "Ola $texto! $periodo<br>";
}

echo ola("funções");
echo ola("Fabricio");
echo ola("LABEX");

echo ola2("Novo texto");
echo ola2("");
echo ola2();

echo ola3();
echo ola3("");
echo ola3("Fabricio", "Boa Tarde");
echo ola3("LABEX", "");
echo ola3("LABEX");

echo ola4("LABEX");
echo ola4("");


?>