<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    ' Petropolis',
    ' bairro Qualquer',
    ' Minha rua',
    ' 71B'
);
$outroEndereco = new Endereco(
    ' Rio',
    ' Centro',
    ' Uma rua aí',
    ' 50'
);

echo 'Antes de mudar'. PHP_EOL;
echo '_____________________________________________'. PHP_EOL;
echo "$umEndereco" . PHP_EOL;
echo '_____________________________________________'. PHP_EOL;
echo 'Depois de mudar'. PHP_EOL;
echo '_____________________________________________'. PHP_EOL;
$umEndereco->rua = " Tamandaré";
echo $umEndereco . PHP_EOL;
echo '_____________________________________________'. PHP_EOL;

