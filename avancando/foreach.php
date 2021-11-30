<?php
$conta1=[
    "titular" =>'Liliane',
    'saldo'=> 1000
];
$conta2=[
    "titular" => "Emanuel",
    "saldo" => 200
];
$conta3=[
    "titular" =>'Lilis',
    'saldo' =>300
];
//echo $conta3['titular']. PHP_EOL;

$contasCorrentes=[
    12345678910 => $conta1,
    12345678911 => $conta2,
    12345678912 => $conta3];

foreach ($contasCorrentes as $cpf => $conta){
    echo $conta["saldo"].PHP_EOL;
}