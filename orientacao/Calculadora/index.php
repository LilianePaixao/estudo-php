<?php

require "Calculadora.php";

$notas = [9,6,7,8,9];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if(isset($media)){
    echo"A média é: $media";
}else{
    echo "Não foi possível calcuçar a média";
}

