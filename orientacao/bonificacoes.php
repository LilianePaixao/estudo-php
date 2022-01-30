<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};

$umFuncionario = new Desenvolvedor(
'Vinicius Dias',
new CPF('123.456.789-10'),
1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
'Patricia',
new CPF('987.654.321-10'),
3000
);

$umDiretor = new Diretor(
    'Ana Paixão',
    new CPF('543.345.234-10'),
    5000
);
$umEditor = new EditorVideo(
    'Paulo',
    new CPF('124.421.431-10'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();