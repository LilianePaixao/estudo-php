<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes=[
    '123.456.789-80' => [
    'titular' =>'Maria',
    'saldo'=> 1000
    ],
    '123.456.789-81'=> [
    'titular' => 'Alberto',
    'saldo' => 300
    ],
    '123.456.789.82'=> [
    'titular' =>'Vinicius',
    'saldo' => 100
    ]
    ];

    // $contasCorrentes['123.456.789-80']['saldo'];
    // $contasCorrentes ['123.456.789-81']['titular];
   

    if (500 > $contasCorrentes['123.456.789-81']['saldo']){
        exibeMensagem("Você não pode sacar");
    }else{
    $contasCorrentes['123.456.789-81']['saldo'] -=  500;
    }
    
    if (500 > $contasCorrentes['123.456.789-80']['saldo']){
        exibeMensagem("Você não pode sacar");
    }else{
    $contasCorrentes['123.456.789-80']['saldo'] -=  500;
    }


// $contasCorrentes['123.456.789-81']['saldo'] -=  500;
// $contasCorrentes['123.456.789-80']['saldo']= $contasCorrentes['123.456.789-80']['saldo'] - 500;

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem ( $cpf . " ". $conta['titular'] . "  ". $conta['saldo']);
    
}
