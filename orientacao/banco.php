<?php

require_once './Conta.php';
require_once './Titular.php';
require_once './CPF.php';

$vinicius = new Titular(new CPF('123.456.789-10', 'Vinícius Dias'));
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(5000); // isso é ok
$primeiraConta->sacar(300); //isso não é ok

echo $primeiraConta->recuperarNomeTitular(). PHP_EOL;
echo $primeiraConta->recuperarCpfTitular(). PHP_EOL;
echo $primeiraConta->recuperarSaldo(). PHP_EOL;

$patricia = new Titular (new CPF('980.765.543-12', 'Patricia'));
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta (new Titular(new CPF('123','Liliane')));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();

