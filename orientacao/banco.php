<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\CPF;

$endereco = new Endereco('Petropolis', 'um bairro', 'minha rua','71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinícius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(5000); // isso é ok
$primeiraConta->sacar(300); //isso é ok

echo $primeiraConta->recuperarNomeTitular(). PHP_EOL;
echo $primeiraConta->recuperarCpfTitular(). PHP_EOL;
echo $primeiraConta->recuperarSaldo(). PHP_EOL;

$patricia = new Titular (new CPF('980.765.543-12'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco ('A','b','c','1D');
$outra = new Conta (new Titular(new CPF('123.654.789-01'),'Liliane', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();

