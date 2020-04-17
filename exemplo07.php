<?php

$pessoa = array(
	"nome" => "Fabricio",
	"idade" => 32
);


foreach($pessoa as &$value) {
	
	if(gettype($value) === 'integer'){
		$value += 10;
	} 

	echo $value . "<br>";
}

print_r($pessoa);

?>