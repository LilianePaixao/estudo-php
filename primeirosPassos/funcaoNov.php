<?php

/*
function soma(int ...$numeros){

	return array_sum($numeros);
}

echo soma(2, 2);
echo "<br>";
echo soma(2.2, 4.9);

*/

function soma(int ...$numeros):string{

	return array_sum($numeros);
}

echo var_dump(soma(2, 2));
echo "<br>";