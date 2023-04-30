<?php

$idade = 20;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

/*
if ( $idade <= $idadeCrianca ){
	echo "Você é uma criança";
} else if ( ($idade > $idadeCrianca) && ($idade < $idadeMelhor) || ($idade == $idadeMaior)){
	echo "Você é um jovem";
} else {
	echo "Você é um idoso";
}
*/
/*
if ($idade <= $idadeCrianca) {
	echo "criança";
} elseif ($idade < $idadeMaior) {
	echo "Adolescente";
}elseif ($idade < $idadeMelhor) {
	echo "Adulto";
}else{
	echo "idoso";
}
*/

echo ($idade < $idadeMaior )? "Menor de idade" :  "Maior de idade";

?>