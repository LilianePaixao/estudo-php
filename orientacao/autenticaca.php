<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;



$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'Joao da Silva',
    new CPF('234.678.876-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '1234');
