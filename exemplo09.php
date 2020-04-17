<?php

//Converte o resultado da soma para string que é retornado.
function soma(int ...$valores):string{
	return array_sum($valores);
}

function soma2(float ...$valores):string{
	return array_sum($valores);
}
echo var_dump(soma(2,2));
echo "<br>";

echo soma(25.7,22) . "<br>";

echo soma2(25.7,22) . "<br>";


?>