<?php

$pessoa = array(
	"nome"=>'Liliane',
	'idade'=> 30
);

foreach ($pessoa as &$value) {
	
	if (gettype($value) === "integer") $value += 10;

	echo "$value <br>";
}

print_r($pessoa);