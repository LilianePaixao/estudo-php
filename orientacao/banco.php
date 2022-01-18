<?php

require_once './Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Liliane Paixão');

$primeiraConta->depositar(5000); // isso é ok
$primeiraConta->sacar(300); //isso não é ok

echo $primeiraConta->recuperarNomeTitular(). PHP_EOL;
echo $primeiraConta->recuperarCpfTitular(). PHP_EOL;
echo $primeiraConta->recuperarSaldo(). PHP_EOL;

$segundaConta = new Conta('980.765.543-12', 'Efigênia Gonçalves');

echo $segundaConta->recuperarNomeTitular(). PHP_EOL;
echo $segundaConta->recuperarCpfTitular(). PHP_EOL;
echo $segundaConta->recuperarSaldo(). PHP_EOL;

