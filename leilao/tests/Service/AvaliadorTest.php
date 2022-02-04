<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemCrescente()
    {
        // arrumo a casa para o teste
        $leilao = new Leilao ('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario ('João');

        $leilao->recebeLance(new Lance($maria, 2500));
        $leilao->recebeLance(new Lance($joao, 2000));

        $leiloeiro = new Avaliador();

        //executo o código a ser testado
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        // Verifico se a saída é a esperada
        self::assertEquals(2000,$menorValor);
    }

    public function testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemDeCrescente()
    {
        // arrumo a casa para o teste
        $leilao = new Leilao ('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario ('João');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();

        //executo o código a ser testado
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        // Verifico se a saída é a esperada
        self::assertEquals(2000,$menorValor);
    }
    public function testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemCrescente()
    {
        // arrumo a casa para o teste
        $leilao = new Leilao ('Fiat 147 0KM');

        $maria = new Usuario('Maria');
        $joao = new Usuario ('João');

        $leilao->recebeLance(new Lance($joao, 2000));
        $leilao->recebeLance(new Lance($maria, 2500));

        $leiloeiro = new Avaliador();

        //executo o código a ser testado
        $leiloeiro->avalia($leilao);

        $menorValor = $leiloeiro->getMenorValor();

        // Verifico se a saída é a esperada
        self::assertEquals(2000,$menorValor);
    }
}