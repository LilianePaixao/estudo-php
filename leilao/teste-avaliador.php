<?php

use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Model\Lance;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

// arrumo a casa para o teste
$leilao = new Leilao ('Fiat 147 0KM');

$maria = new Usuario('Maria');
$joao = new Usuario ('João');

$leilao->recebeLance(new Lance($joao, 2000));
$leilao->recebeLance(new Lance($maria, 2500));

$leiloeiro = new Avaliador();

//executo o código a ser testado
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

// Verifico se a saída é a esperada
$valorEsperado = 2500;

if($valorEsperado == $maiorValor){
    echo "TESTE OK". PHP_EOL;
} else {
    echo "TESTE FALHOU". PHP_EOL;
}


