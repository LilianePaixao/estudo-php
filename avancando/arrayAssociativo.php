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

$contasCorrentes=[$conta1,$conta2,$conta3];

for ($i=0; $i < count($contasCorrentes); $i++){
echo $contasCorrentes[$i]["titular"].PHP_EOL;
}

//Como incluir
