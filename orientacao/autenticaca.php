<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'Joao da Silva',
    new CPF('234.678.876-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');
